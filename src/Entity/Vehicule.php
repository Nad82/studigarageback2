<?php

namespace App\Entity;

use App\Repository\VehiculeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VehiculeRepository::class)]
class Vehicule
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $prix = null;

    #[ORM\Column]
    private ?int $kilometrage = null;

    #[ORM\Column]
    private ?int $annee_circulation = null;

    #[ORM\Column(length: 255)]
    private ?string $equipements_et_options = null;

    #[ORM\ManyToMany(targetEntity: Employe::class, mappedBy: 'vehicules')]
    private Collection $employes;

    #[ORM\OneToMany(mappedBy: 'vehicule', targetEntity: FormulaireV::class)]
    private Collection $formulaireVs;

    #[ORM\ManyToOne(inversedBy: 'vehicules')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Administrateur $administrateur = null;

    public function __construct()
    {
        $this->employes = new ArrayCollection();
        $this->formulaireVs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return Collection<int, Employe>
     */
    public function getEmployes(): Collection
    {
        return $this->employes;
    }

    public function addEmploye(Employe $employe): static
    {
        if (!$this->employes->contains($employe)) {
            $this->employes->add($employe);
            $employe->addVehicule($this);
        }

        return $this;
    }

    public function removeEmploye(Employe $employe): static
    {
        if ($this->employes->removeElement($employe)) {
            $employe->removeVehicule($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, FormulaireV>
     */
    public function getFormulaireVs(): Collection
    {
        return $this->formulaireVs;
    }

    public function addFormulaireV(FormulaireV $formulaireV): static
    {
        if (!$this->formulaireVs->contains($formulaireV)) {
            $this->formulaireVs->add($formulaireV);
            $formulaireV->setVehicule($this);
        }

        return $this;
    }

    public function removeFormulaireV(FormulaireV $formulaireV): static
    {
        if ($this->formulaireVs->removeElement($formulaireV)) {
            // set the owning side to null (unless already changed)
            if ($formulaireV->getVehicule() === $this) {
                $formulaireV->setVehicule(null);
            }
        }

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
