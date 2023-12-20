<?php

namespace App\Entity;

use App\Repository\EstadoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EstadoRepository::class)]
class Estado
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $nombre = null;

    #[ORM\OneToMany(mappedBy: 'estado', targetEntity: ModeloNivelActividad::class)]
    private Collection $modeloNivelActividads;

    #[ORM\OneToMany(mappedBy: 'estado', targetEntity: ModeloColaboracionInternacionalActivosFijos::class)]
    private Collection $modeloColaboracionInternacionalActivosFijos;

    #[ORM\OneToMany(mappedBy: 'estado', targetEntity: ModeloColaboracionInternacionalMediosTransportes::class)]
    private Collection $modeloColaboracionInternacionalMediosTransportes;

    #[ORM\OneToMany(mappedBy: 'estado', targetEntity: ModeloColaboracionInternacionalProyectos::class)]
    private Collection $modeloColaboracionInternacionalProyectos;

    #[ORM\OneToMany(mappedBy: 'estado', targetEntity: ModeloDefensaSeguridadProteccion::class)]
    private Collection $modeloDefensaSeguridadProteccions;

    #[ORM\OneToMany(mappedBy: 'estado', targetEntity: ModeloDinamicaDemografica::class)]
    private Collection $modeloDinamicaDemograficas;

    #[ORM\OneToMany(mappedBy: 'estado', targetEntity: ModeloInversiones::class)]
    private Collection $modeloInversiones;

    #[ORM\OneToMany(mappedBy: 'estado', targetEntity: ModeloPortadoresCombustible::class)]
    private Collection $modeloPortadoresCombustibles;

    #[ORM\OneToMany(mappedBy: 'estado', targetEntity: ModeloPortadoresEnergia::class)]
    private Collection $modeloPortadoresEnergias;

    #[ORM\OneToMany(mappedBy: 'estado', targetEntity: ModeloPortadoresServicios::class)]
    private Collection $modeloPortadoresServicios;

    #[ORM\OneToMany(mappedBy: 'estado', targetEntity: ModeloSectorExterno::class)]
    private Collection $modeloSectorExternos;

    #[ORM\OneToMany(mappedBy: 'estado', targetEntity: ModeloTransporte::class)]
    private Collection $modeloTransportes;

    public function __construct()
    {
        $this->modeloNivelActividads = new ArrayCollection();
        $this->modeloColaboracionInternacionalActivosFijos = new ArrayCollection();
        $this->modeloColaboracionInternacionalMediosTransportes = new ArrayCollection();
        $this->modeloColaboracionInternacionalProyectos = new ArrayCollection();
        $this->modeloDefensaSeguridadProteccions = new ArrayCollection();
        $this->modeloDinamicaDemograficas = new ArrayCollection();
        $this->modeloInversiones = new ArrayCollection();
        $this->modeloPortadoresCombustibles = new ArrayCollection();
        $this->modeloPortadoresEnergias = new ArrayCollection();
        $this->modeloPortadoresServicios = new ArrayCollection();
        $this->modeloSectorExternos = new ArrayCollection();
        $this->modeloTransportes = new ArrayCollection();
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
            $modeloNivelActividad->setEstado($this);
        }

        return $this;
    }

    public function removeModeloNivelActividad(ModeloNivelActividad $modeloNivelActividad): self
    {
        if ($this->modeloNivelActividads->removeElement($modeloNivelActividad)) {
            // set the owning side to null (unless already changed)
            if ($modeloNivelActividad->getEstado() === $this) {
                $modeloNivelActividad->setEstado(null);
            }
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
            $modeloColaboracionInternacionalActivosFijo->setEstado($this);
        }

        return $this;
    }

    public function removeModeloColaboracionInternacionalActivosFijo(ModeloColaboracionInternacionalActivosFijos $modeloColaboracionInternacionalActivosFijo): self
    {
        if ($this->modeloColaboracionInternacionalActivosFijos->removeElement($modeloColaboracionInternacionalActivosFijo)) {
            // set the owning side to null (unless already changed)
            if ($modeloColaboracionInternacionalActivosFijo->getEstado() === $this) {
                $modeloColaboracionInternacionalActivosFijo->setEstado(null);
            }
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
            $modeloColaboracionInternacionalMediosTransporte->setEstado($this);
        }

        return $this;
    }

    public function removeModeloColaboracionInternacionalMediosTransporte(ModeloColaboracionInternacionalMediosTransportes $modeloColaboracionInternacionalMediosTransporte): self
    {
        if ($this->modeloColaboracionInternacionalMediosTransportes->removeElement($modeloColaboracionInternacionalMediosTransporte)) {
            // set the owning side to null (unless already changed)
            if ($modeloColaboracionInternacionalMediosTransporte->getEstado() === $this) {
                $modeloColaboracionInternacionalMediosTransporte->setEstado(null);
            }
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
            $modeloColaboracionInternacionalProyecto->setEstado($this);
        }

        return $this;
    }

    public function removeModeloColaboracionInternacionalProyecto(ModeloColaboracionInternacionalProyectos $modeloColaboracionInternacionalProyecto): self
    {
        if ($this->modeloColaboracionInternacionalProyectos->removeElement($modeloColaboracionInternacionalProyecto)) {
            // set the owning side to null (unless already changed)
            if ($modeloColaboracionInternacionalProyecto->getEstado() === $this) {
                $modeloColaboracionInternacionalProyecto->setEstado(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloDefensaSeguridadProteccion>
     */
    public function getModeloDefensaSeguridadProteccions(): Collection
    {
        return $this->modeloDefensaSeguridadProteccions;
    }

    public function addModeloDefensaSeguridadProteccion(ModeloDefensaSeguridadProteccion $modeloDefensaSeguridadProteccion): self
    {
        if (!$this->modeloDefensaSeguridadProteccions->contains($modeloDefensaSeguridadProteccion)) {
            $this->modeloDefensaSeguridadProteccions->add($modeloDefensaSeguridadProteccion);
            $modeloDefensaSeguridadProteccion->setEstado($this);
        }

        return $this;
    }

    public function removeModeloDefensaSeguridadProteccion(ModeloDefensaSeguridadProteccion $modeloDefensaSeguridadProteccion): self
    {
        if ($this->modeloDefensaSeguridadProteccions->removeElement($modeloDefensaSeguridadProteccion)) {
            // set the owning side to null (unless already changed)
            if ($modeloDefensaSeguridadProteccion->getEstado() === $this) {
                $modeloDefensaSeguridadProteccion->setEstado(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloDinamicaDemografica>
     */
    public function getModeloDinamicaDemograficas(): Collection
    {
        return $this->modeloDinamicaDemograficas;
    }

    public function addModeloDinamicaDemografica(ModeloDinamicaDemografica $modeloDinamicaDemografica): self
    {
        if (!$this->modeloDinamicaDemograficas->contains($modeloDinamicaDemografica)) {
            $this->modeloDinamicaDemograficas->add($modeloDinamicaDemografica);
            $modeloDinamicaDemografica->setEstado($this);
        }

        return $this;
    }

    public function removeModeloDinamicaDemografica(ModeloDinamicaDemografica $modeloDinamicaDemografica): self
    {
        if ($this->modeloDinamicaDemograficas->removeElement($modeloDinamicaDemografica)) {
            // set the owning side to null (unless already changed)
            if ($modeloDinamicaDemografica->getEstado() === $this) {
                $modeloDinamicaDemografica->setEstado(null);
            }
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
            $modeloInversione->setEstado($this);
        }

        return $this;
    }

    public function removeModeloInversione(ModeloInversiones $modeloInversione): self
    {
        if ($this->modeloInversiones->removeElement($modeloInversione)) {
            // set the owning side to null (unless already changed)
            if ($modeloInversione->getEstado() === $this) {
                $modeloInversione->setEstado(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloPortadoresCombustible>
     */
    public function getModeloPortadoresCombustibles(): Collection
    {
        return $this->modeloPortadoresCombustibles;
    }

    public function addModeloPortadoresCombustible(ModeloPortadoresCombustible $modeloPortadoresCombustible): self
    {
        if (!$this->modeloPortadoresCombustibles->contains($modeloPortadoresCombustible)) {
            $this->modeloPortadoresCombustibles->add($modeloPortadoresCombustible);
            $modeloPortadoresCombustible->setEstado($this);
        }

        return $this;
    }

    public function removeModeloPortadoresCombustible(ModeloPortadoresCombustible $modeloPortadoresCombustible): self
    {
        if ($this->modeloPortadoresCombustibles->removeElement($modeloPortadoresCombustible)) {
            // set the owning side to null (unless already changed)
            if ($modeloPortadoresCombustible->getEstado() === $this) {
                $modeloPortadoresCombustible->setEstado(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloPortadoresEnergia>
     */
    public function getModeloPortadoresEnergias(): Collection
    {
        return $this->modeloPortadoresEnergias;
    }

    public function addModeloPortadoresEnergia(ModeloPortadoresEnergia $modeloPortadoresEnergia): self
    {
        if (!$this->modeloPortadoresEnergias->contains($modeloPortadoresEnergia)) {
            $this->modeloPortadoresEnergias->add($modeloPortadoresEnergia);
            $modeloPortadoresEnergia->setEstado($this);
        }

        return $this;
    }

    public function removeModeloPortadoresEnergia(ModeloPortadoresEnergia $modeloPortadoresEnergia): self
    {
        if ($this->modeloPortadoresEnergias->removeElement($modeloPortadoresEnergia)) {
            // set the owning side to null (unless already changed)
            if ($modeloPortadoresEnergia->getEstado() === $this) {
                $modeloPortadoresEnergia->setEstado(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloPortadoresServicios>
     */
    public function getModeloPortadoresServicios(): Collection
    {
        return $this->modeloPortadoresServicios;
    }

    public function addModeloPortadoresServicio(ModeloPortadoresServicios $modeloPortadoresServicio): self
    {
        if (!$this->modeloPortadoresServicios->contains($modeloPortadoresServicio)) {
            $this->modeloPortadoresServicios->add($modeloPortadoresServicio);
            $modeloPortadoresServicio->setEstado($this);
        }

        return $this;
    }

    public function removeModeloPortadoresServicio(ModeloPortadoresServicios $modeloPortadoresServicio): self
    {
        if ($this->modeloPortadoresServicios->removeElement($modeloPortadoresServicio)) {
            // set the owning side to null (unless already changed)
            if ($modeloPortadoresServicio->getEstado() === $this) {
                $modeloPortadoresServicio->setEstado(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloSectorExterno>
     */
    public function getModeloSectorExternos(): Collection
    {
        return $this->modeloSectorExternos;
    }

    public function addModeloSectorExterno(ModeloSectorExterno $modeloSectorExterno): self
    {
        if (!$this->modeloSectorExternos->contains($modeloSectorExterno)) {
            $this->modeloSectorExternos->add($modeloSectorExterno);
            $modeloSectorExterno->setEstado($this);
        }

        return $this;
    }

    public function removeModeloSectorExterno(ModeloSectorExterno $modeloSectorExterno): self
    {
        if ($this->modeloSectorExternos->removeElement($modeloSectorExterno)) {
            // set the owning side to null (unless already changed)
            if ($modeloSectorExterno->getEstado() === $this) {
                $modeloSectorExterno->setEstado(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloTransporte>
     */
    public function getModeloTransportes(): Collection
    {
        return $this->modeloTransportes;
    }

    public function addModeloTransporte(ModeloTransporte $modeloTransporte): self
    {
        if (!$this->modeloTransportes->contains($modeloTransporte)) {
            $this->modeloTransportes->add($modeloTransporte);
            $modeloTransporte->setEstado($this);
        }

        return $this;
    }

    public function removeModeloTransporte(ModeloTransporte $modeloTransporte): self
    {
        if ($this->modeloTransportes->removeElement($modeloTransporte)) {
            // set the owning side to null (unless already changed)
            if ($modeloTransporte->getEstado() === $this) {
                $modeloTransporte->setEstado(null);
            }
        }

        return $this;
    }
}
