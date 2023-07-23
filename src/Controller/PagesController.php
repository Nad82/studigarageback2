<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    #[Route('/employe', name: 'page_creation_employe')]
    public function employe(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
            'title' => 'Employe',
        ]);
    }
    
    #[Route('/horaires', name: 'page_horaires_garage')]
    public function horaire(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
            'title' => 'Horaires',
        ]);
    }
    #[Route('/services', name: 'page_gestion_services_garage')]
    public function service(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
            'title' => 'Services',
        ]);
    }
    #[Route('/vehicule', name: 'page_gestion_des_vehicules')]
    public function vehicule(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
            'title' => 'Vehicule',
        ]);
    }

    #[Route('/temoignage', name: 'page_gestion_des_temoignages')]
    public function temoignage(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
            'title' => 'Temoignage',
        ]);
    }

    #[Route('/formulaire_g', name: 'page_formulaireG')]
    public function formulaireG(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
            'title' => 'FormulaireG',
        ]);
    }

    #[Route('/formulaire_v', name: 'page_formulaireV')]
    public function formulaireV(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
            'title' => 'FormulaireV',
        ]);
    }
    #[Route('/administrateur', name: 'page_administrateur')]
    public function administrateur(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
            'title' => 'Administrateur',
        ]);
    }
}