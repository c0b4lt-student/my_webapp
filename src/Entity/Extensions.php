<?php

namespace App\Entity;

use App\Repository\ExtensionsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExtensionsRepository::class)]
class Extensions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_ext = null;

    #[ORM\Column(length: 30)]
    private ?string $name_ext = null;

    #[ORM\Column]
    private ?int $total_card_ext = null;

    #[ORM\Column]
    private ?int $total_deck_ext = null;

    #[ORM\Column]
    private ?int $id_serie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdExt(): ?int
    {
        return $this->id_ext;
    }

    public function setIdExt(int $id_ext): self
    {
        $this->id_ext = $id_ext;

        return $this;
    }

    public function getNameExt(): ?string
    {
        return $this->name_ext;
    }

    public function setNameExt(string $name_ext): self
    {
        $this->name_ext = $name_ext;

        return $this;
    }

    public function getTotalCardExt(): ?int
    {
        return $this->total_card_ext;
    }

    public function setTotalCardExt(int $total_card_ext): self
    {
        $this->total_card_ext = $total_card_ext;

        return $this;
    }

    public function getTotalDeckExt(): ?int
    {
        return $this->total_deck_ext;
    }

    public function setTotalDeckExt(int $total_deck_ext): self
    {
        $this->total_deck_ext = $total_deck_ext;

        return $this;
    }

    public function getIdSerie(): ?int
    {
        return $this->id_serie;
    }

    public function setIdSerie(int $id_serie): self
    {
        $this->id_serie = $id_serie;

        return $this;
    }
}
