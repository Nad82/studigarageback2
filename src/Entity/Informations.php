<?php

namespace App\Entity;

use App\Repository\InformationsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InformationsRepository::class)]
class Informations
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToMany(mappedBy: 'informations', targetEntity: FormulaireG::class)]
    private Collection $formulaireGs;

    public function __construct()
    {
        $this->formulaireGs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, FormulaireG>
     */
    public function getFormulaireGs(): Collection
    {
        return $this->formulaireGs;
    }

    public function addFormulaireG(FormulaireG $formulaireG): static
    {
        if (!$this->formulaireGs->contains($formulaireG)) {
            $this->formulaireGs->add($formulaireG);
            $formulaireG->setInformations($this);
        }

        return $this;
    }

    public function removeFormulaireG(FormulaireG $formulaireG): static
    {
        if ($this->formulaireGs->removeElement($formulaireG)) {
            // set the owning side to null (unless already changed)
            if ($formulaireG->getInformations() === $this) {
                $formulaireG->setInformations(null);
            }
        }

        return $this;
    }
}
