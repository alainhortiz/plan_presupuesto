<?php

namespace App\Entity;

use App\Repository\EntidadRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EntidadRepository::class)]
class Entidad
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column]
    private ?int $centroCosto = null;

    #[ORM\Column]
    private ?bool $demanda = true;

    #[ORM\ManyToOne(inversedBy: 'entidades')]
    #[ORM\JoinColumn(nullable: false)]
    private ?TipoEntidad $tipoEntidad = null;

    #[ORM\OneToMany(mappedBy: 'entidad', targetEntity: User::class)]
    private Collection $users;

    #[ORM\OneToMany(mappedBy: 'entidad', targetEntity: ModeloNivelActividad::class)]
    private Collection $modeloNivelActividads;

    #[ORM\Column]
    private ?bool $modeloNivelActividad = true;

    #[ORM\Column]
    private ?bool $modeloColaboracionInternacionalActivosFijos = true;

    #[ORM\Column]
    private ?bool $modeloColaboracionInternacionalMediosTransportes = true;

    #[ORM\Column]
    private ?bool $modeloColaboracionInternacionalProyectos = true;

    #[ORM\Column]
    private ?bool $modeloDefensaSeguridadProteccion = true;

    #[ORM\Column]
    private ?bool $modeloDinamicaDemografica = true;

    #[ORM\Column]
    private ?bool $modeloInversiones = true;

    #[ORM\Column]
    private ?bool $modeloPortadoresCombustible = true;

    #[ORM\Column]
    private ?bool $modeloPortadoresEnergia = true;

    #[ORM\Column]
    private ?bool $modeloPortadoresServicios = true;

    #[ORM\Column]
    private ?bool $modeloSectorExterno = true;

    #[ORM\Column]
    private ?bool $modeloTransporte = true;

    #[ORM\OneToMany(mappedBy: 'entidad', targetEntity: ModeloColaboracionInternacionalActivosFijos::class)]
    private Collection $entidadModeloColaboracionInternacionalActivosFijos;

    #[ORM\OneToMany(mappedBy: 'entidad', targetEntity: ModeloColaboracionInternacionalMediosTransportes::class)]
    private Collection $entidadModeloColaboracionInternacionalMediosTransportes;

    #[ORM\OneToMany(mappedBy: 'entidad', targetEntity: ModeloColaboracionInternacionalProyectos::class)]
    private Collection $entidadModeloColaboracionInternacionalProyectos;

    #[ORM\OneToMany(mappedBy: 'entidad', targetEntity: ModeloDefensaSeguridadProteccion::class)]
    private Collection $entidadModeloDefensaSeguridadProteccion;

    #[ORM\OneToMany(mappedBy: 'entidad', targetEntity: ModeloDinamicaDemografica::class)]
    private Collection $entidadModeloDinamicaDemografica;

    #[ORM\OneToMany(mappedBy: 'entidad', targetEntity: ModeloInversiones::class)]
    private Collection $entidadModeloInversiones;

    #[ORM\OneToMany(mappedBy: 'entidad', targetEntity: ModeloPortadoresCombustible::class)]
    private Collection $entidadModeloPortadoresCombustible;

    #[ORM\OneToMany(mappedBy: 'entidad', targetEntity: ModeloPortadoresEnergia::class)]
    private Collection $entidadModeloPortadoresEnergia;

    #[ORM\OneToMany(mappedBy: 'entidad', targetEntity: ModeloPortadoresServicios::class)]
    private Collection $entidadModeloPortadoresServicios;

    #[ORM\OneToMany(mappedBy: 'entidad', targetEntity: ModeloSectorExterno::class)]
    private Collection $entidadModeloSectorExterno;

    #[ORM\OneToMany(mappedBy: 'entidad', targetEntity: ModeloTransporte::class)]
    private Collection $entidadModeloTransporte;

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->modeloNivelActividads = new ArrayCollection();
        $this->entidadModeloColaboracionInternacionalActivosFijos = new ArrayCollection();
        $this->entidadModeloColaboracionInternacionalMediosTransportes = new ArrayCollection();
        $this->entidadModeloColaboracionInternacionalProyectos = new ArrayCollection();
        $this->entidadModeloDefensaSeguridadProteccion = new ArrayCollection();
        $this->entidadModeloDinamicaDemografica = new ArrayCollection();
        $this->entidadModeloInversiones = new ArrayCollection();
        $this->entidadModeloPortadoresCombustible = new ArrayCollection();
        $this->entidadModeloPortadoresEnergia = new ArrayCollection();
        $this->entidadModeloPortadoresServicios = new ArrayCollection();
        $this->entidadModeloSectorExterno = new ArrayCollection();
        $this->entidadModeloTransporte = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }


    public function getTipoEntidad(): ?TipoEntidad
    {
        return $this->tipoEntidad;
    }

    public function setTipoEntidad(?TipoEntidad $tipoEntidad): self
    {
        $this->tipoEntidad = $tipoEntidad;

        return $this;
    }

    public function isDemanda(): ?bool
    {
        return $this->demanda;
    }

    public function setDemanda(bool $demanda): self
    {
        $this->demanda = $demanda;

        return $this;
    }

    public function getCentroCosto(): ?int
    {
        return $this->centroCosto;
    }

    public function setCentroCosto(int $centroCosto): self
    {
        $this->centroCosto = $centroCosto;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
            $user->setEntidad($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        // set the owning side to null (unless already changed)
        if ($this->users->removeElement($user) && $user->getEntidad() === $this) {
            $user->setEntidad(null);
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloNivelActividad>
     */
    public function getModeloNivelActividads(): Collection
    {
        return $this->modeloNivelActividads;
    }

    public function addModeloNivelActividad(ModeloNivelActividad $modeloNivelActividad): self
    {
        if (!$this->modeloNivelActividads->contains($modeloNivelActividad)) {
            $this->modeloNivelActividads->add($modeloNivelActividad);
            $modeloNivelActividad->setEntidad($this);
        }

        return $this;
    }

    public function removeModeloNivelActividad(ModeloNivelActividad $modeloNivelActividad): self
    {
        if ($this->modeloNivelActividads->removeElement($modeloNivelActividad)) {
            // set the owning side to null (unless already changed)
            if ($modeloNivelActividad->getEntidad() === $this) {
                $modeloNivelActividad->setEntidad(null);
            }
        }

        return $this;
    }

    public function isModeloNivelActividad(): ?bool
    {
        return $this->modeloNivelActividad;
    }

    public function setModeloNivelActividad(bool $modeloNivelActividad): self
    {
        $this->modeloNivelActividad = $modeloNivelActividad;

        return $this;
    }

    public function isModeloColaboracionInternacionalActivosFijos(): ?bool
    {
        return $this->modeloColaboracionInternacionalActivosFijos;
    }

    public function setModeloColaboracionInternacionalActivosFijos(bool $modeloColaboracionInternacionalActivosFijos): self
    {
        $this->modeloColaboracionInternacionalActivosFijos = $modeloColaboracionInternacionalActivosFijos;

        return $this;
    }

    public function isModeloColaboracionInternacionalMediosTransportes(): ?bool
    {
        return $this->modeloColaboracionInternacionalMediosTransportes;
    }

    public function setModeloColaboracionInternacionalMediosTransportes(bool $modeloColaboracionInternacionalMediosTransportes): self
    {
        $this->modeloColaboracionInternacionalMediosTransportes = $modeloColaboracionInternacionalMediosTransportes;

        return $this;
    }

    public function isModeloColaboracionInternacionalProyectos(): ?bool
    {
        return $this->modeloColaboracionInternacionalProyectos;
    }

    public function setModeloColaboracionInternacionalProyectos(bool $modeloColaboracionInternacionalProyectos): self
    {
        $this->modeloColaboracionInternacionalProyectos = $modeloColaboracionInternacionalProyectos;

        return $this;
    }

    public function isModeloDefensaSeguridadProteccion(): ?bool
    {
        return $this->modeloDefensaSeguridadProteccion;
    }

    public function setModeloDefensaSeguridadProteccion(bool $modeloDefensaSeguridadProteccion): self
    {
        $this->modeloDefensaSeguridadProteccion = $modeloDefensaSeguridadProteccion;

        return $this;
    }

    public function isModeloDinamicaDemografica(): ?bool
    {
        return $this->modeloDinamicaDemografica;
    }

    public function setModeloDinamicaDemografica(bool $modeloDinamicaDemografica): self
    {
        $this->modeloDinamicaDemografica = $modeloDinamicaDemografica;

        return $this;
    }

    public function isModeloInversiones(): ?bool
    {
        return $this->modeloInversiones;
    }

    public function setModeloInversiones(bool $modeloInversiones): self
    {
        $this->modeloInversiones = $modeloInversiones;

        return $this;
    }

    public function isModeloPortadoresCombustible(): ?bool
    {
        return $this->modeloPortadoresCombustible;
    }

    public function setModeloPortadoresCombustible(bool $modeloPortadoresCombustible): self
    {
        $this->modeloPortadoresCombustible = $modeloPortadoresCombustible;

        return $this;
    }

    public function isModeloPortadoresEnergia(): ?bool
    {
        return $this->modeloPortadoresEnergia;
    }

    public function setModeloPortadoresEnergia(bool $modeloPortadoresEnergia): self
    {
        $this->modeloPortadoresEnergia = $modeloPortadoresEnergia;

        return $this;
    }

    public function isModeloPortadoresServicios(): ?bool
    {
        return $this->modeloPortadoresServicios;
    }

    public function setModeloPortadoresServicios(bool $modeloPortadoresServicios): self
    {
        $this->modeloPortadoresServicios = $modeloPortadoresServicios;

        return $this;
    }

    public function isModeloSectorExterno(): ?bool
    {
        return $this->modeloSectorExterno;
    }

    public function setModeloSectorExterno(bool $modeloSectorExterno): self
    {
        $this->modeloSectorExterno = $modeloSectorExterno;

        return $this;
    }

    public function isModeloTransporte(): ?bool
    {
        return $this->modeloTransporte;
    }

    public function setModeloTransporte(bool $modeloTransporte): self
    {
        $this->modeloTransporte = $modeloTransporte;

        return $this;
    }

    /**
     * @return Collection<int, ModeloColaboracionInternacionalActivosFijos>
     */
    public function getEntidadModeloColaboracionInternacionalActivosFijos(): Collection
    {
        return $this->entidadModeloColaboracionInternacionalActivosFijos;
    }

    public function addEntidadModeloColaboracionInternacionalActivosFijo(ModeloColaboracionInternacionalActivosFijos $entidadModeloColaboracionInternacionalActivosFijo): self
    {
        if (!$this->entidadModeloColaboracionInternacionalActivosFijos->contains($entidadModeloColaboracionInternacionalActivosFijo)) {
            $this->entidadModeloColaboracionInternacionalActivosFijos->add($entidadModeloColaboracionInternacionalActivosFijo);
            $entidadModeloColaboracionInternacionalActivosFijo->setEntidad($this);
        }

        return $this;
    }

    public function removeEntidadModeloColaboracionInternacionalActivosFijo(ModeloColaboracionInternacionalActivosFijos $entidadModeloColaboracionInternacionalActivosFijo): self
    {
        if ($this->entidadModeloColaboracionInternacionalActivosFijos->removeElement($entidadModeloColaboracionInternacionalActivosFijo)) {
            // set the owning side to null (unless already changed)
            if ($entidadModeloColaboracionInternacionalActivosFijo->getEntidad() === $this) {
                $entidadModeloColaboracionInternacionalActivosFijo->setEntidad(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloColaboracionInternacionalMediosTransportes>
     */
    public function getEntidadModeloColaboracionInternacionalMediosTransportes(): Collection
    {
        return $this->entidadModeloColaboracionInternacionalMediosTransportes;
    }

    public function addEntidadModeloColaboracionInternacionalMediosTransporte(ModeloColaboracionInternacionalMediosTransportes $entidadModeloColaboracionInternacionalMediosTransporte): self
    {
        if (!$this->entidadModeloColaboracionInternacionalMediosTransportes->contains($entidadModeloColaboracionInternacionalMediosTransporte)) {
            $this->entidadModeloColaboracionInternacionalMediosTransportes->add($entidadModeloColaboracionInternacionalMediosTransporte);
            $entidadModeloColaboracionInternacionalMediosTransporte->setEntidad($this);
        }

        return $this;
    }

    public function removeEntidadModeloColaboracionInternacionalMediosTransporte(ModeloColaboracionInternacionalMediosTransportes $entidadModeloColaboracionInternacionalMediosTransporte): self
    {
        if ($this->entidadModeloColaboracionInternacionalMediosTransportes->removeElement($entidadModeloColaboracionInternacionalMediosTransporte)) {
            // set the owning side to null (unless already changed)
            if ($entidadModeloColaboracionInternacionalMediosTransporte->getEntidad() === $this) {
                $entidadModeloColaboracionInternacionalMediosTransporte->setEntidad(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloColaboracionInternacionalProyectos>
     */
    public function getEntidadModeloColaboracionInternacionalProyectos(): Collection
    {
        return $this->entidadModeloColaboracionInternacionalProyectos;
    }

    public function addEntidadModeloColaboracionInternacionalProyecto(ModeloColaboracionInternacionalProyectos $entidadModeloColaboracionInternacionalProyecto): self
    {
        if (!$this->entidadModeloColaboracionInternacionalProyectos->contains($entidadModeloColaboracionInternacionalProyecto)) {
            $this->entidadModeloColaboracionInternacionalProyectos->add($entidadModeloColaboracionInternacionalProyecto);
            $entidadModeloColaboracionInternacionalProyecto->setEntidad($this);
        }

        return $this;
    }

    public function removeEntidadModeloColaboracionInternacionalProyecto(ModeloColaboracionInternacionalProyectos $entidadModeloColaboracionInternacionalProyecto): self
    {
        if ($this->entidadModeloColaboracionInternacionalProyectos->removeElement($entidadModeloColaboracionInternacionalProyecto)) {
            // set the owning side to null (unless already changed)
            if ($entidadModeloColaboracionInternacionalProyecto->getEntidad() === $this) {
                $entidadModeloColaboracionInternacionalProyecto->setEntidad(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloDefensaSeguridadProteccion>
     */
    public function getEntidadModeloDefensaSeguridadProteccion(): Collection
    {
        return $this->entidadModeloDefensaSeguridadProteccion;
    }

    public function addEntidadModeloDefensaSeguridadProteccion(ModeloDefensaSeguridadProteccion $entidadModeloDefensaSeguridadProteccion): self
    {
        if (!$this->entidadModeloDefensaSeguridadProteccion->contains($entidadModeloDefensaSeguridadProteccion)) {
            $this->entidadModeloDefensaSeguridadProteccion->add($entidadModeloDefensaSeguridadProteccion);
            $entidadModeloDefensaSeguridadProteccion->setEntidad($this);
        }

        return $this;
    }

    public function removeEntidadModeloDefensaSeguridadProteccion(ModeloDefensaSeguridadProteccion $entidadModeloDefensaSeguridadProteccion): self
    {
        if ($this->entidadModeloDefensaSeguridadProteccion->removeElement($entidadModeloDefensaSeguridadProteccion)) {
            // set the owning side to null (unless already changed)
            if ($entidadModeloDefensaSeguridadProteccion->getEntidad() === $this) {
                $entidadModeloDefensaSeguridadProteccion->setEntidad(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloDinamicaDemografica>
     */
    public function getEntidadModeloDinamicaDemografica(): Collection
    {
        return $this->entidadModeloDinamicaDemografica;
    }

    public function addEntidadModeloDinamicaDemografica(ModeloDinamicaDemografica $entidadModeloDinamicaDemografica): self
    {
        if (!$this->entidadModeloDinamicaDemografica->contains($entidadModeloDinamicaDemografica)) {
            $this->entidadModeloDinamicaDemografica->add($entidadModeloDinamicaDemografica);
            $entidadModeloDinamicaDemografica->setEntidad($this);
        }

        return $this;
    }

    public function removeEntidadModeloDinamicaDemografica(ModeloDinamicaDemografica $entidadModeloDinamicaDemografica): self
    {
        if ($this->entidadModeloDinamicaDemografica->removeElement($entidadModeloDinamicaDemografica)) {
            // set the owning side to null (unless already changed)
            if ($entidadModeloDinamicaDemografica->getEntidad() === $this) {
                $entidadModeloDinamicaDemografica->setEntidad(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloInversiones>
     */
    public function getEntidadModeloInversiones(): Collection
    {
        return $this->entidadModeloInversiones;
    }

    public function addEntidadModeloInversione(ModeloInversiones $entidadModeloInversione): self
    {
        if (!$this->entidadModeloInversiones->contains($entidadModeloInversione)) {
            $this->entidadModeloInversiones->add($entidadModeloInversione);
            $entidadModeloInversione->setEntidad($this);
        }

        return $this;
    }

    public function removeEntidadModeloInversione(ModeloInversiones $entidadModeloInversione): self
    {
        if ($this->entidadModeloInversiones->removeElement($entidadModeloInversione)) {
            // set the owning side to null (unless already changed)
            if ($entidadModeloInversione->getEntidad() === $this) {
                $entidadModeloInversione->setEntidad(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloPortadoresCombustible>
     */
    public function getEntidadModeloPortadoresCombustible(): Collection
    {
        return $this->entidadModeloPortadoresCombustible;
    }

    public function addEntidadModeloPortadoresCombustible(ModeloPortadoresCombustible $entidadModeloPortadoresCombustible): self
    {
        if (!$this->entidadModeloPortadoresCombustible->contains($entidadModeloPortadoresCombustible)) {
            $this->entidadModeloPortadoresCombustible->add($entidadModeloPortadoresCombustible);
            $entidadModeloPortadoresCombustible->setEntidad($this);
        }

        return $this;
    }

    public function removeEntidadModeloPortadoresCombustible(ModeloPortadoresCombustible $entidadModeloPortadoresCombustible): self
    {
        if ($this->entidadModeloPortadoresCombustible->removeElement($entidadModeloPortadoresCombustible)) {
            // set the owning side to null (unless already changed)
            if ($entidadModeloPortadoresCombustible->getEntidad() === $this) {
                $entidadModeloPortadoresCombustible->setEntidad(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloPortadoresEnergia>
     */
    public function getEntidadModeloPortadoresEnergia(): Collection
    {
        return $this->entidadModeloPortadoresEnergia;
    }

    public function addEntidadModeloPortadoresEnergium(ModeloPortadoresEnergia $entidadModeloPortadoresEnergium): self
    {
        if (!$this->entidadModeloPortadoresEnergia->contains($entidadModeloPortadoresEnergium)) {
            $this->entidadModeloPortadoresEnergia->add($entidadModeloPortadoresEnergium);
            $entidadModeloPortadoresEnergium->setEntidad($this);
        }

        return $this;
    }

    public function removeEntidadModeloPortadoresEnergium(ModeloPortadoresEnergia $entidadModeloPortadoresEnergium): self
    {
        if ($this->entidadModeloPortadoresEnergia->removeElement($entidadModeloPortadoresEnergium)) {
            // set the owning side to null (unless already changed)
            if ($entidadModeloPortadoresEnergium->getEntidad() === $this) {
                $entidadModeloPortadoresEnergium->setEntidad(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloPortadoresServicios>
     */
    public function getEntidadModeloPortadoresServicios(): Collection
    {
        return $this->entidadModeloPortadoresServicios;
    }

    public function addEntidadModeloPortadoresServicio(ModeloPortadoresServicios $entidadModeloPortadoresServicio): self
    {
        if (!$this->entidadModeloPortadoresServicios->contains($entidadModeloPortadoresServicio)) {
            $this->entidadModeloPortadoresServicios->add($entidadModeloPortadoresServicio);
            $entidadModeloPortadoresServicio->setEntidad($this);
        }

        return $this;
    }

    public function removeEntidadModeloPortadoresServicio(ModeloPortadoresServicios $entidadModeloPortadoresServicio): self
    {
        if ($this->entidadModeloPortadoresServicios->removeElement($entidadModeloPortadoresServicio)) {
            // set the owning side to null (unless already changed)
            if ($entidadModeloPortadoresServicio->getEntidad() === $this) {
                $entidadModeloPortadoresServicio->setEntidad(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloSectorExterno>
     */
    public function getEntidadModeloSectorExterno(): Collection
    {
        return $this->entidadModeloSectorExterno;
    }

    public function addEntidadModeloSectorExterno(ModeloSectorExterno $entidadModeloSectorExterno): self
    {
        if (!$this->entidadModeloSectorExterno->contains($entidadModeloSectorExterno)) {
            $this->entidadModeloSectorExterno->add($entidadModeloSectorExterno);
            $entidadModeloSectorExterno->setEntidad($this);
        }

        return $this;
    }

    public function removeEntidadModeloSectorExterno(ModeloSectorExterno $entidadModeloSectorExterno): self
    {
        if ($this->entidadModeloSectorExterno->removeElement($entidadModeloSectorExterno)) {
            // set the owning side to null (unless already changed)
            if ($entidadModeloSectorExterno->getEntidad() === $this) {
                $entidadModeloSectorExterno->setEntidad(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloTransporte>
     */
    public function getEntidadModeloTransporte(): Collection
    {
        return $this->entidadModeloTransporte;
    }

    public function addEntidadModeloTransporte(ModeloTransporte $entidadModeloTransporte): self
    {
        if (!$this->entidadModeloTransporte->contains($entidadModeloTransporte)) {
            $this->entidadModeloTransporte->add($entidadModeloTransporte);
            $entidadModeloTransporte->setEntidad($this);
        }

        return $this;
    }

    public function removeEntidadModeloTransporte(ModeloTransporte $entidadModeloTransporte): self
    {
        if ($this->entidadModeloTransporte->removeElement($entidadModeloTransporte)) {
            // set the owning side to null (unless already changed)
            if ($entidadModeloTransporte->getEntidad() === $this) {
                $entidadModeloTransporte->setEntidad(null);
            }
        }

        return $this;
    }

}
