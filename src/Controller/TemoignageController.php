<?php

namespace App\Controller;

use App\Entity\Temoignage;
use App\Repository\TemoignageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TemoignageController extends AbstractController
{
    #[Route('/temoignage', name: 'temoignage_index')]
    public function index(TemoignageRepository $repo): Response
    {
        return $this->render('temoignage/index.html.twig', [
            'temoignages' => $repo->findAll(),
        ]);
    }
    #[Route('/temoignage/{id}', name: 'temoignage_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(Temoignage $temoignage): Response
    {
        return $this->render('temoignage/show.html.twig', [
            'temoignage' => $temoignage,
        ]);
    }
    #[Route('/temoignage/create', name: 'temoignage_create', methods: ['GET', 'POST'])]
    public function create(Request $request, temoignageRepository $repo, Temoignage $temoignage): Response
    {
        $form = $this->createForm(TemoignageType::class, $temoignage);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $repo->save($temoignage, true);
            $this->addFlash('success', 'Vous avez bien ajouté un employé avec succès');
            return $this->redirectToRoute('temoignage_index');
        }
        return $this->render('temoignage/create.html.twig', [
            'formView' => $form->createView(),
        ]);
    }
    #[Route('/temoignage/{id}/edit', name: 'temoignage_edit', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
    public function update(Request $request, temoignage $temoignage,TemoignageRepository $repo): Response
    {
        $form = $this->createForm(TemoignageType::class, $temoignage);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $repo->save($temoignage, true);
            $this->addFlash('success', 'Vous avez bien modifié l\'employé avec succès');
            return $this->redirectToRoute('temoignage_index');
        }
        return $this->render('temoignage/edit.html.twig', [
            'formView' => $form->createView(),
        ]);
    }
    #[Route('/temoignage/{id}/delete', name: 'temoignage_delete', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function delete(Temoignage $temoignage, TemoignageRepository $repo): Response
    {
        $repo->remove($temoignage, true);
        $this->addFlash('success', 'Vous avez bien supprimé l\'employé avec succès');
        return $this->redirectToRoute('temoignage_index');
    }
}