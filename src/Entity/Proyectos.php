<?php

namespace App\Entity;

use App\Repository\ProyectosRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProyectosRepository::class)]
class Proyectos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $Nombre = null;

    #[ORM\Column(length: 255)]
    private ?string $Imagen = null;

    #[ORM\Column(length: 255)]
    private ?string $Descripcion = null;

    #[ORM\Column(length: 255)]
    private ?string $github = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->Nombre;
    }

    public function setNombre(string $Nombre): self
    {
        $this->Nombre = $Nombre;

        return $this;
    }

    public function getImagen(): ?string
    {
        return $this->Imagen;
    }

    public function setImagen($Imagen): self
    {
        $this->Imagen = $Imagen;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->Descripcion;
    }

    public function setDescripcion(string $Descripcion): self
    {
        $this->Descripcion = $Descripcion;

        return $this;
    }

    public function getGithub(): ?string
    {
        return $this->github;
    }

    public function setGithub(string $github): self
    {
        $this->github = $github;

        return $this;
    }
}
