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

    #[Route('/horaires', name: 'page_gestion_horaires_garage')]
    public function horaires(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
            'title' => 'Horaires',
        ]);
    }

    #[Route('/Services', name: 'page_gestion_services_garage')]
    public function services(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
            'title' => 'Services',
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

    #[Route('/moderation', name: 'page_gestion_des_temoignages')]
    public function moderation(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
            'title' => 'Moderation',
        ]);
    }

    #[Route('/temoignages', name: 'page_entree_temoignages_clients')]
    public function temoignages(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
            'title' => 'Temoignages',
        ]);
    }

    #[Route('/validation', name: 'page_validation_temoignages_clients')]
    public function validation(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
            'title' => 'Validation',
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

    #[Route('/atelier', name: 'page_contact_client_atelier')]
    public function atelier(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
            'title' => 'Atelier',
        ]);
    }

    #[Route('/garage', name: 'page_contact_client_vehicules')]
    public function garage(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
            'title' => 'Garage',
        ]);
    }
}