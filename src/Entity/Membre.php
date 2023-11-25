<?php

namespace App\Entity;

use Doctrine\ORM\Mapping;

#[Mapping\Entity]
#[Mapping\Table(name: "membre")]
class Membre
{
    #[Mapping\Id]
    #[Mapping\ManyToOne(targetEntity: Utilisateur::class)]
    #[Mapping\JoinColumn(name: "UserID", referencedColumnName: "id")]
    private ?Utilisateur $user;

    #[Mapping\Id]
    #[Mapping\ManyToOne(targetEntity: Groups::class)]
    #[Mapping\JoinColumn(name: "GroupID", referencedColumnName: "id")]
    private ?Groups $group;

    #[Mapping\Column(type: "string", length: 50, name: "Role")]
    private ?string $role;

    public function getUser(): ?Utilisateur
    {
        return $this->user;
    }

    public function setUser(?Utilisateur $user): self
    {
        $this->user = $user;
        return $this;
    }

    public function getGroup(): ?Groups
    {
        return $this->group;
    }

    public function setGroup(?Groups $group): self
    {
        $this->group = $group;
        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(?string $role): self
    {
        $this->role = $role;
        return $this;
    }
}
