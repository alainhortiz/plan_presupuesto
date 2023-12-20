<?php

namespace App\DataFixtures;

use App\Entity\Entidad;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Repository\TipoEntidadRepository;

class EntidadFixtures extends Fixture
{
    private TipoEntidadRepository $tipoEntidadRepository;

    public function __construct(TipoEntidadRepository $tipoEntidadRepository)
    {
        $this->tipoEntidadRepository = $tipoEntidadRepository;
    }

    public function load(ObjectManager $manager): void
    {
        $areaCentral = $this->tipoEntidadRepository->findOneBy(array('nombre' => 'Área Central'));
        $centro = $this->tipoEntidadRepository->findOneBy(array('nombre' => 'Centro'));
        $facultad = $this->tipoEntidadRepository->findOneBy(array('nombre' => 'Facultad'));

        $dataArea = array(
            array('centroCosto' => '1001', 'nombre' => 'Rectorado', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '1050', 'nombre' => 'Vicerrectoría primera (Formación)', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '1003', 'nombre' => 'Vicerrectoría', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '1027', 'nombre' => 'Vicerrectoría Extensión Universitaria', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '1005', 'nombre' => 'Vicerrectoría Investigación y Posgrado', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '1038', 'nombre' => 'Vicerrectoría Transformación digital', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '1002', 'nombre' => 'Secretaría General', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '4051', 'nombre' => 'Dirección General de Planificación y Contabilidad y Finanzas', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '4067', 'nombre' => 'Dirección General de Residencias Estudiantiles', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '5521', 'nombre' => 'Departamento de Organización Institucional', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '4113', 'nombre' => 'Dirección de Cuadros', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '4221', 'nombre' => 'Dirección de Auditoría', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '4110', 'nombre' => 'Dirección Jurídica', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '4190', 'nombre' => 'Dirección de Marxismo', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '4058', 'nombre' => 'Departamento Archivo Central', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '4248', 'nombre' => 'Dirección de Ingreso de La Habana', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '4001', 'nombre' => 'Dirección de Recursos Humanos', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '4040', 'nombre' => 'Dirección de Servicios Técnicos', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '5522', 'nombre' => 'Colegio Universitario', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '4061', 'nombre' => 'Dirección de Formación de Pregrado ', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '5007', 'nombre' => 'Departamento Docente de Enseñanza Militar', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '4050', 'nombre' => 'Dirección de Contabilidad y finanzas', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '4009', 'nombre' => 'Dirección de Economía', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '4063', 'nombre' => 'Dirección de Planificación y Estadística', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '4262', 'nombre' => 'Dirección de Calidad y Desarrollo', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '4056', 'nombre' => 'Dirección de Cultura Física y Deporte SEDER', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '4053', 'nombre' => 'Dirección Extensión Universitaria', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '4045', 'nombre' => 'Dirección de Educación de Posgrado', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '4046', 'nombre' => 'Dirección de Ciencia, Tecnología e Innovación', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '4105', 'nombre' => 'Dirección de Publicaciones Académicas', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '4008', 'nombre' => 'Dirección de Información Científico-Técnica DICT', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '4010', 'nombre' => 'Dirección de Relaciones Internacionales', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '4153', 'nombre' => 'Dirección de Comunicación Institucional', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '4152', 'nombre' => 'Dirección de Patrimonio Cultural Universitario', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '4261', 'nombre' => 'Dirección de Eventos Culturales', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '4260', 'nombre' => 'Dirección de Innovación Tecnológica', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '4259', 'nombre' => 'Dirección de Infraestructura', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '4258', 'nombre' => 'Dirección de Seguridad Informática', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '4068', 'nombre' => 'Dirección Residencia Estudiantil 12 y malecón', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '4069', 'nombre' => 'Dirección Residencia Estudiantil F y 3ra.', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '4070', 'nombre' => 'Dirección Residencia Estudiantil Alamar VI', 'tipoEntidad' => $areaCentral, 'demanda' => true),
            array('centroCosto' => '4072', 'nombre' => 'Dirección Residencia Estudiantil Bahía', 'tipoEntidad' => $areaCentral, 'demanda' => true),
        );

        $dataCentro = array(
            array('centroCosto' => '3056', 'nombre' => 'Centro de Estudios Facultad Latinoamericana de Ciencias Sociales (FLACSO)', 'tipoEntidad' => $centro, 'demanda' => true),
            array('centroCosto' => '3048', 'nombre' => 'Centro de Estudios de Perfeccionamiento de la Educación Superior (CEPES)', 'tipoEntidad' => $centro, 'demanda' => true),
            array('centroCosto' => '3057', 'nombre' => 'Instituto de Ciencia y Tecnología de Materiales (IMRE)', 'tipoEntidad' => $centro, 'demanda' => true),
            array('centroCosto' => '3042', 'nombre' => 'Centro de Biomateriales', 'tipoEntidad' => $centro, 'demanda' => true),
            array('centroCosto' => '3051', 'nombre' => 'Centro de Estudios Hemisféricos sobre Estados Unidos (CEHSEU)', 'tipoEntidad' => $centro, 'demanda' => true),
            array('centroCosto' => '3054', 'nombre' => 'Centro de Investigación de Economía Internacional (CIEI)', 'tipoEntidad' => $centro, 'demanda' => true),
            array('centroCosto' => '3044', 'nombre' => 'Centro de Estudios Demográficos (CEDEM)', 'tipoEntidad' => $centro, 'demanda' => true),
            array('centroCosto' => '3045', 'nombre' => 'Centro de Estudios de la Economía Cubana (CEEC)', 'tipoEntidad' => $centro, 'demanda' => true),
            array('centroCosto' => '3043', 'nombre' => 'Centro de Estudios de Administración Pública (CEAP)', 'tipoEntidad' => $centro, 'demanda' => true),
            array('centroCosto' => '3052', 'nombre' => 'Centro de Estudios sobre Técnicas de Dirección (CETED)', 'tipoEntidad' => $centro, 'demanda' => true),
            array('centroCosto' => '3055', 'nombre' => 'Centro de Investigaciones Marinas (CIM)', 'tipoEntidad' => $centro, 'demanda' => true),
            array('centroCosto' => '4062', 'nombre' => 'Instituto Confucio', 'tipoEntidad' => $centro, 'demanda' => true),
            array('centroCosto' => '3084', 'nombre' => 'Criptografía (Matemática)', 'tipoEntidad' => $centro, 'demanda' => false),
            array('centroCosto' => '3049', 'nombre' => 'Centro de Estudios de Productos Naturales CEPN (Química)', 'tipoEntidad' => $centro, 'demanda' => false),
            array('centroCosto' => '3108', 'nombre' => 'Centro de Estudios de Sistemas Complejos (Física)', 'tipoEntidad' => $centro, 'demanda' => false),
            array('centroCosto' => '3111', 'nombre' => 'Centro de Estudios de Gobierno Digital (Comunicación)', 'tipoEntidad' => $centro, 'demanda' => false),

        );

        $dataFacultad = array(
            array('centroCosto' => '2046', 'nombre' => 'Facultad de Turismo', 'tipoEntidad' => $facultad, 'demanda' => true),
            array('centroCosto' => '2042', 'nombre' => 'Facultad de Economía', 'tipoEntidad' => $facultad, 'demanda' => true),
            array('centroCosto' => '2026', 'nombre' => 'Facultad de Contabilidad y Finanzas', 'tipoEntidad' => $facultad, 'demanda' => true),
            array('centroCosto' => '2010', 'nombre' => 'Facultad de Matemática-Computación', 'tipoEntidad' => $facultad, 'demanda' => true),
            array('centroCosto' => '2047', 'nombre' => 'Facultad de Química', 'tipoEntidad' => $facultad, 'demanda' => true),
            array('centroCosto' => '2044', 'nombre' => 'Facultad de Física', 'tipoEntidad' => $facultad, 'demanda' => true),
            array('centroCosto' => '2041', 'nombre' => 'Facultad de Biología', 'tipoEntidad' => $facultad, 'demanda' => true),
            array('centroCosto' => '2045', 'nombre' => 'Facultad de Geografía', 'tipoEntidad' => $facultad, 'demanda' => true),
            array('centroCosto' => '2043', 'nombre' => 'Facultad de Filosofía e Historia', 'tipoEntidad' => $facultad, 'demanda' => true),
            array('centroCosto' => '2002', 'nombre' => 'Facultad de Derecho', 'tipoEntidad' => $facultad, 'demanda' => true),
            array('centroCosto' => '2036', 'nombre' => 'Facultad de Psicología', 'tipoEntidad' => $facultad, 'demanda' => true),
            array('centroCosto' => '2040', 'nombre' => 'Facultad de Artes y Letras', 'tipoEntidad' => $facultad, 'demanda' => true),
            array('centroCosto' => '2029', 'nombre' => 'Facultad de Lenguas Extranjeras', 'tipoEntidad' => $facultad, 'demanda' => true),
            array('centroCosto' => '2030', 'nombre' => 'Facultad de Comunicación', 'tipoEntidad' => $facultad, 'demanda' => true),
            array('centroCosto' => '2049', 'nombre' => 'Facultad de Lengua Española para no Hispanohablantes (FENHI)', 'tipoEntidad' => $facultad, 'demanda' => true),
            array('centroCosto' => '2101', 'nombre' => 'Facultad Preparatoria de Idiomas', 'tipoEntidad' => $facultad, 'demanda' => true),
        );

        foreach ($dataArea as $rec) {
            $tipoEntidad = new Entidad();
            $tipoEntidad->setCentroCosto($rec['centroCosto']);
            $tipoEntidad->setNombre($rec['nombre']);
            $tipoEntidad->setTipoEntidad($rec['tipoEntidad']);
            $tipoEntidad->setDemanda($rec['demanda']);
            $manager->persist($tipoEntidad);
        }

        foreach ($dataCentro as $rec) {
            $tipoEntidad = new Entidad();
            $tipoEntidad->setCentroCosto($rec['centroCosto']);
            $tipoEntidad->setNombre($rec['nombre']);
            $tipoEntidad->setTipoEntidad($rec['tipoEntidad']);
            $tipoEntidad->setDemanda($rec['demanda']);
            $manager->persist($tipoEntidad);
        }

        foreach ($dataFacultad as $rec) {
            $tipoEntidad = new Entidad();
            $tipoEntidad->setCentroCosto($rec['centroCosto']);
            $tipoEntidad->setNombre($rec['nombre']);
            $tipoEntidad->setTipoEntidad($rec['tipoEntidad']);
            $tipoEntidad->setDemanda($rec['demanda']);
            $manager->persist($tipoEntidad);
        }

        $manager->flush();
    }
}
