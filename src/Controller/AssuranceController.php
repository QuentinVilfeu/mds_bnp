<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AssuranceController extends AbstractController
{
    #[Route('/assurance', name: 'app_assurance')]
    public function index(): Response
    {
        return $this->render('assurance/index.html.twig');
    }

    #[Route('/assurance/particulier', name: 'app_assurance_particulier')]
    public function assurancePart(): Response
    {
        return $this->render('assurance/particulier.html.twig');
    }

    #[Route('/assurance/professionnel', name: 'app_assurance_professionnel')]
    public function assurancePro(): Response
    {
        return $this->render('assurance/professionnel.html.twig');
    }
}
