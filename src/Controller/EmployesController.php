<?php

namespace App\Controller;

use App\Repository\EmployesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmployesController extends AbstractController
{
    #[Route('/employes', name: 'employes_index', methods: ['GET'])]
    public function index(EmployesRepository $repo): Response
    {
        return $this->render('employes/index.html.twig', [
            'employes' => $repo->findAll()
        ]);
    }
    #[Route('/employes(id)', name: 'employes_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(): Response{
        return $this->render('employes/show.html.twig', [
            'controller_name' => 'EmployesController',
        ]);
    }

#[Route('/employes/create', name: 'employes_create', priority:0, methods: ['GET', 'POST'])]
    public function create(): Response{
        dd(__METHOD__);
    }

#[Route('/employes/{id}/edit', name: 'employes_edit', methods: ['GET', 'POST'], requirements: ['id' => '\d+'])]
    public function update(): Response{
        dd(__METHOD__);
    }

#[Route('/employes/{id}/delete', name: 'employes_delete', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function delete(): Response{
        dd(__METHOD__);
    }

}
