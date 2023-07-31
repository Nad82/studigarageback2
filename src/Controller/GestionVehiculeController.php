<?php

namespace App\Controller;

use App\Entity\Vehicule;
use App\Form\GestionVehiculeType;
use App\Repository\VehiculeRepository;
use App\Service\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class GestionVehiculeController extends AbstractController
{
    #[Route('/', name: 'app_gestion_vehicule_index', methods: ['GET'])]
    public function index(VehiculeRepository $vehiculeRepository): Response
    {
        return $this->render('gestion_vehicule/index.html.twig', [
            'vehicules' => $vehiculeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_gestion_vehicule_new', methods: ['GET', 'POST'])]
    public function new(Request $request, FileUploader $fileUploader, EntityManagerInterface $entityManager): Response
    {
        $vehicule = new Vehicule();
        $form = $this->createForm(GestionVehiculeType::class, $vehicule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $imageFileName = $fileUploader->upload($imageFile);
                $vehicule->setimageFilename($imageFileName);
            }
            $entityManager->persist($vehicule);
            $entityManager->flush();

            return $this->redirectToRoute('app_gestion_vehicule_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('gestion_vehicule/new.html.twig', [
            'vehicule' => $vehicule,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_gestion_vehicule_show', methods: ['GET'])]
    public function show(Vehicule $vehicule): Response
    {
        return $this->render('gestion_vehicule/show.html.twig', [
            'vehicule' => $vehicule,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_gestion_vehicule_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Vehicule $vehicule, FileUploader $fileUploader, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(GestionVehiculeType::class, $vehicule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $imageFileName = $fileUploader->upload($imageFile);
                $vehicule->setimageFilename($imageFileName);
            }

            $entityManager->flush();

            return $this->redirectToRoute('app_gestion_vehicule_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('gestion_vehicule/edit.html.twig', [
            'vehicule' => $vehicule,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_gestion_vehicule_delete', methods: ['POST'])]
    public function delete(Request $request, Vehicule $vehicule, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$vehicule->getId(), $request->request->get('_token'))) {
            $entityManager->remove($vehicule);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_gestion_vehicule_index', [], Response::HTTP_SEE_OTHER);
    }
}
