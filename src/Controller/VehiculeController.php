<?php

namespace App\Controller;

use App\Entity\Vehicule;
use App\Repository\VehiculeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\VehiculeType;

class VehiculeController extends AbstractController
{
    #[Route('/vehicule', name: 'vehicule_index', methods: ['GET'])]
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
    #[Route('/vehicule/create', name: 'vehicule_create', methods: ['GET', 'POST'])]
    public function create(Request $request, VehiculeRepository $repo, Vehicule $vehicule): Response
    {
        $form = $this->createForm(VehiculeType::class, $vehicule);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $repo->save($vehicule, true);
            $this->addFlash('success', 'Vous avez bien ajouté un véhicule avec succès');
            return $this->redirectToRoute('vehicule_index');
        }
        return $this->render('vehicule/create.html.twig', [
            'form' => $form,
        ]);
    }
    #[Route('/vehicule/{id}/edit', name: 'vehicule_edit', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
    public function update(Request $request, Vehicule $vehicule,VehiculeRepository $repo): Response
    {
        $form = $this->createForm(VehiculeType::class, $vehicule);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $repo->save($vehicule, true);
            $this->addFlash('success', 'Vous avez bien modifié le véhicule avec succès');
            return $this->redirectToRoute('vehicule_index');
        }
        return $this->render('vehicule/edit.html.twig', [
            'form' => $form,
        ]);
    }
    #[Route('/vehicule/{id}/delete', name: 'vehicule_delete', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function delete(Vehicule $vehicule, vehiculeRepository $repo): Response
    {
        $repo->remove($vehicule, true);
        $this->addFlash('success', 'Vous avez bien supprimé le véhicule avec succès');
        return $this->redirectToRoute('vehicule_index');
    }
}
