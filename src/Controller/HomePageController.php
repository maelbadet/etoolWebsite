<?php

namespace App\Controller;

use App\Entity\Tools;
use App\Entity\Worksite;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;

class HomePageController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'app_home_page')]
    public function index(): Response
    {
        $tools = $this->entityManager->getRepository(Tools::class)->findBy([], ['id' => 'DESC'], 3);
        $worksites = $this->entityManager->getRepository(Worksite::class)->findBy([], ['id' => 'DESC'], 3);

        return $this->render('home_page/index.html.twig', [
            'tools' => $tools,
            'worksites' => $worksites,
        ]);
    }
}
