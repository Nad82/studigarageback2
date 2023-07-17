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
    
    #[Route('/Information', name: 'page_gestion_infos_garage')]
    public function information(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
            'title' => 'Information',
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

    #[Route('/contact', name: 'page_gestion_contact_clients')]
    public function contact(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
            'title' => 'Contact',
        ]);
    }

    #[Route('/formulaireG', name: 'page_formulaireG')]
    public function formulaireG(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
            'title' => 'FormulaireG',
        ]);
    }

    #[Route('/formulaireV', name: 'page_formulaireV')]
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
    #[Route('/gestion', name: 'page_gestion_employes')]  
    public function gestion(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
            'title' => 'Gestion',
        ]);
    }
}