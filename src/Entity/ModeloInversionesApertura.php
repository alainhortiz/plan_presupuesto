<?php

namespace App\Entity;

use App\Repository\ModeloInversionesAperturaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ModeloInversionesAperturaRepository::class)]
class ModeloInversionesApertura
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'apertura')]
    private ?ModeloInversiones $modeloInversiones = null;

    #[ORM\ManyToOne(inversedBy: 'registraModeloInversionesApertura')]
    private ?User $userRegistra = null;

    #[ORM\ManyToOne(inversedBy: 'validaModeloInversionesApertura')]
    private ?User $userValida = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fechaRegistra = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fechaRevisa = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fechaValida = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getModeloInversiones(): ?ModeloInversiones
    {
        return $this->modeloInversiones;
    }

    public function setModeloInversiones(?ModeloInversiones $modeloInversiones): self
    {
        $this->modeloInversiones = $modeloInversiones;

        return $this;
    }

    public function getUserRegistra(): ?User
    {
        return $this->userRegistra;
    }

    public function setUserRegistra(?User $userRegistra): self
    {
        $this->userRegistra = $userRegistra;

        return $this;
    }

    public function getUserValida(): ?User
    {
        return $this->userValida;
    }

    public function setUserValida(?User $userValida): self
    {
        $this->userValida = $userValida;

        return $this;
    }

    public function getFechaRegistra(): ?\DateTimeInterface
    {
        return $this->fechaRegistra;
    }

    public function setFechaRegistra(?\DateTimeInterface $fechaRegistra): self
    {
        $this->fechaRegistra = $fechaRegistra;

        return $this;
    }

    public function getFechaRevisa(): ?\DateTimeInterface
    {
        return $this->fechaRevisa;
    }

    public function setFechaRevisa(?\DateTimeInterface $fechaRevisa): self
    {
        $this->fechaRevisa = $fechaRevisa;

        return $this;
    }

    public function getFechaValida(): ?\DateTimeInterface
    {
        return $this->fechaValida;
    }

    public function setFechaValida(?\DateTimeInterface $fechaValida): self
    {
        $this->fechaValida = $fechaValida;

        return $this;
    }
}
