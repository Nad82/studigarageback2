<?php

namespace App\Entity;

use App\Repository\VehiculesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VehiculesRepository::class)]
class Vehicules
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Prix = null;

    #[ORM\Column]
    private ?int $Kilometrage = null;

    #[ORM\Column]
    private ?int $annee_circulation = null;

    #[ORM\Column(length: 255)]
    private ?string $equipements_et_options = null;

    #[ORM\ManyToOne(inversedBy: 'vehicules')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Employes $employes = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?formulaireV $formulaireVs = null;

    #[ORM\ManyToOne(inversedBy: 'vehicules')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Administrateur $administrateur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrix(): ?int
    {
        return $this->Prix;
    }

    public function setPrix(int $Prix): static
    {
        $this->Prix = $Prix;

        return $this;
    }

    public function getKilometrage(): ?int
    {
        return $this->Kilometrage;
    }

    public function setKilometrage(int $Kilometrage): static
    {
        $this->Kilometrage = $Kilometrage;

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

    public function getEmployes(): ?Employes
    {
        return $this->employes;
    }

    public function setEmployes(?Employes $employes): static
    {
        $this->employes = $employes;

        return $this;
    }

    public function getFormulaireVs(): ?formulaireV
    {
        return $this->formulaireVs;
    }

    public function setFormulaireVs(formulaireV $formulaireVs): static
    {
        $this->formulaireVs = $formulaireVs;

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
