<?php
// src/Controller/ToolsController.php

namespace App\Controller;

use App\Entity\Tools;
use App\Form\CreateToolsType;
use Doctrine\ORM\EntityManagerInterface;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\PngWriter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ToolsController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;

    }

    #[Route('/tools/creation', name: 'app_tools_creation')]
    public function index(Request $request): Response
    {
        $writer = new PngWriter();
        $tool = new Tools();
        $form = $this->createForm(CreateToolsType::class, $tool);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $toolName = $_POST["create_tools"]["name"];
            $toolDescription = $_POST["create_tools"]['description'];

            $existingTool = $this->entityManager->getRepository(Tools::class)->findOneBy(['name' => $toolName]);
            if ($existingTool) {
                $this->addFlash('error', 'Un outil avec ce nom existe déjà.');
                return $this->redirectToRoute('app_tools_creation');
            }
            $qrCode = QrCode::create($toolName)
                ->setEncoding(new Encoding('UTF-8'))
                ->setErrorCorrectionLevel(ErrorCorrectionLevel::Low) // Correction
                ->setSize(300)
                ->setMargin(10)
                ->setRoundBlockSizeMode(RoundBlockSizeMode::Margin)
                ->setForegroundColor(new Color(0, 0, 0))
                ->setBackgroundColor(new Color(255, 255, 255));

            $logo = Logo::create(realpath('C:\laragon\www\nouveau_code_appli_etool\etoolWebsite\public/images/etool.png'))
                ->setResizeToWidth(50)
                ->setPunchoutBackground(true);

            $label = Label::create('Label')
                ->setTextColor(new Color(255, 0, 0));

            $result = $writer->write($qrCode, $logo, $label);
            $result->saveToFile('C:\laragon\www\nouveau_code_appli_etool\etoolWebsite\public/images/qrCodeSaver/'.$toolName.'.png');

            $tool->setName($toolName);
            $tool->setDescription($toolDescription);
            $tool->setMaintenance(false);

            $this->entityManager->persist($tool);
            $this->entityManager->flush();

            $this->addFlash('success', 'L\'outil a été enregistré avec succès.');

            return $this->redirectToRoute('app_tools_creation');
        }

        return $this->render('tools/createTool.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/tools', name: 'app_tools')]
    public function toolHome(): Response
    {
        // Récupérer tous les outils depuis la base de données
        $tools = $this->entityManager->getRepository(Tools::class)->findAll();

        // Transmettre les outils à votre template pour les afficher
        return $this->render('tools/toolHome.html.twig', [
            'tools' => $tools,
        ]);
    }

    #[Route('/tools/{id}', name: 'app_tools_id')]
    public function toolId($id): Response
    {
        $tool = $this->entityManager->getRepository(Tools::class)->find($id);
        if (!$tool) {
            throw $this->createNotFoundException('L\'outil avec l\'ID ' . $id . ' n\'a pas été trouvé.');
        }
        return $this->render('tools/toolId.html.twig', [
            'tool' => $tool,
        ]);
    }
}
