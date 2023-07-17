<?php

namespace App\Entity;

use App\Repository\InformationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InformationRepository::class)]
class Information
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $horaires_garage = null;

    #[ORM\Column(length: 255)]
    private ?string $services_garage = null;

    #[ORM\ManyToOne(inversedBy: 'informations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Administrateur $administrateur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHorairesGarage(): ?string
    {
        return $this->horaires_garage;
    }

    public function setHorairesGarage(string $horaires_garage): static
    {
        $this->horaires_garage = $horaires_garage;

        return $this;
    }

    public function getServicesGarage(): ?string
    {
        return $this->services_garage;
    }

    public function setServicesGarage(string $services_garage): static
    {
        $this->services_garage = $services_garage;

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
