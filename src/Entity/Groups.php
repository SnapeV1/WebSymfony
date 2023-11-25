<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: \App\Repository\GroupsRepository::class)]
#[ORM\Table(name: "groups")]
class Groups
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer", name: "id")]
    private ?int $id = null;

    #[ORM\Column(type: "string")]
    private ?string $nom;

    #[ORM\Column(type: "integer")]
    private ?int $size = 0;

    #[ORM\Column(type: "string")]
    private ?string $logo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->userid = new \Doctrine\Common\Collections\ArrayCollection();
    }

    // Getters
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    // Setters
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function setNom(?string $nom): void
    {
        $this->nom = $nom;
    }

    public function setSize(?int $size): void
    {
        $this->size = $size;
    }

    public function setLogo(?string $logo): void
    {
        $this->logo = $logo;
    }

    public function updateSize(array $membres): void
    {
        $this->size = count($membres);
    }
}
