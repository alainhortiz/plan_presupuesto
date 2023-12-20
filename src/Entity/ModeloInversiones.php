<?php

namespace App\Entity;

use App\Repository\ModeloInversionesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ModeloInversionesRepository::class)]
class ModeloInversiones
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'modeloInversiones')]
    private ?AnteProyectoPlanPresupuesto $anteProyectoPlanPresupuesto = null;

    #[ORM\ManyToOne(inversedBy: 'entidadModeloInversiones')]
    private ?Entidad $entidad = null;

    #[ORM\ManyToOne(inversedBy: 'modeloInversiones')]
    private ?Estado $estado = null;

    #[ORM\OneToMany(mappedBy: 'modeloInversiones', targetEntity: ModeloInversionesApertura::class)]
    private Collection $apertura;

    #[ORM\ManyToOne(inversedBy: 'registraModeloInversiones')]
    private ?User $userRegistra = null;

    #[ORM\ManyToOne(inversedBy: 'validaModeloInversiones')]
    private ?User $userValida = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fechaRegistra = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fechaRevisa = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fcehaValida = null;

    public function __construct()
    {
        $this->apertura = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, ModeloInversionesApertura>
     */
    public function getApertura(): Collection
    {
        return $this->apertura;
    }

    public function addApertura(ModeloInversionesApertura $apertura): self
    {
        if (!$this->apertura->contains($apertura)) {
            $this->apertura->add($apertura);
            $apertura->setModeloInversiones($this);
        }

        return $this;
    }

    public function removeApertura(ModeloInversionesApertura $apertura): self
    {
        if ($this->apertura->removeElement($apertura)) {
            // set the owning side to null (unless already changed)
            if ($apertura->getModeloInversiones() === $this) {
                $apertura->setModeloInversiones(null);
            }
        }

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

    public function getFcehaValida(): ?\DateTimeInterface
    {
        return $this->fcehaValida;
    }

    public function setFcehaValida(?\DateTimeInterface $fcehaValida): self
    {
        $this->fcehaValida = $fcehaValida;

        return $this;
    }
}
