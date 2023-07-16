<?php

namespace App\Controller;

use App\Entity\Administrateur;
use App\Repository\AdministrateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdministrateurController extends AbstractController
{
    #[Route('/administrateur', name: 'administrateur_index')]
    public function index(AdministrateurRepository $repo): Response
    {
        return $this->render('administrateur/index.html.twig', [
            'administrateurs' => $repo->findAll(),
        ]);
    }
    #[Route('/administrateur(id)', name: 'administrateur_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(Administrateur $administrateur): Response 
    {
        return $this->render('administrateur/show.html.twig', [
            'administrateur' => $administrateur
        ]);
    }
    #[Route('/administrateur/create', name: 'administrateur_create', priority:0, methods: ['GET', 'POST'])]
    public function create(): Response{
        dd(__METHOD__);
    }
    #[Route('/administrateur/{id}/edit', name: 'administrateur_edit', methods: ['GET', 'POST'], requirements: ['id' => '\d+'])]
    public function update(): Response{
        dd(__METHOD__);
    }
    #[Route('/administrateur/{id}/delete', name: 'administrateur_delete', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function delete(): Response{
        dd(__METHOD__);
    }
}
