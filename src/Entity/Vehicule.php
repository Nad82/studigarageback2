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
    private ?string $imageFilename = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'Le prix est obligatoire')]
    #[Assert\Length(
        min: 4,
        max: 10,
        minMessage: 'Le prix doit contenir au moins {{ limit }} caractères',
        maxMessage: 'Le prix doit contenir au maximum {{ limit }} caractères'
    )]
    #[Assert\Regex(
        pattern: '/^[0-9]+€/',
        message: 'Le prix doit contenir uniquement des chiffres'
    )]
    private ?int $prix = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'Le kilométrage est obligatoire')]
    #[Assert\Length(
        min: 4,
        max: 6,
        minMessage: 'Le kilométrage doit contenir au moins {{ limit }} caractères',
        maxMessage: 'Le kilométrage doit contenir au maximum {{ limit }} caractères'
    )]
    #[Assert\Regex(
        pattern: '/^[0-9]+km/',
        message: 'Le kilométrage doit contenir uniquement des chiffres'
    )]
    private ?int $kilometrage = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'L\'année de circulation est obligatoire')]
    #[Assert\Length(
        min: 4,
        max: 4,
        minMessage: 'L\'année de circulation doit contenir au moins {{ limit }} caractères',
        maxMessage: 'L\'année de circulation doit contenir au maximum {{ limit }} caractères'
    )]
    #[Assert\Regex(
        pattern: '/^[0-9]+/',
        message: 'L\'année de circulation doit contenir uniquement des chiffres'
    )]
    private ?int $annee_circulation = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Les équipements et options sont obligatoires')]
    #[Assert\Length(
        min: 6,
        max: 255,
        minMessage: 'Les équipements et options doivent contenir au moins {{ limit }} caractères',
        maxMessage: 'Les équipements et options doivent contenir au maximum {{ limit }} caractères'
    )]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z0-9]+/',
        message: 'Les équipements et options doivent contenir uniquement des chiffres et des lettres'
    )]
    private ?string $equipements_et_options = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImageFilename(): ?string
    {
        return $this->imageFilename;
    }

    public function setImageFilename(?string $imageFilename): static
    {
        $this->imageFilename = $imageFilename;

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

    public function getAnneeCirculation(): ?int
    {
        return $this->annee_circulation;
    }

    public function setAnneeCirculation(int $annee_circulation): static
    {
        $this->annee_circulation = $annee_circulation;

        return $this;
    }

    public function getEquipementsEtOptions(): ?string
    {
        return $this->equipements_et_options;
    }

    public function setEquipementsEtOptions(string $equipements_et_options): static
    {
        $this->equipements_et_options = $equipements_et_options;

        return $this;
    }
}
