<?php

namespace App\Controller;

use App\Entity\Employe;
use App\Form\EmployeType; 
use App\Repository\EmployeRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmployeController extends AbstractController
{
    #[Route('/employe', name: 'employe_index', methods: ['GET'])]
    public function index(EmployeRepository $employeRepository): Response
    {
        return $this->render('employe/index.html.twig', [
            'employes' => $employeRepository->findAll(),
        ]);
    }
    #[Route('/employe/{id}', name: 'employe_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(Employe $employe): Response
    {
        return $this->render('employe/show.html.twig', [
            'employe' => $employe,
        ]);
    }
    #[Route('/employe/create', name: 'employe_create', methods: ['GET', 'POST'])]
    public function create(Request $request,EmployeRepository $repo, Employe $employe): Response
    {
        $form = $this->createForm(EmployeType::class, $employe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $repo->save($employe, true);
            $this->addFlash('success', 'Vous avez bien ajouté un employé avec succès');
            return $this->redirectToRoute('employe_index');
        }
        return $this->render('employe/create.html.twig', [
            'form' => $form,
        ]);
    }
    #[Route('/employe/{id}/edit', name: 'employe_edit', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
    public function update(Request $request, Employe $employe,EmployeRepository $repo): Response
    {
        $form = $this->createForm(EmployeType::class, $employe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $repo->save($employe, true);
            $this->addFlash('success', 'Vous avez bien modifié l\'employé avec succès');
            return $this->redirectToRoute('employe_index');
        }
        return $this->render('employe/edit.html.twig', [
            'form' => $form,
        ]);
    }
    #[Route('/employe/{id}/delete', name: 'employe_delete', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function delete(Employe $employe, EmployeRepository $repo): Response
    {
            $repo->remove($employe, true);
            $this->addFlash('success', 'Vous avez bien supprimé l\'employé avec succès');
        
        return $this->redirectToRoute('employe_index');
    }
}
