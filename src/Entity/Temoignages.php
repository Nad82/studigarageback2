<?php

namespace App\Entity;

use App\Repository\TemoignagesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TemoignagesRepository::class)]
class temoignages
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 25)]
    private ?string $Nom = null;

    #[ORM\Column(length: 30)]
    private ?string $Prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $Commentaires = null;

    #[ORM\Column]
    private ?int $notes = null;

    #[ORM\ManyToOne(inversedBy: 'temoignages')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Employes $employes = null;

    #[ORM\ManyToOne(inversedBy: 'temoignages')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Administrateur $administrateur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): static
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getCommentaires(): ?string
    {
        return $this->Commentaires;
    }

    public function setCommentaires(string $Commentaires): static
    {
        $this->Commentaires = $Commentaires;

        return $this;
    }

    public function getNotes(): ?int
    {
        return $this->notes;
    }

    public function setNotes(int $notes): static
    {
        $this->notes = $notes;

        return $this;
    }

    public function getEmployes(): ?Employes
    {
        return $this->employes;
    }

    public function setEmployes(?Employes $employes): static
    {
        $this->employes = $employes;

        return $this;
    }

    public function getAdministrateur(): ?Administrateur
    {
        return $this->administrateur;
    }

    public function setAdministrateur(?Administrateur $administrateur): static
    {
        $this->administrateur = $administrateur;

        return $this;
    }
}
