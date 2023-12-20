<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $username = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\ManyToOne(inversedBy: 'users')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Entidad $entidad = null;

    #[ORM\ManyToOne(inversedBy: 'users')]
    private ?Cargo $cargo = null;

    #[ORM\ManyToMany(targetEntity: Role::class, inversedBy: 'users')]
    private Collection $role;

    #[ORM\Column(length: 255)]
    private ?string $ManyToOne = null;

    #[ORM\ManyToOne(inversedBy: 'users')]
    #[ORM\JoinColumn(nullable: false)]
    private ?NivelAcceso $nivelAcceso = null;

    #[ORM\OneToMany(mappedBy: 'userRegistra', targetEntity: ModeloNivelActividad::class)]
    private Collection $registraModeloNivelActividad;

    #[ORM\OneToMany(mappedBy: 'userValida', targetEntity: ModeloNivelActividad::class)]
    private Collection $validaModeloNivelActividad;

    #[ORM\OneToMany(mappedBy: 'userRegistra', targetEntity: ModeloColaboracionInternacionalActivosFijos::class)]
    private Collection $registraModeloColaboracionInternacionalActivosFijos;

    #[ORM\OneToMany(mappedBy: 'userValida', targetEntity: ModeloColaboracionInternacionalActivosFijos::class)]
    private Collection $validaModeloColaboracionInternacionalActivosFijos;

    #[ORM\OneToMany(mappedBy: 'userRegistra', targetEntity: ModeloColaboracionInternacionalMediosTransportes::class)]
    private Collection $registraModeloColaboracionInternacionalMediosTransportes;

    #[ORM\OneToMany(mappedBy: 'userValida', targetEntity: ModeloColaboracionInternacionalMediosTransportes::class)]
    private Collection $validaModeloColaboracionInternacionalMediosTransportes;

    #[ORM\OneToMany(mappedBy: 'userRegistra', targetEntity: ModeloColaboracionInternacionalProyectos::class)]
    private Collection $registraModeloColaboracionInternacionalProyectos;

    #[ORM\OneToMany(mappedBy: 'userValida', targetEntity: ModeloColaboracionInternacionalProyectos::class)]
    private Collection $validaModeloColaboracionInternacionalProyectos;

    #[ORM\OneToMany(mappedBy: 'userRegistra', targetEntity: ModeloDefensaSeguridadProteccion::class)]
    private Collection $registraModeloDefensaSeguridadProteccion;

    #[ORM\OneToMany(mappedBy: 'userValida', targetEntity: ModeloDefensaSeguridadProteccion::class)]
    private Collection $validaModeloDefensaSeguridadProteccion;

    #[ORM\OneToMany(mappedBy: 'userRegistra', targetEntity: ModeloDinamicaDemografica::class)]
    private Collection $registraModeloDinamicaDemografica;

    #[ORM\OneToMany(mappedBy: 'userValida', targetEntity: ModeloDinamicaDemografica::class)]
    private Collection $validaModeloDinamicaDemografica;

    #[ORM\OneToMany(mappedBy: 'userRegistra', targetEntity: ModeloInversiones::class)]
    private Collection $registraModeloInversiones;

    #[ORM\OneToMany(mappedBy: 'userValida', targetEntity: ModeloInversiones::class)]
    private Collection $validaModeloInversiones;

    #[ORM\OneToMany(mappedBy: 'userRegistra', targetEntity: ModeloInversionesApertura::class)]
    private Collection $registraModeloInversionesApertura;

    #[ORM\OneToMany(mappedBy: 'userValida', targetEntity: ModeloInversionesApertura::class)]
    private Collection $validaModeloInversionesApertura;

    #[ORM\OneToMany(mappedBy: 'userRegistra', targetEntity: ModeloPortadoresCombustible::class)]
    private Collection $registraModeloPortadoresCombustible;

    #[ORM\OneToMany(mappedBy: 'userValida', targetEntity: ModeloPortadoresCombustible::class)]
    private Collection $validaModeloPortadoresCombustible;

    #[ORM\OneToMany(mappedBy: 'userRegistra', targetEntity: ModeloPortadoresEnergia::class)]
    private Collection $registraModeloPortadoresEnergia;

    #[ORM\OneToMany(mappedBy: 'userValida', targetEntity: ModeloPortadoresEnergia::class)]
    private Collection $validaModeloPortadoresEnergia;

    #[ORM\OneToMany(mappedBy: 'userRegistra', targetEntity: ModeloPortadoresServicios::class)]
    private Collection $registraModeloPortadoresServicios;

    #[ORM\OneToMany(mappedBy: 'userValida', targetEntity: ModeloPortadoresServicios::class)]
    private Collection $validaModeloPortadoresServicios;

    #[ORM\OneToMany(mappedBy: 'userRegistra', targetEntity: ModeloSectorExterno::class)]
    private Collection $registraModeloSectorExterno;

    #[ORM\OneToMany(mappedBy: 'userValida', targetEntity: ModeloSectorExterno::class)]
    private Collection $validaModeloSectorExterno;

    #[ORM\OneToMany(mappedBy: 'userRegistra', targetEntity: ModeloTransporte::class)]
    private Collection $registraModeloTransporte;

    #[ORM\OneToMany(mappedBy: 'userValida', targetEntity: ModeloTransporte::class)]
    private Collection $validaModeloTransporte;

    public function __construct()
    {
        $this->role = new ArrayCollection();
        $this->registraModeloNivelActividad = new ArrayCollection();
        $this->validaModeloNivelActividad = new ArrayCollection();
        $this->registraModeloColaboracionInternacionalActivosFijos = new ArrayCollection();
        $this->validaModeloColaboracionInternacionalActivosFijos = new ArrayCollection();
        $this->registraModeloColaboracionInternacionalMediosTransportes = new ArrayCollection();
        $this->validaModeloColaboracionInternacionalMediosTransportes = new ArrayCollection();
        $this->registraModeloColaboracionInternacionalProyectos = new ArrayCollection();
        $this->validaModeloColaboracionInternacionalProyectos = new ArrayCollection();
        $this->registraModeloDefensaSeguridadProteccion = new ArrayCollection();
        $this->validaModeloDefensaSeguridadProteccion = new ArrayCollection();
        $this->registraModeloDinamicaDemografica = new ArrayCollection();
        $this->validaModeloDinamicaDemografica = new ArrayCollection();
        $this->registraModeloInversiones = new ArrayCollection();
        $this->validaModeloInversiones = new ArrayCollection();
        $this->registraModeloInversionesApertura = new ArrayCollection();
        $this->validaModeloInversionesApertura = new ArrayCollection();
        $this->registraModeloPortadoresCombustible = new ArrayCollection();
        $this->validaModeloPortadoresCombustible = new ArrayCollection();
        $this->registraModeloPortadoresEnergia = new ArrayCollection();
        $this->validaModeloPortadoresEnergia = new ArrayCollection();
        $this->registraModeloPortadoresServicios = new ArrayCollection();
        $this->validaModeloPortadoresServicios = new ArrayCollection();
        $this->registraModeloSectorExterno = new ArrayCollection();
        $this->validaModeloSectorExterno = new ArrayCollection();
        $this->registraModeloTransporte = new ArrayCollection();
        $this->validaModeloTransporte = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->username;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
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

    public function getCargo(): ?Cargo
    {
        return $this->cargo;
    }

    public function setCargo(?Cargo $cargo): self
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * @return Collection<int, Role>
     */
    public function getRole(): Collection
    {
        return $this->role;
    }

    public function addRole(Role $role): self
    {
        if (!$this->role->contains($role)) {
            $this->role->add($role);
        }

        return $this;
    }

    public function removeRole(Role $role): self
    {
        $this->role->removeElement($role);

        return $this;
    }

    public function getManyToOne(): ?string
    {
        return $this->ManyToOne;
    }

    public function setManyToOne(string $ManyToOne): self
    {
        $this->ManyToOne = $ManyToOne;

        return $this;
    }

    public function getNivelAcceso(): ?NivelAcceso
    {
        return $this->nivelAcceso;
    }

    public function setNivelAcceso(?NivelAcceso $nivelAcceso): self
    {
        $this->nivelAcceso = $nivelAcceso;

        return $this;
    }

    /**
     * @return Collection<int, ModeloNivelActividad>
     */
    public function getRegistraModeloNivelActividad(): Collection
    {
        return $this->registraModeloNivelActividad;
    }

    public function addRegistraModeloNivelActividad(ModeloNivelActividad $registraModeloNivelActividad): self
    {
        if (!$this->registraModeloNivelActividad->contains($registraModeloNivelActividad)) {
            $this->registraModeloNivelActividad->add($registraModeloNivelActividad);
            $registraModeloNivelActividad->setUserRegistra($this);
        }

        return $this;
    }

    public function removeRegistraModeloNivelActividad(ModeloNivelActividad $registraModeloNivelActividad): self
    {
        if ($this->registraModeloNivelActividad->removeElement($registraModeloNivelActividad)) {
            // set the owning side to null (unless already changed)
            if ($registraModeloNivelActividad->getUserRegistra() === $this) {
                $registraModeloNivelActividad->setUserRegistra(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloNivelActividad>
     */
    public function getValidaModeloNivelActividad(): Collection
    {
        return $this->validaModeloNivelActividad;
    }

    public function addValidaModeloNivelActividad(ModeloNivelActividad $validaModeloNivelActividad): self
    {
        if (!$this->validaModeloNivelActividad->contains($validaModeloNivelActividad)) {
            $this->validaModeloNivelActividad->add($validaModeloNivelActividad);
            $validaModeloNivelActividad->setUserValida($this);
        }

        return $this;
    }

    public function removeValidaModeloNivelActividad(ModeloNivelActividad $validaModeloNivelActividad): self
    {
        if ($this->validaModeloNivelActividad->removeElement($validaModeloNivelActividad)) {
            // set the owning side to null (unless already changed)
            if ($validaModeloNivelActividad->getUserValida() === $this) {
                $validaModeloNivelActividad->setUserValida(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloColaboracionInternacionalActivosFijos>
     */
    public function getRegistraModeloColaboracionInternacionalActivosFijos(): Collection
    {
        return $this->registraModeloColaboracionInternacionalActivosFijos;
    }

    public function addRegistraModeloColaboracionInternacionalActivosFijo(ModeloColaboracionInternacionalActivosFijos $registraModeloColaboracionInternacionalActivosFijo): self
    {
        if (!$this->registraModeloColaboracionInternacionalActivosFijos->contains($registraModeloColaboracionInternacionalActivosFijo)) {
            $this->registraModeloColaboracionInternacionalActivosFijos->add($registraModeloColaboracionInternacionalActivosFijo);
            $registraModeloColaboracionInternacionalActivosFijo->setUserRegistra($this);
        }

        return $this;
    }

    public function removeRegistraModeloColaboracionInternacionalActivosFijo(ModeloColaboracionInternacionalActivosFijos $registraModeloColaboracionInternacionalActivosFijo): self
    {
        if ($this->registraModeloColaboracionInternacionalActivosFijos->removeElement($registraModeloColaboracionInternacionalActivosFijo)) {
            // set the owning side to null (unless already changed)
            if ($registraModeloColaboracionInternacionalActivosFijo->getUserRegistra() === $this) {
                $registraModeloColaboracionInternacionalActivosFijo->setUserRegistra(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloColaboracionInternacionalActivosFijos>
     */
    public function getValidaModeloColaboracionInternacionalActivosFijos(): Collection
    {
        return $this->validaModeloColaboracionInternacionalActivosFijos;
    }

    public function addValidaModeloColaboracionInternacionalActivosFijo(ModeloColaboracionInternacionalActivosFijos $validaModeloColaboracionInternacionalActivosFijo): self
    {
        if (!$this->validaModeloColaboracionInternacionalActivosFijos->contains($validaModeloColaboracionInternacionalActivosFijo)) {
            $this->validaModeloColaboracionInternacionalActivosFijos->add($validaModeloColaboracionInternacionalActivosFijo);
            $validaModeloColaboracionInternacionalActivosFijo->setUserValida($this);
        }

        return $this;
    }

    public function removeValidaModeloColaboracionInternacionalActivosFijo(ModeloColaboracionInternacionalActivosFijos $validaModeloColaboracionInternacionalActivosFijo): self
    {
        if ($this->validaModeloColaboracionInternacionalActivosFijos->removeElement($validaModeloColaboracionInternacionalActivosFijo)) {
            // set the owning side to null (unless already changed)
            if ($validaModeloColaboracionInternacionalActivosFijo->getUserValida() === $this) {
                $validaModeloColaboracionInternacionalActivosFijo->setUserValida(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloColaboracionInternacionalMediosTransportes>
     */
    public function getRegistraModeloColaboracionInternacionalMediosTransportes(): Collection
    {
        return $this->registraModeloColaboracionInternacionalMediosTransportes;
    }

    public function addRegistraModeloColaboracionInternacionalMediosTransporte(ModeloColaboracionInternacionalMediosTransportes $registraModeloColaboracionInternacionalMediosTransporte): self
    {
        if (!$this->registraModeloColaboracionInternacionalMediosTransportes->contains($registraModeloColaboracionInternacionalMediosTransporte)) {
            $this->registraModeloColaboracionInternacionalMediosTransportes->add($registraModeloColaboracionInternacionalMediosTransporte);
            $registraModeloColaboracionInternacionalMediosTransporte->setUserRegistra($this);
        }

        return $this;
    }

    public function removeRegistraModeloColaboracionInternacionalMediosTransporte(ModeloColaboracionInternacionalMediosTransportes $registraModeloColaboracionInternacionalMediosTransporte): self
    {
        if ($this->registraModeloColaboracionInternacionalMediosTransportes->removeElement($registraModeloColaboracionInternacionalMediosTransporte)) {
            // set the owning side to null (unless already changed)
            if ($registraModeloColaboracionInternacionalMediosTransporte->getUserRegistra() === $this) {
                $registraModeloColaboracionInternacionalMediosTransporte->setUserRegistra(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloColaboracionInternacionalMediosTransportes>
     */
    public function getValidaModeloColaboracionInternacionalMediosTransportes(): Collection
    {
        return $this->validaModeloColaboracionInternacionalMediosTransportes;
    }

    public function addValidaModeloColaboracionInternacionalMediosTransporte(ModeloColaboracionInternacionalMediosTransportes $validaModeloColaboracionInternacionalMediosTransporte): self
    {
        if (!$this->validaModeloColaboracionInternacionalMediosTransportes->contains($validaModeloColaboracionInternacionalMediosTransporte)) {
            $this->validaModeloColaboracionInternacionalMediosTransportes->add($validaModeloColaboracionInternacionalMediosTransporte);
            $validaModeloColaboracionInternacionalMediosTransporte->setUserValida($this);
        }

        return $this;
    }

    public function removeValidaModeloColaboracionInternacionalMediosTransporte(ModeloColaboracionInternacionalMediosTransportes $validaModeloColaboracionInternacionalMediosTransporte): self
    {
        if ($this->validaModeloColaboracionInternacionalMediosTransportes->removeElement($validaModeloColaboracionInternacionalMediosTransporte)) {
            // set the owning side to null (unless already changed)
            if ($validaModeloColaboracionInternacionalMediosTransporte->getUserValida() === $this) {
                $validaModeloColaboracionInternacionalMediosTransporte->setUserValida(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloColaboracionInternacionalProyectos>
     */
    public function getRegistraModeloColaboracionInternacionalProyectos(): Collection
    {
        return $this->registraModeloColaboracionInternacionalProyectos;
    }

    public function addRegistraModeloColaboracionInternacionalProyecto(ModeloColaboracionInternacionalProyectos $registraModeloColaboracionInternacionalProyecto): self
    {
        if (!$this->registraModeloColaboracionInternacionalProyectos->contains($registraModeloColaboracionInternacionalProyecto)) {
            $this->registraModeloColaboracionInternacionalProyectos->add($registraModeloColaboracionInternacionalProyecto);
            $registraModeloColaboracionInternacionalProyecto->setUserRegistra($this);
        }

        return $this;
    }

    public function removeRegistraModeloColaboracionInternacionalProyecto(ModeloColaboracionInternacionalProyectos $registraModeloColaboracionInternacionalProyecto): self
    {
        if ($this->registraModeloColaboracionInternacionalProyectos->removeElement($registraModeloColaboracionInternacionalProyecto)) {
            // set the owning side to null (unless already changed)
            if ($registraModeloColaboracionInternacionalProyecto->getUserRegistra() === $this) {
                $registraModeloColaboracionInternacionalProyecto->setUserRegistra(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloColaboracionInternacionalProyectos>
     */
    public function getValidaModeloColaboracionInternacionalProyectos(): Collection
    {
        return $this->validaModeloColaboracionInternacionalProyectos;
    }

    public function addValidaModeloColaboracionInternacionalProyecto(ModeloColaboracionInternacionalProyectos $validaModeloColaboracionInternacionalProyecto): self
    {
        if (!$this->validaModeloColaboracionInternacionalProyectos->contains($validaModeloColaboracionInternacionalProyecto)) {
            $this->validaModeloColaboracionInternacionalProyectos->add($validaModeloColaboracionInternacionalProyecto);
            $validaModeloColaboracionInternacionalProyecto->setUserValida($this);
        }

        return $this;
    }

    public function removeValidaModeloColaboracionInternacionalProyecto(ModeloColaboracionInternacionalProyectos $validaModeloColaboracionInternacionalProyecto): self
    {
        if ($this->validaModeloColaboracionInternacionalProyectos->removeElement($validaModeloColaboracionInternacionalProyecto)) {
            // set the owning side to null (unless already changed)
            if ($validaModeloColaboracionInternacionalProyecto->getUserValida() === $this) {
                $validaModeloColaboracionInternacionalProyecto->setUserValida(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloDefensaSeguridadProteccion>
     */
    public function getRegistraModeloDefensaSeguridadProteccion(): Collection
    {
        return $this->registraModeloDefensaSeguridadProteccion;
    }

    public function addRegistraModeloDefensaSeguridadProteccion(ModeloDefensaSeguridadProteccion $registraModeloDefensaSeguridadProteccion): self
    {
        if (!$this->registraModeloDefensaSeguridadProteccion->contains($registraModeloDefensaSeguridadProteccion)) {
            $this->registraModeloDefensaSeguridadProteccion->add($registraModeloDefensaSeguridadProteccion);
            $registraModeloDefensaSeguridadProteccion->setUserRegistra($this);
        }

        return $this;
    }

    public function removeRegistraModeloDefensaSeguridadProteccion(ModeloDefensaSeguridadProteccion $registraModeloDefensaSeguridadProteccion): self
    {
        if ($this->registraModeloDefensaSeguridadProteccion->removeElement($registraModeloDefensaSeguridadProteccion)) {
            // set the owning side to null (unless already changed)
            if ($registraModeloDefensaSeguridadProteccion->getUserRegistra() === $this) {
                $registraModeloDefensaSeguridadProteccion->setUserRegistra(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloDefensaSeguridadProteccion>
     */
    public function getValidaModeloDefensaSeguridadProteccion(): Collection
    {
        return $this->validaModeloDefensaSeguridadProteccion;
    }

    public function addValidaModeloDefensaSeguridadProteccion(ModeloDefensaSeguridadProteccion $validaModeloDefensaSeguridadProteccion): self
    {
        if (!$this->validaModeloDefensaSeguridadProteccion->contains($validaModeloDefensaSeguridadProteccion)) {
            $this->validaModeloDefensaSeguridadProteccion->add($validaModeloDefensaSeguridadProteccion);
            $validaModeloDefensaSeguridadProteccion->setUserValida($this);
        }

        return $this;
    }

    public function removeValidaModeloDefensaSeguridadProteccion(ModeloDefensaSeguridadProteccion $validaModeloDefensaSeguridadProteccion): self
    {
        if ($this->validaModeloDefensaSeguridadProteccion->removeElement($validaModeloDefensaSeguridadProteccion)) {
            // set the owning side to null (unless already changed)
            if ($validaModeloDefensaSeguridadProteccion->getUserValida() === $this) {
                $validaModeloDefensaSeguridadProteccion->setUserValida(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloDinamicaDemografica>
     */
    public function getRegistraModeloDinamicaDemografica(): Collection
    {
        return $this->registraModeloDinamicaDemografica;
    }

    public function addRegistraModeloDinamicaDemografica(ModeloDinamicaDemografica $registraModeloDinamicaDemografica): self
    {
        if (!$this->registraModeloDinamicaDemografica->contains($registraModeloDinamicaDemografica)) {
            $this->registraModeloDinamicaDemografica->add($registraModeloDinamicaDemografica);
            $registraModeloDinamicaDemografica->setUserRegistra($this);
        }

        return $this;
    }

    public function removeRegistraModeloDinamicaDemografica(ModeloDinamicaDemografica $registraModeloDinamicaDemografica): self
    {
        if ($this->registraModeloDinamicaDemografica->removeElement($registraModeloDinamicaDemografica)) {
            // set the owning side to null (unless already changed)
            if ($registraModeloDinamicaDemografica->getUserRegistra() === $this) {
                $registraModeloDinamicaDemografica->setUserRegistra(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloDinamicaDemografica>
     */
    public function getValidaModeloDinamicaDemografica(): Collection
    {
        return $this->validaModeloDinamicaDemografica;
    }

    public function addValidaModeloDinamicaDemografica(ModeloDinamicaDemografica $validaModeloDinamicaDemografica): self
    {
        if (!$this->validaModeloDinamicaDemografica->contains($validaModeloDinamicaDemografica)) {
            $this->validaModeloDinamicaDemografica->add($validaModeloDinamicaDemografica);
            $validaModeloDinamicaDemografica->setUserValida($this);
        }

        return $this;
    }

    public function removeValidaModeloDinamicaDemografica(ModeloDinamicaDemografica $validaModeloDinamicaDemografica): self
    {
        if ($this->validaModeloDinamicaDemografica->removeElement($validaModeloDinamicaDemografica)) {
            // set the owning side to null (unless already changed)
            if ($validaModeloDinamicaDemografica->getUserValida() === $this) {
                $validaModeloDinamicaDemografica->setUserValida(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloInversiones>
     */
    public function getRegistraModeloInversiones(): Collection
    {
        return $this->registraModeloInversiones;
    }

    public function addRegistraModeloInversione(ModeloInversiones $registraModeloInversione): self
    {
        if (!$this->registraModeloInversiones->contains($registraModeloInversione)) {
            $this->registraModeloInversiones->add($registraModeloInversione);
            $registraModeloInversione->setUserRegistra($this);
        }

        return $this;
    }

    public function removeRegistraModeloInversione(ModeloInversiones $registraModeloInversione): self
    {
        if ($this->registraModeloInversiones->removeElement($registraModeloInversione)) {
            // set the owning side to null (unless already changed)
            if ($registraModeloInversione->getUserRegistra() === $this) {
                $registraModeloInversione->setUserRegistra(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloInversiones>
     */
    public function getValidaModeloInversiones(): Collection
    {
        return $this->validaModeloInversiones;
    }

    public function addValidaModeloInversione(ModeloInversiones $validaModeloInversione): self
    {
        if (!$this->validaModeloInversiones->contains($validaModeloInversione)) {
            $this->validaModeloInversiones->add($validaModeloInversione);
            $validaModeloInversione->setUserValida($this);
        }

        return $this;
    }

    public function removeValidaModeloInversione(ModeloInversiones $validaModeloInversione): self
    {
        if ($this->validaModeloInversiones->removeElement($validaModeloInversione)) {
            // set the owning side to null (unless already changed)
            if ($validaModeloInversione->getUserValida() === $this) {
                $validaModeloInversione->setUserValida(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloInversionesApertura>
     */
    public function getRegistraModeloInversionesApertura(): Collection
    {
        return $this->registraModeloInversionesApertura;
    }

    public function addRegistraModeloInversionesApertura(ModeloInversionesApertura $registraModeloInversionesApertura): self
    {
        if (!$this->registraModeloInversionesApertura->contains($registraModeloInversionesApertura)) {
            $this->registraModeloInversionesApertura->add($registraModeloInversionesApertura);
            $registraModeloInversionesApertura->setUserRegistra($this);
        }

        return $this;
    }

    public function removeRegistraModeloInversionesApertura(ModeloInversionesApertura $registraModeloInversionesApertura): self
    {
        if ($this->registraModeloInversionesApertura->removeElement($registraModeloInversionesApertura)) {
            // set the owning side to null (unless already changed)
            if ($registraModeloInversionesApertura->getUserRegistra() === $this) {
                $registraModeloInversionesApertura->setUserRegistra(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloInversionesApertura>
     */
    public function getValidaModeloInversionesApertura(): Collection
    {
        return $this->validaModeloInversionesApertura;
    }

    public function addValidaModeloInversionesApertura(ModeloInversionesApertura $validaModeloInversionesApertura): self
    {
        if (!$this->validaModeloInversionesApertura->contains($validaModeloInversionesApertura)) {
            $this->validaModeloInversionesApertura->add($validaModeloInversionesApertura);
            $validaModeloInversionesApertura->setUserValida($this);
        }

        return $this;
    }

    public function removeValidaModeloInversionesApertura(ModeloInversionesApertura $validaModeloInversionesApertura): self
    {
        if ($this->validaModeloInversionesApertura->removeElement($validaModeloInversionesApertura)) {
            // set the owning side to null (unless already changed)
            if ($validaModeloInversionesApertura->getUserValida() === $this) {
                $validaModeloInversionesApertura->setUserValida(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloPortadoresCombustible>
     */
    public function getRegistraModeloPortadoresCombustible(): Collection
    {
        return $this->registraModeloPortadoresCombustible;
    }

    public function addRegistraModeloPortadoresCombustible(ModeloPortadoresCombustible $registraModeloPortadoresCombustible): self
    {
        if (!$this->registraModeloPortadoresCombustible->contains($registraModeloPortadoresCombustible)) {
            $this->registraModeloPortadoresCombustible->add($registraModeloPortadoresCombustible);
            $registraModeloPortadoresCombustible->setUserRegistra($this);
        }

        return $this;
    }

    public function removeRegistraModeloPortadoresCombustible(ModeloPortadoresCombustible $registraModeloPortadoresCombustible): self
    {
        if ($this->registraModeloPortadoresCombustible->removeElement($registraModeloPortadoresCombustible)) {
            // set the owning side to null (unless already changed)
            if ($registraModeloPortadoresCombustible->getUserRegistra() === $this) {
                $registraModeloPortadoresCombustible->setUserRegistra(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloPortadoresCombustible>
     */
    public function getValidaModeloPortadoresCombustible(): Collection
    {
        return $this->validaModeloPortadoresCombustible;
    }

    public function addValidaModeloPortadoresCombustible(ModeloPortadoresCombustible $validaModeloPortadoresCombustible): self
    {
        if (!$this->validaModeloPortadoresCombustible->contains($validaModeloPortadoresCombustible)) {
            $this->validaModeloPortadoresCombustible->add($validaModeloPortadoresCombustible);
            $validaModeloPortadoresCombustible->setUserValida($this);
        }

        return $this;
    }

    public function removeValidaModeloPortadoresCombustible(ModeloPortadoresCombustible $validaModeloPortadoresCombustible): self
    {
        if ($this->validaModeloPortadoresCombustible->removeElement($validaModeloPortadoresCombustible)) {
            // set the owning side to null (unless already changed)
            if ($validaModeloPortadoresCombustible->getUserValida() === $this) {
                $validaModeloPortadoresCombustible->setUserValida(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloPortadoresEnergia>
     */
    public function getRegistraModeloPortadoresEnergia(): Collection
    {
        return $this->registraModeloPortadoresEnergia;
    }

    public function addRegistraModeloPortadoresEnergium(ModeloPortadoresEnergia $registraModeloPortadoresEnergium): self
    {
        if (!$this->registraModeloPortadoresEnergia->contains($registraModeloPortadoresEnergium)) {
            $this->registraModeloPortadoresEnergia->add($registraModeloPortadoresEnergium);
            $registraModeloPortadoresEnergium->setUserRegistra($this);
        }

        return $this;
    }

    public function removeRegistraModeloPortadoresEnergium(ModeloPortadoresEnergia $registraModeloPortadoresEnergium): self
    {
        if ($this->registraModeloPortadoresEnergia->removeElement($registraModeloPortadoresEnergium)) {
            // set the owning side to null (unless already changed)
            if ($registraModeloPortadoresEnergium->getUserRegistra() === $this) {
                $registraModeloPortadoresEnergium->setUserRegistra(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloPortadoresEnergia>
     */
    public function getValidaModeloPortadoresEnergia(): Collection
    {
        return $this->validaModeloPortadoresEnergia;
    }

    public function addValidaModeloPortadoresEnergium(ModeloPortadoresEnergia $validaModeloPortadoresEnergium): self
    {
        if (!$this->validaModeloPortadoresEnergia->contains($validaModeloPortadoresEnergium)) {
            $this->validaModeloPortadoresEnergia->add($validaModeloPortadoresEnergium);
            $validaModeloPortadoresEnergium->setUserValida($this);
        }

        return $this;
    }

    public function removeValidaModeloPortadoresEnergium(ModeloPortadoresEnergia $validaModeloPortadoresEnergium): self
    {
        if ($this->validaModeloPortadoresEnergia->removeElement($validaModeloPortadoresEnergium)) {
            // set the owning side to null (unless already changed)
            if ($validaModeloPortadoresEnergium->getUserValida() === $this) {
                $validaModeloPortadoresEnergium->setUserValida(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloPortadoresServicios>
     */
    public function getRegistraModeloPortadoresServicios(): Collection
    {
        return $this->registraModeloPortadoresServicios;
    }

    public function addRegistraModeloPortadoresServicio(ModeloPortadoresServicios $registraModeloPortadoresServicio): self
    {
        if (!$this->registraModeloPortadoresServicios->contains($registraModeloPortadoresServicio)) {
            $this->registraModeloPortadoresServicios->add($registraModeloPortadoresServicio);
            $registraModeloPortadoresServicio->setUserRegistra($this);
        }

        return $this;
    }

    public function removeRegistraModeloPortadoresServicio(ModeloPortadoresServicios $registraModeloPortadoresServicio): self
    {
        if ($this->registraModeloPortadoresServicios->removeElement($registraModeloPortadoresServicio)) {
            // set the owning side to null (unless already changed)
            if ($registraModeloPortadoresServicio->getUserRegistra() === $this) {
                $registraModeloPortadoresServicio->setUserRegistra(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloPortadoresServicios>
     */
    public function getValidaModeloPortadoresServicios(): Collection
    {
        return $this->validaModeloPortadoresServicios;
    }

    public function addValidaModeloPortadoresServicio(ModeloPortadoresServicios $validaModeloPortadoresServicio): self
    {
        if (!$this->validaModeloPortadoresServicios->contains($validaModeloPortadoresServicio)) {
            $this->validaModeloPortadoresServicios->add($validaModeloPortadoresServicio);
            $validaModeloPortadoresServicio->setUserValida($this);
        }

        return $this;
    }

    public function removeValidaModeloPortadoresServicio(ModeloPortadoresServicios $validaModeloPortadoresServicio): self
    {
        if ($this->validaModeloPortadoresServicios->removeElement($validaModeloPortadoresServicio)) {
            // set the owning side to null (unless already changed)
            if ($validaModeloPortadoresServicio->getUserValida() === $this) {
                $validaModeloPortadoresServicio->setUserValida(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloSectorExterno>
     */
    public function getRegistraModeloSectorExterno(): Collection
    {
        return $this->registraModeloSectorExterno;
    }

    public function addRegistraModeloSectorExterno(ModeloSectorExterno $registraModeloSectorExterno): self
    {
        if (!$this->registraModeloSectorExterno->contains($registraModeloSectorExterno)) {
            $this->registraModeloSectorExterno->add($registraModeloSectorExterno);
            $registraModeloSectorExterno->setUserRegistra($this);
        }

        return $this;
    }

    public function removeRegistraModeloSectorExterno(ModeloSectorExterno $registraModeloSectorExterno): self
    {
        if ($this->registraModeloSectorExterno->removeElement($registraModeloSectorExterno)) {
            // set the owning side to null (unless already changed)
            if ($registraModeloSectorExterno->getUserRegistra() === $this) {
                $registraModeloSectorExterno->setUserRegistra(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloSectorExterno>
     */
    public function getValidaModeloSectorExterno(): Collection
    {
        return $this->validaModeloSectorExterno;
    }

    public function addValidaModeloSectorExterno(ModeloSectorExterno $validaModeloSectorExterno): self
    {
        if (!$this->validaModeloSectorExterno->contains($validaModeloSectorExterno)) {
            $this->validaModeloSectorExterno->add($validaModeloSectorExterno);
            $validaModeloSectorExterno->setUserValida($this);
        }

        return $this;
    }

    public function removeValidaModeloSectorExterno(ModeloSectorExterno $validaModeloSectorExterno): self
    {
        if ($this->validaModeloSectorExterno->removeElement($validaModeloSectorExterno)) {
            // set the owning side to null (unless already changed)
            if ($validaModeloSectorExterno->getUserValida() === $this) {
                $validaModeloSectorExterno->setUserValida(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloTransporte>
     */
    public function getRegistraModeloTransporte(): Collection
    {
        return $this->registraModeloTransporte;
    }

    public function addRegistraModeloTransporte(ModeloTransporte $registraModeloTransporte): self
    {
        if (!$this->registraModeloTransporte->contains($registraModeloTransporte)) {
            $this->registraModeloTransporte->add($registraModeloTransporte);
            $registraModeloTransporte->setUserRegistra($this);
        }

        return $this;
    }

    public function removeRegistraModeloTransporte(ModeloTransporte $registraModeloTransporte): self
    {
        if ($this->registraModeloTransporte->removeElement($registraModeloTransporte)) {
            // set the owning side to null (unless already changed)
            if ($registraModeloTransporte->getUserRegistra() === $this) {
                $registraModeloTransporte->setUserRegistra(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ModeloTransporte>
     */
    public function getValidaModeloTransporte(): Collection
    {
        return $this->validaModeloTransporte;
    }

    public function addValidaModeloTransporte(ModeloTransporte $validaModeloTransporte): self
    {
        if (!$this->validaModeloTransporte->contains($validaModeloTransporte)) {
            $this->validaModeloTransporte->add($validaModeloTransporte);
            $validaModeloTransporte->setUserValida($this);
        }

        return $this;
    }

    public function removeValidaModeloTransporte(ModeloTransporte $validaModeloTransporte): self
    {
        if ($this->validaModeloTransporte->removeElement($validaModeloTransporte)) {
            // set the owning side to null (unless already changed)
            if ($validaModeloTransporte->getUserValida() === $this) {
                $validaModeloTransporte->setUserValida(null);
            }
        }

        return $this;
    }
}
