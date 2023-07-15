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
    private ?string $Email = null;

    #[ORM\Column(length: 9)]
    private ?string $Password = null;

    #[ORM\OneToMany(mappedBy: 'administrateur', targetEntity: employes::class)]
    private Collection $employes;

    #[ORM\OneToMany(mappedBy: 'administrateur', targetEntity: informations::class)]
    private Collection $informations;

    #[ORM\OneToMany(mappedBy: 'administrateur', targetEntity: temoignages::class)]
    private Collection $temoignages;

    #[ORM\OneToMany(mappedBy: 'administrateur', targetEntity: vehicules::class)]
    private Collection $vehicules;

    public function __construct()
    {
        $this->employes = new ArrayCollection();
        $this->informations = new ArrayCollection();
        $this->temoignages = new ArrayCollection();
        $this->vehicules = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): static
    {
        $this->Email = $Email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->Password;
    }

    public function setPassword(string $Password): static
    {
        $this->Password = $Password;

        return $this;
    }

    /**
     * @return Collection<int, employes>
     */
    public function getEmployes(): Collection
    {
        return $this->employes;
    }

    public function addEmploye(employes $employe): static
    {
        if (!$this->employes->contains($employe)) {
            $this->employes->add($employe);
            $employe->setAdministrateur($this);
        }

        return $this;
    }

    public function removeEmploye(employes $employe): static
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
     * @return Collection<int, informations>
     */
    public function getInformations(): Collection
    {
        return $this->informations;
    }

    public function addInformation(informations $information): static
    {
        if (!$this->informations->contains($information)) {
            $this->informations->add($information);
            $information->setAdministrateur($this);
        }

        return $this;
    }

    public function removeInformation(informations $information): static
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
     * @return Collection<int, temoignages>
     */
    public function getTemoignages(): Collection
    {
        return $this->temoignages;
    }

    public function addTemoignage(temoignages $temoignage): static
    {
        if (!$this->temoignages->contains($temoignage)) {
            $this->temoignages->add($temoignage);
            $temoignage->setAdministrateur($this);
        }

        return $this;
    }

    public function removeTemoignage(temoignages $temoignage): static
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
     * @return Collection<int, vehicules>
     */
    public function getVehicules(): Collection
    {
        return $this->vehicules;
    }

    public function addVehicule(vehicules $vehicule): static
    {
        if (!$this->vehicules->contains($vehicule)) {
            $this->vehicules->add($vehicule);
            $vehicule->setAdministrateur($this);
        }

        return $this;
    }

    public function removeVehicule(vehicules $vehicule): static
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
