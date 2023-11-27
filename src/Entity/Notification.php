<?php

namespace App\Entity;

use App\Repository\NotificationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NotificationRepository::class)]
class Notification
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'text')] 
    private ?string $content = null;

    #[ORM\Column(type: 'datetime')] 
    private ?\DateTimeInterface $NotifDate = null;

    #[ORM\Column]
    private ?int $iduser = null; // Assuming this is the id column in Utilisateur
    #[ORM\Column(type: 'boolean')]
    private bool $read = false;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getNotifDate(): ?\DateTimeInterface
    {
        return $this->NotifDate;
    }

    public function setNotifDate(?\DateTimeInterface $NotifDate): self
    {
        $this->NotifDate = $NotifDate;

        return $this;
    }

    public function getIduser(): ?int
    {
        return $this->iduser;
    }

    public function setIduser(?int $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }
}
