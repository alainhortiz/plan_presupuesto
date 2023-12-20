<?php

namespace App\Repository;

use App\Entity\ModeloInversionesApertura;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ModeloInversionesApertura>
 *
 * @method ModeloInversionesApertura|null find($id, $lockMode = null, $lockVersion = null)
 * @method ModeloInversionesApertura|null findOneBy(array $criteria, array $orderBy = null)
 * @method ModeloInversionesApertura[]    findAll()
 * @method ModeloInversionesApertura[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModeloInversionesAperturaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ModeloInversionesApertura::class);
    }

    public function save(ModeloInversionesApertura $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ModeloInversionesApertura $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ModeloInversionesApertura[] Returns an array of ModeloInversionesApertura objects
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

//    public function findOneBySomeField($value): ?ModeloInversionesApertura
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
