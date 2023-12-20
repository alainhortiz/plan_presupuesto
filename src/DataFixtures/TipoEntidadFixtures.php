<?php

namespace App\DataFixtures;

use App\Entity\TipoEntidad;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TipoEntidadFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $data = array(
            array('nombre' => 'Área Central'),
            array('nombre' => 'Centro'),
            array('nombre' => 'Facultad'),
        );

        foreach ($data as $rec) {
            $tipoEntidad = new TipoEntidad();
            $tipoEntidad->setNombre($rec['nombre']);
            $manager->persist($tipoEntidad);
        }

        $manager->flush();
    }
}
