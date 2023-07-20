<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\HorairesRepository;
use App\Entity\Horaires;

class HorairesController extends AbstractController
{
    #[Route('/horaires', name: 'horaires_index')]
    public function index(HorairesRepository $repo): Response
    {
        return $this->render('horaires/index.html.twig', [
            'horaires' => $repo->findAll(),
        ]);
    }
    #[Route('/horaires/{id}', name: 'horaires_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(Horaires $horaires): Response
    {
        return $this->render('horaires/show.html.twig', [
            'horaires' => $horaires,
        ]);
    }
    #[Route('/horaires/create', name: 'horaires_create', methods: ['GET', 'POST'])]
    public function create(Request $request, HorairesRepository $repo, Horaires $horaires): Response
    {
        $form = $this->createForm(HorairesType::class, $horaires);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $repo->save($horaires, true);
            $this->addFlash('success', 'Vous avez bien ajouté un horaire avec succès');
            return $this->redirectToRoute('horaires_index');
        }
        return $this->render('horaires/create.html.twig', [
            'formView' => $form->createView(),
        ]);
    }
    #[Route('/horaires/{id}/edit', name: 'horaires_edit', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
    public function update(Request $request, Horaires $horaires,HorairesRepository $repo): Response
    {
        $form = $this->createForm(HorairesType::class, $horaires);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $repo->save($horaires, true);
            $this->addFlash('success', 'Vous avez bien modifié l\'horaire avec succès');
            return $this->redirectToRoute('horaires_index');
        }
        return $this->render('horaires/edit.html.twig', [
            'formView' => $form->createView(),
        ]);
    }
    #[Route('/horaires/{id}/delete', name: 'horaires_delete', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function delete(Horaires $horaires, HorairesRepository $repo): Response
    {
        $repo->remove($horaires, true);
        $this->addFlash('success', 'Vous avez bien supprimé l\'horaire avec succès');
        return $this->redirectToRoute('horaires_index');
    }
}
