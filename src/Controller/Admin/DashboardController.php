<?php
// src/Controller/Admin/DashboardController.php
namespace App\Controller\Admin;

use App\Entity\Exchange;
use App\Entity\Loan;
use App\Entity\Tools;
use App\Entity\User;
use App\Entity\Worksite;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    public function __construct(private AdminUrlGenerator $adminUrlGenerator)
    {
    }

    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return $this->redirect($this->adminUrlGenerator->setController(UserCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('EtoolWebsite');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToCrud('Users', 'fas fa-user', User::class);
        yield MenuItem::linkToCrud('Exchanges', 'fas fa-arrow-right-arrow-left', Exchange::class);
        yield MenuItem::linkToCrud('Loans', 'fas fa-landmark', Loan::class);
        yield MenuItem::linkToCrud('Tools', 'fas fa-hammer', Tools::class);
        yield MenuItem::linkToCrud('Worksites', 'fas fa-helmet-safety', Worksite::class);
        yield MenuItem::linkToUrl('Accueil', 'fas fa-home', '/');
    }
}


