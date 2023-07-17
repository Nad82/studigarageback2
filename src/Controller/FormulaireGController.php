<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormulaireGController extends AbstractController
{
    #[Route('/formulaire/g', name: 'app_formulaire_g')]
    public function index(): Response
    {
        return $this->render('formulaire_g/index.html.twig', [
            'controller_name' => 'FormulaireGController',
        ]);
    }
}
