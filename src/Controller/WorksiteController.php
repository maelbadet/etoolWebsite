<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class WorksiteController extends AbstractController
{
    #[Route('/worksite', name: 'app_worksite')]
    public function index(): Response
    {
        return $this->render('worksite/index.html.twig', [
            'controller_name' => 'WorksiteController',
        ]);
    }
}
