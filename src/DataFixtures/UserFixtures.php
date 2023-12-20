<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Repository\EntidadRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private UserPasswordHasherInterface $hasher;
    private EntidadRepository $entidadRepository;

   public function __construct(UserPasswordHasherInterface $hasher, EntidadRepository $entidadRepository)
   {
       $this->hasher = $hasher;
       $this->entidadRepository = $entidadRepository;
   }

    public function load(ObjectManager $manager): void
    {
        $roles = ['ROLE_ADMIN','ROLE_DEMANDA_VISUALIZAR','ROLE_DEMANDA_REGISTRAR','ROLE_DEMANDA_APROBAR'];

        $user = new User();
        $user->setRoles($roles);
        $entidad = $this->entidadRepository->findOneBy(array('centroCosto' => 4051));
        $user->setEntidad($entidad);
        $password = $this->hasher->hashPassword($user,'123456');
        $user->setPassword($password);
        $user->setUsername('system');
        $manager->persist($user);
        $manager->flush();
    }
}
