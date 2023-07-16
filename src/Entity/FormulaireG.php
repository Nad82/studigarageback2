<?php

namespace App\Entity;

use App\Repository\FormulaireGRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FormulaireGRepository::class)]
class formulaireG
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $Nom = null;

    #[ORM\Column(length: 30)]
    private ?string $Prenom = null;

    #[ORM\Column(length: 35)]
    private ?string $Email = null;

    #[ORM\Column]
    private ?string $Numero_de_telephone = null;

    #[ORM\Column(length: 255)]
    private ?string $Message = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): static
    {
        $this->Prenom = $Prenom;

        return $this;
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

    public function getNumeroDeTelephone(): ?string
    {
        return $this->Numero_de_telephone;
    }

    public function setNumeroDeTelephone(string $Numero_de_telephone): static
    {
        $this->Numero_de_telephone = $Numero_de_telephone;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->Message;
    }

    public function setMessage(string $Message): static
    {
        $this->Message = $Message;

        return $this;
    }
}
