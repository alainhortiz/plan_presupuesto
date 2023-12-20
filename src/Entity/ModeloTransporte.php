<?php

namespace App\Entity;

use App\Repository\ModeloTransporteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ModeloTransporteRepository::class)]
class ModeloTransporte
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'modeloTransporte')]
    private ?AnteProyectoPlanPresupuesto $anteProyectoPlanPresupuesto = null;

    #[ORM\ManyToOne(inversedBy: 'entidadModeloTransporte')]
    private ?Entidad $entidad = null;

    #[ORM\ManyToOne(inversedBy: 'modeloTransportes')]
    private ?Estado $estado = null;

    #[ORM\ManyToOne(inversedBy: 'registraModeloTransporte')]
    private ?User $userRegistra = null;

    #[ORM\ManyToOne(inversedBy: 'validaModeloTransporte')]
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

    public function getAnteProyectoPlanPresupuesto(): ?AnteProyectoPlanPresupuesto
    {
        return $this->anteProyectoPlanPresupuesto;
    }

    public function setAnteProyectoPlanPresupuesto(?AnteProyectoPlanPresupuesto $anteProyectoPlanPresupuesto): self
    {
        $this->anteProyectoPlanPresupuesto = $anteProyectoPlanPresupuesto;

        return $this;
    }

    public function getEntidad(): ?Entidad
    {
        return $this->entidad;
    }

    public function setEntidad(?Entidad $entidad): self
    {
        $this->entidad = $entidad;

        return $this;
    }

    public function getEstado(): ?Estado
    {
        return $this->estado;
    }

    public function setEstado(?Estado $estado): self
    {
        $this->estado = $estado;

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
