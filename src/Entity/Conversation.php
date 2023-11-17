<?php

namespace App\Entity;

use DateTime;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(
    name: "conversation",
    indexes: [
        ["name" => "idUser1", "columns" => ["iduser1"]],
        ["name" => "idUser2", "columns" => ["iduser2"]],
    ]
)]
#[ORM\Entity]
class Conversation
{
    #[ORM\Column(name: "idconv", type: "integer", nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $idconv;

    #[ORM\Column(name: "Date_MSG", type: "datetime", nullable: false)]
    private ?\DateTimeInterface $dateMsg;

    #[ORM\Column(name: "Msg", type: "text", length: 65535, nullable: true)]
    private ?string $msg;

    #[ORM\Column(name: "iduser1", type: "integer", nullable: false)]
    private ?int $iduser1;

    #[ORM\Column(name: "iduser2", type: "integer", nullable: false)]
    private ?int $iduser2;

    public function getIdconv(): ?int
    {
        return $this->idconv;
    }

    public function getDateMsg(): ?\DateTimeInterface
    {
        return $this->dateMsg;
    }

    public function setDateMsg(\DateTimeInterface $dateMsg): static
    {
        $this->dateMsg = $dateMsg;
        return $this;
    }

    public function getMsg(): ?string
    {
        return $this->msg;
    }

    public function setMsg(?string $msg): static
    {
        $this->msg = $msg;
        return $this;
    }

    public function getIduser1(): ?int
    {
        return $this->iduser1;
    }

    public function setIduser1(?int $iduser1): static
    {
        $this->iduser1 = $iduser1;
        return $this;
    }

    public function getIduser2(): ?int
    {
        return $this->iduser2;
    }

    public function setIduser2(?int $iduser2): static
    {
        $this->iduser2 = $iduser2;
        return $this;
    }
}
