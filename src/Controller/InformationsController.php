<?php

namespace App\Controller;

use App\Entity\Informations;
use App\Repository\InformationsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InformationsController extends AbstractController
{
    #[Route('/informations', name: 'informations_index', methods: ['GET'])]
    public function index(InformationsRepository $repo): Response
    {
        return $this->render('informations/index.html.twig', [
            'informations' => $repo->findAll(),
        ]);
    }
    #[Route('/informations(id)', name: 'informations_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(Informations $informations): Response
    {
        return $this->render('informations/show.html.twig', [
            'informations' => $informations,
        ]);
    }

    #[Route('/informations/create', name: 'informations_create', priority:0, methods: ['GET', 'POST'])]
    public function create(): Response{
        dd(__METHOD__);
    }

    #[Route('/informations/{id}/edit', name: 'informations_edit', methods: ['GET', 'POST'], requirements: ['id' => '\d+'])]
    public function update(): Response{
        dd(__METHOD__);
    }
}
