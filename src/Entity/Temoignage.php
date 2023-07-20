<?php

namespace App\Entity;

use App\Repository\TemoignageRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: TemoignageRepository::class)]
class Temoignage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    #[Assert\NotBlank(message: 'Le nom est obligatoire')]
    #[Assert\Length(
        min: 2,
        max: 20,
        minMessage: 'Le nom doit contenir au moins {{ limit }} caractères',
        maxMessage: 'Le nom doit contenir au maximum {{ limit }} caractères'
    )]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z]+$/',
        message: 'Le nom doit contenir uniquement des lettres'
    )]
    private ?string $nom = null;

    #[ORM\Column(length: 20)]
    #[Assert\NotBlank(message: 'Le prénom est obligatoire')]
    #[Assert\Length(
        min: 2,
        max: 20,
        minMessage: 'Le prénom doit contenir au moins {{ limit }} caractères',
        maxMessage: 'Le prénom doit contenir au maximum {{ limit }} caractères'
    )]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z]+$/',
        message: 'Le prénom doit contenir uniquement des lettres'
    )]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le commentaire est obligatoire')]
    #[Assert\Length(
        min: 2,
        max: 255,
        minMessage: 'Le commentaire doit contenir au moins {{ limit }} caractères',
        maxMessage: 'Le commentaire doit contenir au maximum {{ limit }} caractères'
    )]
    private ?string $commentaires = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'La note est obligatoire')]
    #[Assert\Length(
        min: 1,
        max: 5,
        minMessage: 'La note doit contenir au moins {{ limit }} caractères',
        maxMessage: 'La note doit contenir au maximum {{ limit }} caractères'
    )]
    #[Assert\Regex(
        pattern: '/^[0-9]+$/',
        message: 'La note doit contenir uniquement des chiffres'
    )]
    private ?int $notes = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getCommentaires(): ?string
    {
        return $this->commentaires;
    }

    public function setCommentaires(string $commentaires): static
    {
        $this->commentaires = $commentaires;

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
}
