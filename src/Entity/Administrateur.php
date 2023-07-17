<?php

namespace App\Entity;

use App\Repository\AdministrateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdministrateurRepository::class)]
class Administrateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 35)]
    private ?string $email = null;

    #[ORM\Column(length: 10)]
    private ?string $password = null;

    #[ORM\OneToMany(mappedBy: 'administrateur', targetEntity: Information::class)]
    private Collection $informations;

    #[ORM\OneToMany(mappedBy: 'administrateur', targetEntity: Employe::class)]
    private Collection $employes;

    #[ORM\OneToMany(mappedBy: 'administrateur', targetEntity: Temoignage::class)]
    private Collection $temoignages;

    #[ORM\OneToMany(mappedBy: 'administrateur', targetEntity: Vehicule::class)]
    private Collection $vehicules;

    public function __construct()
    {
        $this->informations = new ArrayCollection();
        $this->employes = new ArrayCollection();
        $this->temoignages = new ArrayCollection();
        $this->vehicules = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return Collection<int, Information>
     */
    public function getInformations(): Collection
    {
        return $this->informations;
    }

    public function addInformation(Information $information): static
    {
        if (!$this->informations->contains($information)) {
            $this->informations->add($information);
            $information->setAdministrateur($this);
        }

        return $this;
    }

    public function removeInformation(Information $information): static
    {
        if ($this->informations->removeElement($information)) {
            // set the owning side to null (unless already changed)
            if ($information->getAdministrateur() === $this) {
                $information->setAdministrateur(null);
            }
        }

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
            $employe->setAdministrateur($this);
        }

        return $this;
    }

    public function removeEmploye(Employe $employe): static
    {
        if ($this->employes->removeElement($employe)) {
            // set the owning side to null (unless already changed)
            if ($employe->getAdministrateur() === $this) {
                $employe->setAdministrateur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Temoignage>
     */
    public function getTemoignages(): Collection
    {
        return $this->temoignages;
    }

    public function addTemoignage(Temoignage $temoignage): static
    {
        if (!$this->temoignages->contains($temoignage)) {
            $this->temoignages->add($temoignage);
            $temoignage->setAdministrateur($this);
        }

        return $this;
    }

    public function removeTemoignage(Temoignage $temoignage): static
    {
        if ($this->temoignages->removeElement($temoignage)) {
            // set the owning side to null (unless already changed)
            if ($temoignage->getAdministrateur() === $this) {
                $temoignage->setAdministrateur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Vehicule>
     */
    public function getVehicules(): Collection
    {
        return $this->vehicules;
    }

    public function addVehicule(Vehicule $vehicule): static
    {
        if (!$this->vehicules->contains($vehicule)) {
            $this->vehicules->add($vehicule);
            $vehicule->setAdministrateur($this);
        }

        return $this;
    }

    public function removeVehicule(Vehicule $vehicule): static
    {
        if ($this->vehicules->removeElement($vehicule)) {
            // set the owning side to null (unless already changed)
            if ($vehicule->getAdministrateur() === $this) {
                $vehicule->setAdministrateur(null);
            }
        }

        return $this;
    }
}
