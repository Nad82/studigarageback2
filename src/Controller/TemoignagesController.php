<?php

namespace App\Controller;

use App\Repository\TemoignagesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TemoignagesController extends AbstractController
{
    #[Route('/temoignages', name: 'temoignages_index', methods: ['GET'])]
    public function index(TemoignagesRepository $repo): Response
    {
        return $this->render('temoignages/index.html.twig', [
            'temoignages' => $repo->findAll(),
        ]);
    }
    #[Route('/temoignages(id)', name: 'temoignages_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show($id): Response
    {
        return $this->render('temoignages/show.html.twig', [
            'controller_name' => 'TemoignagesController',
        ]);
    }

    #[Route('/temoignages/create', name: 'temoignages_create', priority:0, methods: ['GET', 'POST'])]
    public function create(): Response{
        dd(__METHOD__);
    }

    #[Route('/temoignages/{id}/edit', name: 'temoignages_edit', methods: ['GET', 'POST'], requirements: ['id' => '\d+'])]
    public function update(): Response{
        dd(__METHOD__);
    }

    #[Route('/temoignages/{id}/delete', name: 'temoignages_delete', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function delete(): Response{
        dd(__METHOD__);
    }
}
