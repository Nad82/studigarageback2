<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    #[Route('/employes', name: 'page_creation_employes')]
    public function employes(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
            'title' => 'employes',
        ]);
    }
    
    #[Route('/informations', name: 'page_gestion_infos_garage')]
    public function informations(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
            'title' => 'informations',
        ]);
    }

    #[Route('/vehicules', name: 'page_gestion_des_vehicules')]
    public function vehicules(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
            'title' => 'vehicules',
        ]);
    }

    #[Route('/temoignages', name: 'page_gestion_des_temoignages')]
    public function temoignages(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
            'title' => 'temoignages',
        ]);
    }

    #[Route('/contact', name: 'page_gestion_contact_clients')]
    public function contact(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
            'title' => 'contact',
        ]);
    }

    #[Route('/formulaireG', name: 'page_formulaireG')]
    public function formulaireG(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
            'title' => 'formulaireG',
        ]);
    }

    #[Route('/formulaireV', name: 'page_formulaireV')]
    public function formulaireV(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
            'title' => 'formulaireV',
        ]);
    }
    #[Route('/administrateur', name: 'page_administrateur')]
    public function administrateur(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
            'title' => 'administrateur',
        ]);
    }
    #[Route('/gestion', name: 'page_gestion_employes')]  
    public function gestion(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
            'title' => 'gestion',
        ]);
    }
}