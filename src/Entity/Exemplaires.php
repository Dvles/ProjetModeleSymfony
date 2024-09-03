<?php

namespace App\Entity;

use App\Repository\ExemplairesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExemplairesRepository::class)]
class Exemplaires
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'exemplaires')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Livre $livre = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLivre(): ?Livre
    {
        return $this->livre;
    }

    public function setLivre(?Livre $livre): static
    {
        $this->livre = $livre;

        return $this;
    }
}
