<?php

namespace App\Controller;

use App\Entity\FormulaireV;
use App\Repository\FormulaireVRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormulaireVController extends AbstractController
{
    #[Route('/formulaire/v', name: 'formulaire_v_index')]
    public function index(FormulaireVRepository $repo): Response
    {
        return $this->render('formulaire_v/index.html.twig', [
            'formulaireV' => $repo->findAll(),
        ]);
    }
    #[Route('/formulaire/v/{id}', name: 'formulaire_v_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(FormulaireV $formulaireV): Response
    {
        return $this->render('formulaire_v/show.html.twig', [
            'formulaireV' => $formulaireV,
        ]);
    }
    #[Route('/formulaire/v/create', name: 'formulaire_v_create', methods: ['GET', 'POST'])]
    public function create(Request $request, FormulaireVRepository $repo, FormulaireV $formulaireV): Response
    {
        $form = $this->createForm(FormulaireVType::class, $formulaireV);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $repo->save($formulaireV, true);
            $this->addFlash('success', 'Vous avez bien ajouté un formulaire avec succès');
            return $this->redirectToRoute('formulaire_v_index');
        }
        return $this->render('formulaire_v/create.html.twig', [
            'formView' => $form->createView(),
        ]);
    }
    #[Route('/formulaire/v/{id}/edit', name: 'formulaire_v_edit', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
    public function update(Request $request, FormulaireV $formulaireV,FormulaireVRepository $repo): Response
    {
        $form = $this->createForm(FormulaireVType::class, $formulaireV);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $repo->save($formulaireV, true);
            $this->addFlash('success', 'Vous avez bien modifié le formulaire avec succès');
            return $this->redirectToRoute('formulaire_v_index');
        }
        return $this->render('formulaire_v/edit.html.twig', [
            'formView' => $form->createView(),
        ]);
    }
    #[Route('/formulaire/v/{id}/delete', name: 'formulaire_v_delete', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function delete(FormulaireV $formulaireV, FormulaireVRepository $repo): Response
    {
        $repo->remove($formulaireV, true);
        $this->addFlash('success', 'Vous avez bien supprimé le formulaire avec succès');
        return $this->redirectToRoute('formulaire_v_index');
    }
}
