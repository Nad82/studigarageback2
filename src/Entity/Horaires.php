<?php

namespace App\Entity;

use App\Repository\HorairesRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: HorairesRepository::class)]
class Horaires
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: 'Le nom est obligatoire')]
    #[Assert\Length(
        min: 6,
        max: 50,
        minMessage: 'Le nom doit contenir au moins 6 caractères',
        maxMessage: 'Le nom doit contenir au maximum 50 caractères'
    )]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z]+$/',
        message: 'Le nom doit contenir uniquement des lettres'
    )]
    private ?string $lundi = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: 'Le nom est obligatoire')]
    #[Assert\Length(
        min: 6,
        max: 50,
        minMessage: 'Le nom doit contenir au moins 6 caractères',
        maxMessage: 'Le nom doit contenir au maximum 50 caractères'
    )]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z]+$/',
        message: 'Le nom doit contenir uniquement des lettres'
    )]
    private ?string $mardi = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: 'Le nom est obligatoire')]
    #[Assert\Length(
        min: 6,
        max: 50,
        minMessage: 'Le nom doit contenir au moins 6 caractères',
        maxMessage: 'Le nom doit contenir au maximum 50 caractères'
    )]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z]+$/',
        message: 'Le nom doit contenir uniquement des lettres'
    )]
    private ?string $mercredi = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: 'Le nom est obligatoire')]
    #[Assert\Length(
        min: 6,
        max: 50,
        minMessage: 'Le nom doit contenir au moins 6 caractères',
        maxMessage: 'Le nom doit contenir au maximum 50 caractères'
    )]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z]+$/',
        message: 'Le nom doit contenir uniquement des lettres'
    )]
    private ?string $jeudi = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: 'Le nom est obligatoire')]
    #[Assert\Length(
        min: 6,
        max: 50,
        minMessage: 'Le nom doit contenir au moins 6 caractères',
        maxMessage: 'Le nom doit contenir au maximum 50 caractères'
    )]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z]+$/',
        message: 'Le nom doit contenir uniquement des lettres'
    )]
    private ?string $vendredi = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: 'Le nom est obligatoire')]
    #[Assert\Length(
        min: 6,
        max: 50,
        minMessage: 'Le nom doit contenir au moins 6 caractères',
        maxMessage: 'Le nom doit contenir au maximum 50 caractères'
    )]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z]+$/',
        message: 'Le nom doit contenir uniquement des lettres'
    )]
    private ?string $samedi = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: 'Le nom est obligatoire')]
    #[Assert\Length(
        min: 6,
        max: 50,
        minMessage: 'Le nom doit contenir au moins 6 caractères',
        maxMessage: 'Le nom doit contenir au maximum 50 caractères'
    )]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z]+$/',
        message: 'Le nom doit contenir uniquement des lettres'
    )]
    private ?string $dimanche = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLundi(): ?string
    {
        return $this->lundi;
    }

    public function setLundi(string $lundi): static
    {
        $this->lundi = $lundi;

        return $this;
    }

    public function getMardi(): ?string
    {
        return $this->mardi;
    }

    public function setMardi(string $mardi): static
    {
        $this->mardi = $mardi;

        return $this;
    }

    public function getMercredi(): ?string
    {
        return $this->mercredi;
    }

    public function setMercredi(string $mercredi): static
    {
        $this->mercredi = $mercredi;

        return $this;
    }

    public function getJeudi(): ?string
    {
        return $this->jeudi;
    }

    public function setJeudi(string $jeudi): static
    {
        $this->jeudi = $jeudi;

        return $this;
    }

    public function getVendredi(): ?string
    {
        return $this->vendredi;
    }

    public function setVendredi(string $vendredi): static
    {
        $this->vendredi = $vendredi;

        return $this;
    }

    public function getSamedi(): ?string
    {
        return $this->samedi;
    }

    public function setSamedi(string $samedi): static
    {
        $this->samedi = $samedi;

        return $this;
    }

    public function getDimanche(): ?string
    {
        return $this->dimanche;
    }

    public function setDimanche(string $dimanche): static
    {
        $this->dimanche = $dimanche;

        return $this;
    }
}
