<?php

namespace App\Controller;

use App\Entity\FormulaireG;
use App\Repository\FormulaireGRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormulaireGController extends AbstractController
{
    #[Route('/formulaireG', name: 'formulaireG_index', methods: ['GET'])]
    public function index(FormulaireGRepository $repo): Response
    {
        return $this->render('formulaireG/index.html.twig', [
            'formulaireGs' => $repo->findAll(),
        ]);
    }

    #[Route('/formulaireG(id)', name: 'formulaireG_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(FormulaireG $formulaireG): Response
    {
        return $this->render('formulaireG/show.html.twig', [
            'formulaireG' => $formulaireG,
        ]);
    }

    #[Route('/formulaireG/create', name: 'formulaireG_create', priority:0, methods: ['GET', 'POST'])]
    public function create(): Response
    {
        dd(__METHOD__);
    }

    #[Route('/formulaireG/{id}/edit', name: 'formulaireG_edit', methods: ['GET', 'POST'], requirements: ['id' => '\d+'])]
    public function update(): Response
    {
        dd(__METHOD__);
    }

    #[Route('/formulaireG/{id}/delete', name: 'formulaireG_delete', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function delete(): Response
    {
        dd(__METHOD__);
    }


}
