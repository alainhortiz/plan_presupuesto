<?php

namespace App\Entity;

use App\Repository\ModeloSectorExternoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ModeloSectorExternoRepository::class)]
class ModeloSectorExterno
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $exportacionesTotal = null;

    #[ORM\Column]
    private ?int $exportacionesBienes = null;

    #[ORM\ManyToOne(inversedBy: 'ModeloSectorExterno')]
    private ?AnteProyectoPlanPresupuesto $anteProyectoPlanPresupuesto = null;

    #[ORM\ManyToOne(inversedBy: 'entidadModeloSectorExterno')]
    private ?Entidad $entidad = null;

    #[ORM\ManyToOne(inversedBy: 'modeloSectorExternos')]
    private ?Estado $estado = null;

    #[ORM\ManyToOne(inversedBy: 'registraModeloSectorExterno')]
    private ?User $userRegistra = null;

    #[ORM\ManyToOne(inversedBy: 'validaModeloSectorExterno')]
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

    public function getExportacionesTotal(): ?int
    {
        return $this->exportacionesTotal;
    }

    public function setExportacionesTotal(int $exportacionesTotal): self
    {
        $this->exportacionesTotal = $exportacionesTotal;

        return $this;
    }

    public function getExportacionesBienes(): ?int
    {
        return $this->exportacionesBienes;
    }

    public function setExportacionesBienes(int $exportacionesBienes): self
    {
        $this->exportacionesBienes = $exportacionesBienes;

        return $this;
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
