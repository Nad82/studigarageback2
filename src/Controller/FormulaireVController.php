<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormulaireVController extends AbstractController
{
    #[Route('/formulaire/v', name: 'app_formulaire_v')]
    public function index(): Response
    {
        return $this->render('formulaire_v/index.html.twig', [
            'controller_name' => 'FormulaireVController',
        ]);
    }
}
