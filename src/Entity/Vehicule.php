<?php

namespace App\Entity;

use App\Repository\VehiculeRepository;
use Doctrine\ORM\Mapping as ORM;

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
    private ?int $prix = null;

    #[ORM\Column]
    private ?int $kilometrage = null;

    #[ORM\Column]
    private ?int $annee_circulation = null;

    #[ORM\Column(length: 255)]
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
