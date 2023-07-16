<?php

namespace App\Controller;

use App\Repository\VehiculesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VehiculesController extends AbstractController
{
    #[Route('/vehicules', name: 'vehicules_index', methods: ['GET'])]
    public function index(VehiculesRepository $repo): Response
    {
        return $this->render('vehicules/index.html.twig', [
            'vehiculess' => $repo->findAll(),
        ]);
    }

    #[Route('/vehicules(id)', name: 'vehicules_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show($id): Response
    {
        return $this->render('vehicules/show.html.twig', [
            'controller_name' => 'VehiculesController',
        ]);
    }

    #[Route('/vehicules/create', name: 'vehicules_create', priority:0, methods: ['GET', 'POST'])]
    public function create(): Response{
        dd(__METHOD__);
    }

    #[Route('/vehicules/{id}/edit', name: 'vehicules_edit', methods: ['GET', 'POST'], requirements: ['id' => '\d+'])]
    public function update(): Response{
        dd(__METHOD__);
    }

    #[Route('/vehicules/{id}/delete', name: 'vehicules_delete', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function delete(): Response{
        dd(__METHOD__);
    }


}
