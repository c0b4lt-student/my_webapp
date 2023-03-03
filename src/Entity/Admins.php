<?php

namespace App\Entity;

use App\Repository\AdminsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdminsRepository::class)]
class Admins
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_admin = null;

    #[ORM\Column(length: 60)]
    private ?string $email_admin = null;

    #[ORM\Column(length: 64)]
    private ?string $passwd_admin = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdAdmin(): ?int
    {
        return $this->id_admin;
    }

    public function setIdAdmin(int $id_admin): self
    {
        $this->id_admin = $id_admin;

        return $this;
    }

    public function getEmailAdmin(): ?string
    {
        return $this->email_admin;
    }

    public function setEmailAdmin(string $email_admin): self
    {
        $this->email_admin = $email_admin;

        return $this;
    }

    public function getPasswdAdmin(): ?string
    {
        return $this->passwd_admin;
    }

    public function setPasswdAdmin(string $passwd_admin): self
    {
        $this->passwd_admin = $passwd_admin;

        return $this;
    }
}
