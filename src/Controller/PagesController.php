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
            'title' => 'Employes',
        ]);
    }
    
    #[Route('/informations', name: 'page_gestion_infos_garage')]
    public function informations(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
            'title' => 'Informations',
        ]);
    }

    #[Route('/vehicules', name: 'page_gestion_des_vehicules')]
    public function vehicules(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
            'title' => 'Vehicules',
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
            'title' => 'Contact',
        ]);
    }

    #[Route('/formulaireG', name: 'page_contact_formulaireG')]
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
}