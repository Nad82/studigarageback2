<?php

namespace App\Controller;

use App\Entity\FormulaireV;
use App\Repository\FormulaireVRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormulaireVController extends AbstractController
{
    #[Route('/formulaireV', name: 'formulaireV_index', methods: ['GET'])]
    public function index(FormulaireVRepository $repo): Response
    {
        return $this->render('formulaireV/index.html.twig', [
            'formulaireVs' => $repo->findAll(),
        ]);
    }

    #[Route('/formulaireV(id)', name: 'formulaireV_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(FormulaireV $formulaireV): Response
    {
        return $this->render('formulaireV/show.html.twig', [
            'formulaireV' => $formulaireV,
        ]);
    }

    #[Route('/formulaireV/create', name: 'formulaireV_create', priority:0, methods: ['GET', 'POST'])]
    public function create(): Response{
        dd(__METHOD__);
    }

    #[Route('/formulaireV/{id}/edit', name: 'formulaireV_edit', methods: ['GET', 'POST'], requirements: ['id' => '\d+'])]
    public function update(): Response{
        dd(__METHOD__);
    }

    #[Route('/formulaireV/{id}/delete', name: 'formulaireV_delete', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function delete(): Response{
        dd(__METHOD__);
    }


}
