<?php

namespace App\Entity;

use App\Repository\FormulaireGRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: FormulaireGRepository::class)]
class FormulaireG
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 25)]
    #[Assert\NotBlank(message: 'Le nom est obligatoire')]
    #[Assert\Length(
        min: 2,
        max: 25,
        minMessage: 'Le nom doit contenir au moins 2 caractères',
        maxMessage: 'Le nom doit contenir au maximum 25 caractères'
    )]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z]+$/',
        message: 'Le nom doit contenir uniquement des lettres'
    )]
    private ?string $nom = null;

    #[ORM\Column(length: 25)]
    #[Assert\NotBlank(message: 'Le prénom est obligatoire')]
    #[Assert\Length(
        min: 2,
        max: 25,
        minMessage: 'Le prénom doit contenir au moins 2 caractères',
        maxMessage: 'Le prénom doit contenir au maximum 25 caractères'
    )]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z]+$/',
        message: 'Le prénom doit contenir uniquement des lettres'
    )]
    private ?string $prenom = null;

    #[ORM\Column(length: 35)]
    #[Assert\NotBlank(message: 'L\'email est obligatoire')]
    #[Assert\Email(message: 'L\'email n\'est pas valide')]
    #[Assert\Length(
        min: 10,
        max: 35,
        minMessage: 'L\'email doit contenir au moins 10 caractères',
        maxMessage: 'L\'email doit contenir au maximum 35 caractères'
    )]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-zA-Z]{2,4}$/',
        message: 'L\'email doit contenir uniquement des lettres, des chiffres, des points, des
        tirets et des underscores'
    )]
    private ?string $email = null;

    #[ORM\Column(length: 15)]
    #[Assert\NotBlank(message: 'Le telephone est obligatoire')]
    #[Assert\Length(
        min: 10,
        max: 15,
        minMessage: 'Le téléphone doit contenir au moins 10 caractères',
        maxMessage: 'Le téléphone doit contenir au maximum 15 caractères'
    )]
    #[Assert\Regex(
        pattern: '/^[0-9]+$/',
        message: 'Le téléphone doit contenir uniquement des chiffres'
    )]
    private ?string $telephone = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le message est obligatoire')]
    #[Assert\Length(
        min: 10,
        max: 255,
        minMessage: 'Le message doit contenir au moins 10 caractères',
        maxMessage: 'Le message doit contenir au maximum 255 caractères'
    )]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z0-9._-]+$/',
        message: 'Le message doit contenir uniquement des lettres, des chiffres, des points, des
        tirets et des underscores'
    )]
    private ?string $message = null;

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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): static
    {
        $this->message = $message;

        return $this;
    }
}
