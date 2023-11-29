<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\CommandeRepository;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass:CommandeRepository::class)]
class Commande
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
 
    private ? int $id_c=null;

    #[Assert\NotBlank(message:"Name can't be empty")]
    #[ORM\Column(length:50)]
    private ? string $nomc=null;

    #[ORM\Column]

    private ?int $id_client=null;

    #[Assert\NotBlank(message:"Name can't be empty")]
    #[ORM\Column(length:50)]
    private ?string $adresse=null;

 
    #[ORM\Column]
    private ? \DateTime $date=null ;

    #[Assert\NotBlank(message:"Name can't be empty")]
    #[ORM\Column]
    private ?int $numtel=null;

    #[Assert\NotBlank(message:"Name can't be empty")]
    #[ORM\Column(length:50)]
    private ? string $email=null;

  
    #[ORM\Column(length:50)]
    private ? float $total=null;
    #[ORM\OneToMany(targetEntity: Lineorder::class,mappedBy:'commande')]
    private Collection $lineorder;

    public function __construct()
    {
        $this->lineorder = new ArrayCollection();
    }

    public function getId_c(): ?int
    {
        return $this->id_c;
    }

    public function getNomc(): ?string
    {
        return $this->nomc;
    }

    public function setNomc(string $nomc): static
    {
        $this->nomc = $nomc;

        return $this;
    }

    public function getId_client(): ?int
    {
        return $this->id_client;
    }

    public function setId_client(int $id_client): static
    {
        $this->id_client = $id_client;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getNumtel(): ?int
    {
        return $this->numtel;
    }

    public function setNumtel(int $numtel): static
    {
        $this->numtel = $numtel;

        return $this;
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

    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setTotal(float $total): static
    {
        $this->total = $total;

        return $this;
    }

    public function getIdC(): ?int
    {
        return $this->id_c;
    }

    public function getIdClient(): ?int
    {
        return $this->id_client;
    }

    public function setIdClient(int $id_client): static
    {
        $this->id_client = $id_client;

        return $this;
    }

    /**
     * @return Collection<int, Lineorder>
     */
    public function getLineorder(): Collection
    {
        return $this->lineorder;
    }

   


}