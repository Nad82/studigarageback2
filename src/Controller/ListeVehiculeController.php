<?php

namespace App\Controller;

use App\Entity\Vehicule;
use App\Repository\VehiculeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ListeVehiculeController extends AbstractController

{
    #[Route('/vehicule', name: 'vehicule_index', priority: 1, methods: ['GET'])]
    public function index(VehiculeRepository $repo): Response
    {
        return $this->render('vehicule/index.html.twig', [
            'vehicules' => $repo->findAll(),
        ]);
    }
    #[Route('/vehicule/{id}', name: 'vehicule_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(Vehicule $vehicule): Response
    {
        return $this->render('vehicule/show.html.twig', [
            'vehicule' => $vehicule,
        ]);
}
}



