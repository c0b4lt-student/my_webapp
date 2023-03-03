<?php

namespace App\Entity;

use App\Repository\SeriesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SeriesRepository::class)]
class Series
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_serie = null;

    #[ORM\Column(length: 30)]
    private ?string $name_serie = null;

    #[ORM\Column]
    private ?int $total_ext_serie = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getNameSerie(): ?string
    {
        return $this->name_serie;
    }

    public function setNameSerie(string $name_serie): self
    {
        $this->name_serie = $name_serie;

        return $this;
    }

    public function getTotalExtSerie(): ?int
    {
        return $this->total_ext_serie;
    }

    public function setTotalExtSerie(int $total_ext_serie): self
    {
        $this->total_ext_serie = $total_ext_serie;

        return $this;
    }
}
