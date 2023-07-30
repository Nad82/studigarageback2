<?php

namespace App\Controller;

use App\Entity\Vehicule;
use App\Form\VehiculeType;
use App\Repository\VehiculeRepository;
use App\Service\FileUploader;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class VehiculeController extends AbstractController
{
    #[Route('/vehicule', name: 'vehicule_index', priority: 1, methods: ['GET'])]
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
    public function create(Request $request, FileUploader $fileUploader, SluggerInterface $slugger, VehiculeRepository $repo, Vehicule $vehicule): Response
    {   
        $vehicule = new Vehicule();
        $form = $this->createForm(VehiculeType::class, $vehicule);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('images')->getData();

            if ($imageFile){
                $imageFileName = $fileUploader->upload($imageFile);
                $vehicule->setImageFilename($imageFileName);
            }
            if ($imageFile) {
                $originalFileName = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFileName = $slugger->slug($originalFileName);
                $newFileName = $safeFileName.'-'.uniqid().'.'.$imageFile->guessExtension();
                
            try{
                $imageFile->move(
                    $this->getParameter('uploads_directory'),
                    $newFileName
                );
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
            }
            $vehicule->setImageFilename($newFileName);
        }
        $repo->save($vehicule, true);
        $this->addFlash('success', 'Vous avez bien ajouté un vehicule avec succès');
        return $this->redirectToRoute('vehicule_index');
        }
            return $this->render('vehicule/create.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/vehicule/{id}/edit', name: 'vehicule_edit', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
    public function update(Request $request, Vehicule $vehicule, FileUploader $fileUploader, SluggerInterface $slugger, VehiculeRepository $repo): Response
    {
        $vehicule = new Vehicule();
        $form = $this->createForm(VehiculeType::class, $vehicule);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('image')->getData();
            if ($imageFile){
                $imageFileName = $fileUploader->upload($imageFile);
                $vehicule->setImageFilename($imageFileName);
            }

            if ($imageFile) {
                $originalFileName = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFileName = $slugger->slug($originalFileName);
                $newFileName = $safeFileName.'-'.uniqid().'.'.$imageFile->guessExtension();
                
            try{
                $imageFile->move(
                    $this->getParameter('uploads_directory'),
                    $newFileName
                );
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
            }
            $vehicule->setImageFilename($newFileName);
        }
        $repo->save($vehicule, true);
        $this->addFlash('success', 'Vous avez bien modifié le vehicule avec succès');
        return $this->redirectToRoute('vehicule_index');
        }
        return $this->render('vehicule/edit.html.twig', [
            'form' => $form,
        ]);
    }
    #[Route('/vehicule/{id}/delete', name: 'vehicule_delete', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function delete(vehicule $vehicule, VehiculeRepository $repo): Response
    {
            $repo->remove($vehicule, true);
            $this->addFlash('success', 'Vous avez bien supprimé l\'employé avec succès');
        
        return $this->redirectToRoute('vehicule_index');
    }
}



