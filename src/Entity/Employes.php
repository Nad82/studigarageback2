<?php

namespace App\Entity;

use App\Repository\EmployesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmployesRepository::class)]
class employes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $Email = null;

    #[ORM\Column(length: 8)]
    private ?string $Password = null;

    #[ORM\OneToMany(mappedBy: 'employes', targetEntity: vehicules::class)]
    private Collection $vehicules;

    #[ORM\OneToMany(mappedBy: 'employes', targetEntity: temoignages::class)]
    private Collection $temoignages;

    #[ORM\ManyToOne(inversedBy: 'employes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Administrateur $administrateur = null;

    public function __construct()
    {
        $this->vehicules = new ArrayCollection();
        $this->temoignages = new ArrayCollection();
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
            $vehicule->setEmployes($this);
        }

        return $this;
    }

    public function removeVehicule(vehicules $vehicule): static
    {
        if ($this->vehicules->removeElement($vehicule)) {
            // set the owning side to null (unless already changed)
            if ($vehicule->getEmployes() === $this) {
                $vehicule->setEmployes(null);
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
            $temoignage->setEmployes($this);
        }

        return $this;
    }

    public function removeTemoignage(temoignages $temoignage): static
    {
        if ($this->temoignages->removeElement($temoignage)) {
            // set the owning side to null (unless already changed)
            if ($temoignage->getEmployes() === $this) {
                $temoignage->setEmployes(null);
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
