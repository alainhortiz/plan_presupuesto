<?php

namespace App\Entity;

use App\Repository\AnteProyectoPlanPresupuestoRepository;
use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnteProyectoPlanPresupuestoRepository::class)]
class AnteProyectoPlanPresupuesto
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?DateTimeInterface $year = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?DateTimeInterface $fechaInicio = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?DateTimeInterface $fechaRevision = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?DateTimeInterface $fechaValidacion = null;

    #[ORM\Column]
    private ?bool $isActive = null;

    #[ORM\OneToMany(mappedBy: 'anteProyectoPlanPresupuesto', targetEntity: ModeloNivelActividad::class)]
    private Collection $modeloNivelActividad;

    #[ORM\OneToMany(mappedBy: 'anteProyectoPlanPresupuesto', targetEntity: ModeloColaboracionInternacionalActivosFijos::class)]
    private Collection $modeloColaboracionInternacionalActivosFijos;

    #[ORM\OneToMany(mappedBy: 'anteProyectoPlanPresupuesto', targetEntity: ModeloColaboracionInternacionalMediosTransportes::class)]
    private Collection $modeloColaboracionInternacionalMediosTransportes;

    #[ORM\OneToMany(mappedBy: 'anteProyectoPlanPresupuesto', targetEntity: ModeloColaboracionInternacionalProyectos::class)]
    private Collection $modeloColaboracionInternacionalProyectos;

    #[ORM\OneToMany(mappedBy: 'anteProyectoPlanPresupuesto', targetEntity: ModeloDefensaSeguridadProteccion::class)]
    private Collection $modeloDefensaSeguridadProteccion;

    #[ORM\OneToMany(mappedBy: 'anteProyectoPlanPresupuesto', targetEntity: ModeloDinamicaDemografica::class)]
    private Collection $modeloDinamicaDemografica;

    #[ORM\OneToMany(mappedBy: 'anteProyectoPlanPresupuesto', targetEntity: ModeloInversiones::class)]
    private Collection $modeloInversiones;

    #[ORM\OneToMany(mappedBy: 'anteProyectoPlanPresupuesto', targetEntity: ModeloPortadoresCombustible::class)]
    private Collection $modeloPortadoresCombustible;

    #[ORM\OneToMany(mappedBy: 'anteProyectoPlanPresupuesto', targetEntity: ModeloPortadoresEnergia::class)]
    private Collection $modeloPortadoresEnergia;

    #[ORM\OneToMany(mappedBy: 'anteProyectoPlanPresupuesto', targetEntity: ModeloSectorExterno::class)]
    private Collection $modeloSectorExterno;

    #[ORM\OneToMany(mappedBy: 'anteProyectoPlanPresupuesto', targetEntity: ModeloTransporte::class)]
    private Collection $modeloTransporte;

    public function __construct()
    {
        $this->modeloNivelActividad = new ArrayCollection();
        $this->modeloColaboracionInternacionalActivosFijos = new ArrayCollection();
        $this->modeloColaboracionInternacionalMediosTransportes = new ArrayCollection();
        $this->modeloColaboracionInternacionalProyectos = new ArrayCollection();
        $this->modeloDefensaSeguridadProteccion = new ArrayCollection();
        $this->modeloDinamicaDemografica = new ArrayCollection();
        $this->modeloInversiones = new ArrayCollection();
        $this->modeloPortadoresCombustible = new ArrayCollection();
        $this->modeloPortadoresEnergia = new ArrayCollection();
        $this->modeloSectorExterno = new ArrayCollection();
        $this->modeloTransporte = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getYear(): ?DateTimeInterface
    {
        return $this->year;
    }

    public function setYear(DateTimeInterface $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getFechaInicio(): ?DateTimeInterface
    {
        return $this->fechaInicio;
    }

    public function setFechaInicio(DateTimeInterface $fechaInicio): self
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    public function getFechaRevision(): ?DateTimeInterface
    {
        return $this->fechaRevision;
    }

    public function setFechaRevision(DateTimeInterface $fechaRevision): self
    {
        $this->fechaRevision = $fechaRevision;

        return $this;
    }

    public function getFechaValidacion(): ?DateTimeInterface
    {
        return $this->fechaValidacion;
    }

    public function setFechaValidacion(DateTimeInterface $fechaValidacion): self
    {
        $this->fechaValidacion = $fechaValidacion;

        return $this;
    }

    public function isIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * @return Collection<int, ModeloNivelActividad>
     */
    public function getModeloNivelActividad(): Collection
    {
        return $this->modeloNivelActividad;
    }

    public function addModeloNivelActividad(ModeloNivelActividad $modeloNivelActividad): self
    {
        if (!$this->modeloNivelActividad->contains($modeloNivelActividad)) {
            $this->modeloNivelActividad->add($modeloNivelActividad);
            $modeloNivelActividad->setAnteProyectoPlanPresupuesto($this);
        }

        return $this;
    }

    public function removeModeloNivelActividad(ModeloNivelActividad $modeloNivelActividad): self
    {
        // set the owning side to null (unless already changed)
        if ($this->modeloNivelActividad->removeElement($modeloNivelActividad) && $modeloNivelActividad->getAnteProyectoPlanPresupuesto() === $this) {
            $modeloNivelActividad->setAnteProyectoPlanPresupuesto(null);
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloColaboracionInternacionalActivosFijos>
     */
    public function getModeloColaboracionInternacionalActivosFijos(): Collection
    {
        return $this->modeloColaboracionInternacionalActivosFijos;
    }

    public function addModeloColaboracionInternacionalActivosFijo(ModeloColaboracionInternacionalActivosFijos $modeloColaboracionInternacionalActivosFijo): self
    {
        if (!$this->modeloColaboracionInternacionalActivosFijos->contains($modeloColaboracionInternacionalActivosFijo)) {
            $this->modeloColaboracionInternacionalActivosFijos->add($modeloColaboracionInternacionalActivosFijo);
            $modeloColaboracionInternacionalActivosFijo->setAnteProyectoPlanPresupuesto($this);
        }

        return $this;
    }

    public function removeModeloColaboracionInternacionalActivosFijo(ModeloColaboracionInternacionalActivosFijos $modeloColaboracionInternacionalActivosFijo): self
    {
        // set the owning side to null (unless already changed)
        if ($this->modeloColaboracionInternacionalActivosFijos->removeElement($modeloColaboracionInternacionalActivosFijo) && $modeloColaboracionInternacionalActivosFijo->getAnteProyectoPlanPresupuesto() === $this) {
            $modeloColaboracionInternacionalActivosFijo->setAnteProyectoPlanPresupuesto(null);
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloColaboracionInternacionalMediosTransportes>
     */
    public function getModeloColaboracionInternacionalMediosTransportes(): Collection
    {
        return $this->modeloColaboracionInternacionalMediosTransportes;
    }

    public function addModeloColaboracionInternacionalMediosTransporte(ModeloColaboracionInternacionalMediosTransportes $modeloColaboracionInternacionalMediosTransporte): self
    {
        if (!$this->modeloColaboracionInternacionalMediosTransportes->contains($modeloColaboracionInternacionalMediosTransporte)) {
            $this->modeloColaboracionInternacionalMediosTransportes->add($modeloColaboracionInternacionalMediosTransporte);
            $modeloColaboracionInternacionalMediosTransporte->setAnteProyectoPlanPresupuesto($this);
        }

        return $this;
    }

    public function removeModeloColaboracionInternacionalMediosTransporte(ModeloColaboracionInternacionalMediosTransportes $modeloColaboracionInternacionalMediosTransporte): self
    {
        // set the owning side to null (unless already changed)
        if ($this->modeloColaboracionInternacionalMediosTransportes->removeElement($modeloColaboracionInternacionalMediosTransporte) && $modeloColaboracionInternacionalMediosTransporte->getAnteProyectoPlanPresupuesto() === $this) {
            $modeloColaboracionInternacionalMediosTransporte->setAnteProyectoPlanPresupuesto(null);
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloColaboracionInternacionalProyectos>
     */
    public function getModeloColaboracionInternacionalProyectos(): Collection
    {
        return $this->modeloColaboracionInternacionalProyectos;
    }

    public function addModeloColaboracionInternacionalProyecto(ModeloColaboracionInternacionalProyectos $modeloColaboracionInternacionalProyecto): self
    {
        if (!$this->modeloColaboracionInternacionalProyectos->contains($modeloColaboracionInternacionalProyecto)) {
            $this->modeloColaboracionInternacionalProyectos->add($modeloColaboracionInternacionalProyecto);
            $modeloColaboracionInternacionalProyecto->setAnteProyectoPlanPresupuesto($this);
        }

        return $this;
    }

    public function removeModeloColaboracionInternacionalProyecto(ModeloColaboracionInternacionalProyectos $modeloColaboracionInternacionalProyecto): self
    {
        // set the owning side to null (unless already changed)
        if ($this->modeloColaboracionInternacionalProyectos->removeElement($modeloColaboracionInternacionalProyecto) && $modeloColaboracionInternacionalProyecto->getAnteProyectoPlanPresupuesto() === $this) {
            $modeloColaboracionInternacionalProyecto->setAnteProyectoPlanPresupuesto(null);
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloDefensaSeguridadProteccion>
     */
    public function getModeloDefensaSeguridadProteccion(): Collection
    {
        return $this->modeloDefensaSeguridadProteccion;
    }

    public function addModeloDefensaSeguridadProteccion(ModeloDefensaSeguridadProteccion $modeloDefensaSeguridadProteccion): self
    {
        if (!$this->modeloDefensaSeguridadProteccion->contains($modeloDefensaSeguridadProteccion)) {
            $this->modeloDefensaSeguridadProteccion->add($modeloDefensaSeguridadProteccion);
            $modeloDefensaSeguridadProteccion->setAnteProyectoPlanPresupuesto($this);
        }

        return $this;
    }

    public function removeModeloDefensaSeguridadProteccion(ModeloDefensaSeguridadProteccion $modeloDefensaSeguridadProteccion): self
    {
        // set the owning side to null (unless already changed)
        if ($this->modeloDefensaSeguridadProteccion->removeElement($modeloDefensaSeguridadProteccion) && $modeloDefensaSeguridadProteccion->getAnteProyectoPlanPresupuesto() === $this) {
            $modeloDefensaSeguridadProteccion->setAnteProyectoPlanPresupuesto(null);
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloDinamicaDemografica>
     */
    public function getModeloDinamicaDemografica(): Collection
    {
        return $this->modeloDinamicaDemografica;
    }

    public function addModeloDinamicaDemografica(ModeloDinamicaDemografica $modeloDinamicaDemografica): self
    {
        if (!$this->modeloDinamicaDemografica->contains($modeloDinamicaDemografica)) {
            $this->modeloDinamicaDemografica->add($modeloDinamicaDemografica);
            $modeloDinamicaDemografica->setAnteProyectoPlanPresupuesto($this);
        }

        return $this;
    }

    public function removeModeloDinamicaDemografica(ModeloDinamicaDemografica $modeloDinamicaDemografica): self
    {
        // set the owning side to null (unless already changed)
        if ($this->modeloDinamicaDemografica->removeElement($modeloDinamicaDemografica) && $modeloDinamicaDemografica->getAnteProyectoPlanPresupuesto() === $this) {
            $modeloDinamicaDemografica->setAnteProyectoPlanPresupuesto(null);
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloInversiones>
     */
    public function getModeloInversiones(): Collection
    {
        return $this->modeloInversiones;
    }

    public function addModeloInversione(ModeloInversiones $modeloInversione): self
    {
        if (!$this->modeloInversiones->contains($modeloInversione)) {
            $this->modeloInversiones->add($modeloInversione);
            $modeloInversione->setAnteProyectoPlanPresupuesto($this);
        }

        return $this;
    }

    public function removeModeloInversione(ModeloInversiones $modeloInversione): self
    {
        // set the owning side to null (unless already changed)
        if ($this->modeloInversiones->removeElement($modeloInversione) && $modeloInversione->getAnteProyectoPlanPresupuesto() === $this) {
            $modeloInversione->setAnteProyectoPlanPresupuesto(null);
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloPortadoresCombustible>
     */
    public function getModeloPortadoresCombustible(): Collection
    {
        return $this->modeloPortadoresCombustible;
    }

    public function addModeloPortadoresCombustible(ModeloPortadoresCombustible $modeloPortadoresCombustible): self
    {
        if (!$this->modeloPortadoresCombustible->contains($modeloPortadoresCombustible)) {
            $this->modeloPortadoresCombustible->add($modeloPortadoresCombustible);
            $modeloPortadoresCombustible->setAnteProyectoPlanPresupuesto($this);
        }

        return $this;
    }

    public function removeModeloPortadoresCombustible(ModeloPortadoresCombustible $modeloPortadoresCombustible): self
    {
        // set the owning side to null (unless already changed)
        if ($this->modeloPortadoresCombustible->removeElement($modeloPortadoresCombustible) && $modeloPortadoresCombustible->getAnteProyectoPlanPresupuesto() === $this) {
            $modeloPortadoresCombustible->setAnteProyectoPlanPresupuesto(null);
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloPortadoresEnergia>
     */
    public function getModeloPortadoresEnergia(): Collection
    {
        return $this->modeloPortadoresEnergia;
    }

    public function addModeloPortadoresEnergium(ModeloPortadoresEnergia $modeloPortadoresEnergium): self
    {
        if (!$this->modeloPortadoresEnergia->contains($modeloPortadoresEnergium)) {
            $this->modeloPortadoresEnergia->add($modeloPortadoresEnergium);
            $modeloPortadoresEnergium->setAnteProyectoPlanPresupuesto($this);
        }

        return $this;
    }

    public function removeModeloPortadoresEnergium(ModeloPortadoresEnergia $modeloPortadoresEnergium): self
    {
        // set the owning side to null (unless already changed)
        if ($this->modeloPortadoresEnergia->removeElement($modeloPortadoresEnergium) && $modeloPortadoresEnergium->getAnteProyectoPlanPresupuesto() === $this) {
            $modeloPortadoresEnergium->setAnteProyectoPlanPresupuesto(null);
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloSectorExterno>
     */
    public function getModeloSectorExterno(): Collection
    {
        return $this->modeloSectorExterno;
    }

    public function addModeloSectorExterno(ModeloSectorExterno $modeloSectorExterno): self
    {
        if (!$this->modeloSectorExterno->contains($modeloSectorExterno)) {
            $this->modeloSectorExterno->add($modeloSectorExterno);
            $modeloSectorExterno->setAnteProyectoPlanPresupuesto($this);
        }

        return $this;
    }

    public function removeModeloSectorExterno(ModeloSectorExterno $modeloSectorExterno): self
    {
        // set the owning side to null (unless already changed)
        if ($this->modeloSectorExterno->removeElement($modeloSectorExterno) && $modeloSectorExterno->getAnteProyectoPlanPresupuesto() === $this) {
            $modeloSectorExterno->setAnteProyectoPlanPresupuesto(null);
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloTransporte>
     */
    public function getModeloTransporte(): Collection
    {
        return $this->modeloTransporte;
    }

    public function addModeloTransporte(ModeloTransporte $modeloTransporte): self
    {
        if (!$this->modeloTransporte->contains($modeloTransporte)) {
            $this->modeloTransporte->add($modeloTransporte);
            $modeloTransporte->setAnteProyectoPlanPresupuesto($this);
        }

        return $this;
    }

    public function removeModeloTransporte(ModeloTransporte $modeloTransporte): self
    {
        // set the owning side to null (unless already changed)
        if ($this->modeloTransporte->removeElement($modeloTransporte) && $modeloTransporte->getAnteProyectoPlanPresupuesto() === $this) {
            $modeloTransporte->setAnteProyectoPlanPresupuesto(null);
        }

        return $this;
    }
}
