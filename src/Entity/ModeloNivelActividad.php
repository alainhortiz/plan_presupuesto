<?php

namespace App\Entity;

use App\Repository\ModeloNivelActividadRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ModeloNivelActividadRepository::class)]
class ModeloNivelActividad
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = 0;

    #[ORM\Column]
    private ?int $matriculaDiurno = 0;

    #[ORM\Column]
    private ?int $matriculaPreparatoria = 0;

    #[ORM\Column]
    private ?int $matriculaEncuentro = 0;

    #[ORM\Column]
    private ?int $matriculaDistancia = 0;

    #[ORM\Column]
    private ?int $matriculaCicloCorto = 0;

    #[ORM\Column]
    private ?int $nuevoIngresoDiurno = 0;

    #[ORM\Column]
    private ?int $nuevoIngresoEncuentro = 0;

    #[ORM\Column]
    private ?int $nuevoIngresoDistancia = 0;

    #[ORM\Column]
    private ?int $nuevoIngresoCicloCorto = 0;

    #[ORM\Column]
    private ?int $becadosMujeres = 0;

    #[ORM\Column]
    private ?int $becadosCubanos = 0;

    #[ORM\Column]
    private ?int $becadosCubanosMujeres = 0;

    #[ORM\Column]
    private ?int $becadosExtranjeros = 0;

    #[ORM\Column]
    private ?int $becadosExtranjerosMujeres = 0;

    #[ORM\Column]
    private ?int $seminternos = 0;

    #[ORM\Column]
    private ?int $graduadosDiurnos = 0;

    #[ORM\Column]
    private ?int $graduadosEncuentro = 0;

    #[ORM\Column]
    private ?int $graduadosDistancia = 0;

    #[ORM\Column]
    private ?int $graduadosCicloCorto = 0;

    #[ORM\Column]
    private ?int $profesoresPlantilla = 0;

    #[ORM\Column]
    private ?int $profesoresContratados = 0;

    #[ORM\Column]
    private ?int $investigadores = 0;

    #[ORM\Column]
    private ?int $trabajadoresPlantilla = 0;

    #[ORM\Column]
    private ?int $trabajadoresContratados = 0;

    #[ORM\Column]
    private ?int $trabajadoresSustitucion = 0;

    #[ORM\Column]
    private ?int $adiestradosNivelSuperior = 0;

    #[ORM\Column]
    private ?int $adiestradosNivelMedio = 0;

    #[ORM\Column]
    private ?int $eficienciaVertical = 0;

    #[ORM\Column]
    private ?int $eficienciaLimpia = 0;

    #[ORM\ManyToOne(inversedBy: 'modeloNivelActividad')]
    private ?AnteProyectoPlanPresupuesto $anteProyectoPlanPresupuesto = null;

    #[ORM\ManyToOne(inversedBy: 'modeloNivelActividads')]
    private ?Entidad $entidad = null;

    #[ORM\ManyToOne(inversedBy: 'modeloNivelActividads')]
    private ?Estado $estado = null;

    #[ORM\Column]
    private ?int $matriculaTotal;

    #[ORM\Column]
    private ?int $nuevoIngresoTotal;

    #[ORM\Column]
    private ?int $becadosTotal;

    #[ORM\Column]
    private ?int $graduadosTotal;

    #[ORM\Column]
    private ?int $profesoresTotal;

    #[ORM\Column]
    private ?int $trabajadoresTotal;

    #[ORM\Column]
    private ?int $adiestradosTotal = 0;

    #[ORM\ManyToOne(inversedBy: 'registraModeloNivelActividad')]
    private ?User $userRegistra = null;

    #[ORM\ManyToOne(inversedBy: 'validaModeloNivelActividad')]
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

    public function getMatriculaDiurno(): ?int
    {
        return $this->matriculaDiurno;
    }

    public function setMatriculaDiurno(int $matriculaDiurno): self
    {
        $this->matriculaDiurno = $matriculaDiurno;

        return $this;
    }

    public function getMatriculaPreparatoria(): ?int
    {
        return $this->matriculaPreparatoria;
    }

    public function setMatriculaPreparatoria(int $matriculaPreparatoria): self
    {
        $this->matriculaPreparatoria = $matriculaPreparatoria;

        return $this;
    }

    public function getMatriculaEncuentro(): ?int
    {
        return $this->matriculaEncuentro;
    }

    public function setMatriculaEncuentro(int $matriculaEncuentro): self
    {
        $this->matriculaEncuentro = $matriculaEncuentro;

        return $this;
    }

    public function getMatriculaDistancia(): ?int
    {
        return $this->matriculaDistancia;
    }

    public function setMatriculaDistancia(int $matriculaDistancia): self
    {
        $this->matriculaDistancia = $matriculaDistancia;

        return $this;
    }

    public function getMatriculaCicloCorto(): ?int
    {
        return $this->matriculaCicloCorto;
    }

    public function setMatriculaCicloCorto(int $matriculaCicloCorto): self
    {
        $this->matriculaCicloCorto = $matriculaCicloCorto;

        return $this;
    }

    public function getNuevoIngresoDiurno(): ?int
    {
        return $this->nuevoIngresoDiurno;
    }

    public function setNuevoIngresoDiurno(int $nuevoIngresoDiurno): self
    {
        $this->nuevoIngresoDiurno = $nuevoIngresoDiurno;

        return $this;
    }

    public function getNuevoIngresoEncuentro(): ?int
    {
        return $this->nuevoIngresoEncuentro;
    }

    public function setNuevoIngresoEncuentro(int $nuevoIngresoEncuentro): self
    {
        $this->nuevoIngresoEncuentro = $nuevoIngresoEncuentro;

        return $this;
    }

    public function getNuevoIngresoDistancia(): ?int
    {
        return $this->nuevoIngresoDistancia;
    }

    public function setNuevoIngresoDistancia(int $nuevoIngresoDistancia): self
    {
        $this->nuevoIngresoDistancia = $nuevoIngresoDistancia;

        return $this;
    }

    public function getNuevoIngresoCicloCorto(): ?int
    {
        return $this->nuevoIngresoCicloCorto;
    }

    public function setNuevoIngresoCicloCorto(int $nuevoIngresoCicloCorto): self
    {
        $this->nuevoIngresoCicloCorto = $nuevoIngresoCicloCorto;

        return $this;
    }

    public function getBecadosMujeres(): ?int
    {
        return $this->becadosMujeres;
    }

    public function setBecadosMujeres(int $becadosMujeres): self
    {
        $this->becadosMujeres = $becadosMujeres;

        return $this;
    }

    public function getBecadosCubanos(): ?int
    {
        return $this->becadosCubanos;
    }

    public function setBecadosCubanos(int $becadosCubanos): self
    {
        $this->becadosCubanos = $becadosCubanos;

        return $this;
    }

    public function getBecadosCubanosMujeres(): ?int
    {
        return $this->becadosCubanosMujeres;
    }

    public function setBecadosCubanosMujeres(int $becadosCubanosMujeres): self
    {
        $this->becadosCubanosMujeres = $becadosCubanosMujeres;

        return $this;
    }

    public function getBecadosExtranjeros(): ?int
    {
        return $this->becadosExtranjeros;
    }

    public function setBecadosExtranjeros(int $becadosExtranjeros): self
    {
        $this->becadosExtranjeros = $becadosExtranjeros;

        return $this;
    }

    public function getBecadosExtranjerosMujeres(): ?int
    {
        return $this->becadosExtranjerosMujeres;
    }

    public function setBecadosExtranjerosMujeres(int $becadosExtranjerosMujeres): self
    {
        $this->becadosExtranjerosMujeres = $becadosExtranjerosMujeres;

        return $this;
    }

    public function getSeminternos(): ?int
    {
        return $this->seminternos;
    }

    public function setSeminternos(int $seminternos): self
    {
        $this->seminternos = $seminternos;

        return $this;
    }

    public function getGraduadosDiurnos(): ?int
    {
        return $this->graduadosDiurnos;
    }

    public function setGraduadosDiurnos(int $graduadosDiurnos): self
    {
        $this->graduadosDiurnos = $graduadosDiurnos;

        return $this;
    }

    public function getGraduadosEncuentro(): ?int
    {
        return $this->graduadosEncuentro;
    }

    public function setGraduadosEncuentro(int $graduadosEncuentro): self
    {
        $this->graduadosEncuentro = $graduadosEncuentro;

        return $this;
    }

    public function getGraduadosDistancia(): ?int
    {
        return $this->graduadosDistancia;
    }

    public function setGraduadosDistancia(int $graduadosDistancia): self
    {
        $this->graduadosDistancia = $graduadosDistancia;

        return $this;
    }

    public function getGraduadosCicloCorto(): ?int
    {
        return $this->graduadosCicloCorto;
    }

    public function setGraduadosCicloCorto(int $graduadosCicloCorto): self
    {
        $this->graduadosCicloCorto = $graduadosCicloCorto;

        return $this;
    }

    public function getProfesoresPlantilla(): ?int
    {
        return $this->profesoresPlantilla;
    }

    public function setProfesoresPlantilla(int $profesoresPlantilla): self
    {
        $this->profesoresPlantilla = $profesoresPlantilla;

        return $this;
    }

    public function getProfesoresContratados(): ?int
    {
        return $this->profesoresContratados;
    }

    public function setProfesoresContratados(int $profesoresContratados): self
    {
        $this->profesoresContratados = $profesoresContratados;

        return $this;
    }

    public function getInvestigadores(): ?int
    {
        return $this->investigadores;
    }

    public function setInvestigadores(int $investigadores): self
    {
        $this->investigadores = $investigadores;

        return $this;
    }

    public function getTrabajadoresPlantilla(): ?int
    {
        return $this->trabajadoresPlantilla;
    }

    public function setTrabajadoresPlantilla(int $trabajadoresPlantilla): self
    {
        $this->trabajadoresPlantilla = $trabajadoresPlantilla;

        return $this;
    }

    public function getTrabajadoresContratados(): ?int
    {
        return $this->trabajadoresContratados;
    }

    public function setTrabajadoresContratados(int $trabajadoresContratados): self
    {
        $this->trabajadoresContratados = $trabajadoresContratados;

        return $this;
    }

    public function getTrabajadoresSustitucion(): ?int
    {
        return $this->trabajadoresSustitucion;
    }

    public function setTrabajadoresSustitucion(int $trabajadoresSustitucion): self
    {
        $this->trabajadoresSustitucion = $trabajadoresSustitucion;

        return $this;
    }

    public function getAdiestradosNivelSuperior(): ?int
    {
        return $this->adiestradosNivelSuperior;
    }

    public function setAdiestradosNivelSuperior(int $adiestradosNivelSuperior): self
    {
        $this->adiestradosNivelSuperior = $adiestradosNivelSuperior;

        return $this;
    }

    public function getAdiestradosNivelMedio(): ?int
    {
        return $this->adiestradosNivelMedio;
    }

    public function setAdiestradosNivelMedio(int $adiestradosNivelMedio): self
    {
        $this->adiestradosNivelMedio = $adiestradosNivelMedio;

        return $this;
    }

    public function getEficienciaVertical(): ?int
    {
        return $this->eficienciaVertical;
    }

    public function setEficienciaVertical(int $eficienciaVertical): self
    {
        $this->eficienciaVertical = $eficienciaVertical;

        return $this;
    }

    public function getEficienciaLimpia(): ?int
    {
        return $this->eficienciaLimpia;
    }

    public function setEficienciaLimpia(int $eficienciaLimpia): self
    {
        $this->eficienciaLimpia = $eficienciaLimpia;

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

    public function getMatriculaTotal(): ?int
    {
        return $this->matriculaDiurno + $this->matriculaEncuentro + $this->matriculaDistancia + $this->matriculaCicloCorto;
    }

    public function getNuevoIngresoTotal(): ?int
    {
        return $this->nuevoIngresoDiurno + $this->nuevoIngresoEncuentro + $this->nuevoIngresoDistancia + $this->nuevoIngresoCicloCorto;
    }

    public function getBecadosTotal(): ?int
    {
        return $this->becadosCubanos + $this->becadosExtranjeros;
    }

    public function getGraduadosTotal(): ?int
    {
        return $this->graduadosDiurnos + $this->graduadosEncuentro + $this->graduadosDistancia + $this->graduadosCicloCorto;
    }

    public function getProfesoresTotal(): ?int
    {
        return $this->profesoresPlantilla + $this->profesoresContratados;
    }

    public function getTrabajadoresTotal(): ?int
    {
        return $this->trabajadoresPlantilla + $this->trabajadoresContratados + $this->adiestradosTotal;
    }

    public function getAdiestradosTotal(): ?int
    {
        return $this->adiestradosNivelSuperior + $this->adiestradosNivelMedio;
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
