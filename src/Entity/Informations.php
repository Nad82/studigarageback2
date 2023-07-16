<?php

namespace App\Entity;

use App\Repository\InformationsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InformationsRepository::class)]
class informations
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $horaires_garage = null;

    #[ORM\Column(length: 255)]
    private ?string $servicesgarage = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?formulaireG $formulaireGs = null;

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

    public function getServicesgarage(): ?string
    {
        return $this->servicesgarage;
    }

    public function setServicesgarage(string $servicesgarage): static
    {
        $this->servicesgarage = $servicesgarage;

        return $this;
    }

    public function getFormulaireGs(): ?formulaireG
    {
        return $this->formulaireGs;
    }

    public function setFormulaireGs(formulaireG $formulaireGs): static
    {
        $this->formulaireGs = $formulaireGs;

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
