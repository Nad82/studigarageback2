<?php

namespace App\Controller;

use App\Entity\Services;
use App\Form\ServicesType;
use App\Repository\ServicesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServicesController extends AbstractController
{
    #[Route('/services', name: 'services_index', methods: ['GET'], priority: 1)]
    public function index(ServicesRepository $repo): Response
    {
        return $this->render('services/index.html.twig', [
            'servicess' => $repo->findAll(),
        ]);
    }
    #[Route('/services/{id}', name: 'services_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(Services $services): Response
    {
        return $this->render('services/show.html.twig', [
            'services' => $services,
        ]);
    }
    #[Route('/services/create', name: 'services_create', methods: ['GET', 'POST'])]
    public function create(Request $request,ServicesRepository $repo, Services $services): Response
    {
        $form = $this->createForm(ServicesType::class, $services);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $repo->save($services, true);
            $this->addFlash('success', 'Vous avez bien ajouté un service avec succès');
            return $this->redirectToRoute('services_index');
        }
        return $this->render('services/create.html.twig', [
            'form' => $form,
        ]);
    }
    #[Route('/services/{id}/edit', name: 'services_edit', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
    public function update(Request $request, Services $services,ServicesRepository $repo): Response
    {
        $form = $this->createForm(ServicesType::class, $services);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $repo->save($services, true);
            $this->addFlash('success', 'Vous avez bien modifié le service avec succès');
            return $this->redirectToRoute('services_index');
        }
        return $this->render('services/edit.html.twig', [
            'form' => $form,
        ]);
    }
    #[Route('/services/{id}/delete', name: 'services_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delete(Request $request, Services $services,ServicesRepository $repo): Response
    {
        if ($this->isCsrfTokenValid('delete'.$services->getId(), $request->request->get('_token'))) {
            $repo->remove($services, true);
            $this->addFlash('success', 'Vous avez bien supprimé le service avec succès');
        }
        return $this->redirectToRoute('services_index');
    }
}
