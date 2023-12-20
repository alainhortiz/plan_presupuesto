<?php

namespace App\Repository;

use App\Entity\ModeloDefensaSeguridadProteccion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ModeloDefensaSeguridadProteccion>
 *
 * @method ModeloDefensaSeguridadProteccion|null find($id, $lockMode = null, $lockVersion = null)
 * @method ModeloDefensaSeguridadProteccion|null findOneBy(array $criteria, array $orderBy = null)
 * @method ModeloDefensaSeguridadProteccion[]    findAll()
 * @method ModeloDefensaSeguridadProteccion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModeloDefensaSeguridadProteccionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ModeloDefensaSeguridadProteccion::class);
    }

    public function save(ModeloDefensaSeguridadProteccion $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ModeloDefensaSeguridadProteccion $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ModeloDefensaSeguridadProteccion[] Returns an array of ModeloDefensaSeguridadProteccion objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ModeloDefensaSeguridadProteccion
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
