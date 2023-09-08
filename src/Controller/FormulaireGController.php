<?php

namespace App\Controller;

use App\Entity\FormulaireG;
use App\Repository\FormulaireGRepository;
use App\Form\FormulaireGType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormulaireGController extends AbstractController
{
    #[Route('/formulaire_g', name: 'formulaire_g_index', methods: ['GET'])]
    public function index(FormulaireGRepository $repo): Response
    {
        return $this->render('formulaire_g/index.html.twig', [
            'formulaireGs' => $repo->findAll(),
        ]);
    }
    #[Route('/formulaire_g/{id}', name: 'formulaire_g_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(FormulaireG $formulaireG): Response
    {
        return $this->render('formulaire_g/show.html.twig', [
            'formulaireG' => $formulaireG,
        ]);
    }
    #[Route('/formulaire_g/create', name: 'formulaire_g_create', methods: ['GET', 'POST'])]
    public function create(Request $request, FormulaireGRepository $repo, FormulaireG $formulaireG): Response
    {
        $form = $this->createForm(FormulaireGType::class, $formulaireG);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $repo->save($formulaireG, true);
            $this->addFlash('success', 'Vous avez bien ajouté un formulaire avec succès');
            return $this->redirectToRoute('formulaire_g_index');
        }
        return $this->render('formulaire_g/create.html.twig', [
            'form' => $form
        ]);
    }
    #[Route('/formulaire_g/{id}/edit', name: 'formulaire_g_edit', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
    public function update(Request $request, FormulaireG $formulaireG,FormulaireGRepository $repo): Response
    {
        $form = $this->createForm(FormulaireGType::class, $formulaireG);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $repo->save($formulaireG, true);
            $this->addFlash('success', 'Vous avez bien modifié le formulaire avec succès');
            return $this->redirectToRoute('formulaire_g_index');
        }
        return $this->render('formulaire_g/edit.html.twig', [
            'form' => $form,
        ]);
    }
    #[Route('/formulaire_g/{id}/delete', name: 'formulaire_g_delete', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function delete(FormulaireG $formulaireG, FormulaireGRepository $repo): Response
    {
            $repo->remove($formulaireG, true);
            $this->addFlash('success', 'Vous avez bien supprimé le formulaire avec succès');
        return $this->redirectToRoute('formulaire_g_index');
    }
}
