<?php

namespace App\Controller;

use App\Entity\Worksite;
use App\Form\WorksiteType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class WorksiteController extends AbstractController
{
    private EntityManagerInterface $entityManager;
    private HttpClientInterface $httpClient;

    public function __construct(EntityManagerInterface $entityManager, HttpClientInterface $httpClient)
    {
        $this->entityManager = $entityManager;
        $this->httpClient = $httpClient;
    }

    #[Route('/worksite', name: 'app_worksite')]
    public function index(): Response
    {
        $worksites = $this->entityManager->getRepository(Worksite::class)->findAll();

        return $this->render('worksite/index.html.twig', [
            'worksites' => $worksites,
        ]);
    }

    #[Route('/worksite/create', name: 'app_worksite_create')]
    public function create(Request $request): Response
    {
        $worksite = new Worksite();
        $form = $this->createForm(WorksiteType::class, $worksite);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $title = $form->get('title')->getData();
            $description = $form->get('description')->getData();
            $address = $form->get('address')->getData();
            $city = $form->get('city')->getData();
            $postal_code = $form->get('postal_code')->getData();

            $totalAddress = "$address, $postal_code, $city";
            $apiUrl = 'https://neutrinoapi.net/geocode-address';

            // Requête HTTP POST
            $response = $this->httpClient->request('POST', $apiUrl, [
                'headers' => [
                    'User-ID' => 'maelbadet',
                    'API-Key' => '1mbvCRBxlCSKHvRngbOR2dcXMjfNg3abPKKQUFirhRYuN73Z',
                ],
                'body' => [
                    'address' => $totalAddress,
                    'house-number' => '',
                    'street' => '',
                    'city' => $city,
                    'county' => '',
                    'state' => '',
                    'postal-code' => $postal_code,
                    'country-code' => '',
                    'language-code' => 'en',
                    'fuzzy-search' => 'false',
                ],
            ]);
            $data = $response->toArray();
            if (!empty($data)) {
                $latitude = $data["locations"][0]['latitude'];
                $longitude = $data["locations"][0]['longitude'];
                // Sauvegarde des coordonnées dans l'entité Worksite
                $worksite->setTitle($title);
                $worksite->setDescription($description);
                $worksite->setCity($city);
                $worksite->setPostalCode($postal_code);
                $worksite->setAddress($address);
                $worksite->setLatitude($latitude);
                $worksite->setLongitude($longitude);

                $this->entityManager->persist($worksite);
                $this->entityManager->flush();

                $this->addFlash('success', 'Le chantier a été créé avec succès.');
                return $this->redirectToRoute('app_worksite');
            } else {
                $this->addFlash('error', 'Impossible de géocoder l\'adresse.');
            }
        }

        return $this->render('worksite/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/worksite/{id}', name: 'app_worksite_show')]
    public function show(int $id): Response
    {
        $worksite = $this->entityManager->getRepository(Worksite::class)->find($id);

        if (!$worksite) {
            throw $this->createNotFoundException('Le chantier avec l\'ID ' . $id . ' n\'a pas été trouvé.');
        }

        return $this->render('worksite/show.html.twig', [
            'worksite' => $worksite,
        ]);
    }
}
