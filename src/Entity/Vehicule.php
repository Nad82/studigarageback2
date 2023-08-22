<?php

namespace App\Entity;


use App\Repository\VehiculeRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: VehiculeRepository::class)]
class Vehicule
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imageFileName = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'Le prix est obligatoire')]
    #[Assert\Length(
        min: 4,
        max: 10,
        minMessage: 'Le prix doit contenir au moins 4 caractères',
        maxMessage: 'Le prix doit contenir au maximum 10 caractères'
    )]
    #[Assert\Regex(
        pattern: '/^[0-9]/',
        message: 'Le prix doit contenir uniquement des chiffres'
    )]
    private ?int $prix = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'Le kilométrage est obligatoire')]
    #[Assert\Length(
        min: 4,
        max: 6,
        minMessage: 'Le kilométrage doit contenir au moins 4 caractères',
        maxMessage: 'Le kilométrage doit contenir au maximum 6 caractères'
    )]
    #[Assert\Regex(
        pattern: '/^[0-9]/',
        message: 'Le kilométrage doit contenir uniquement des chiffres'
    )]
    private ?int $kilometrage = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'L\'année de circulation est obligatoire')]
    #[Assert\Length(
        min: 4,
        max: 4,
        minMessage: 'L\'année de circulation doit contenir au moins 4 caractères',
        maxMessage: 'L\'année de circulation doit contenir au maximum 4 caractères'
    )]
    #[Assert\Regex(
        pattern: '/^[0-9]+/',
        message: 'L\'année de circulation doit contenir uniquement des chiffres'
    )]
    private ?int $annee = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Les équipements et options sont obligatoires')]
    #[Assert\Length(
        min: 6,
        max: 255,
        minMessage: 'Les équipements et options doivent contenir au moins 6 caractères',
        maxMessage: 'Les équipements et options doivent contenir au maximum 255 caractères'
    )]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z0-9]+/',
        message: 'Les équipements et options doivent contenir uniquement des chiffres et des lettres'
    )]
    private ?string $equipements = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImageFileName(): ?string
    {
        return $this->imageFileName;
    }

    public function setImageFilename(?string $imageFileName): self
    {
        $this->imageFileName = $imageFileName;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getKilometrage(): ?int
    {
        return $this->kilometrage;
    }

    public function setKilometrage(int $kilometrage): static
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    public function getAnnee(): ?int
    {
        return $this->annee;
    }

    public function setAnnee(int $annee): static
    {
        $this->annee = $annee;

        return $this;
    }

    public function getEquipements(): ?string
    {
        return $this->equipements;
    }

    public function setEquipements(string $equipements): static
    {
        $this->equipements = $equipements;

        return $this;
    }
}
