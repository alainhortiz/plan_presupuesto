<?php

namespace App\DataFixtures;

use App\Entity\Cargo;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CargoFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $data = array(
            array('nombre' => 'Rector'),
            array('nombre' => 'Vicerrector'),
            array('nombre' => 'Director general'),
            array('nombre' => 'Decano'),
            array('nombre' => 'Director'),
            array('nombre' => 'Jefe de departamento'),
            array('nombre' => 'Jefe de grupo'),
            array('nombre' => 'Administrador'),
            array('nombre' => 'Especialista'),
        );

        foreach ($data as $rec) {
            $cargo = new Cargo();
            $cargo->setNombre($rec['nombre']);
            $manager->persist($cargo);
        }

        $manager->flush();
    }
}
