<?php

namespace App\Repository;

use App\Entity\ModeloPortadoresCombustible;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ModeloPortadoresCombustible>
 *
 * @method ModeloPortadoresCombustible|null find($id, $lockMode = null, $lockVersion = null)
 * @method ModeloPortadoresCombustible|null findOneBy(array $criteria, array $orderBy = null)
 * @method ModeloPortadoresCombustible[]    findAll()
 * @method ModeloPortadoresCombustible[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModeloPortadoresCombustibleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ModeloPortadoresCombustible::class);
    }

    public function save(ModeloPortadoresCombustible $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ModeloPortadoresCombustible $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ModeloPortadoresCombustible[] Returns an array of ModeloPortadoresCombustible objects
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

//    public function findOneBySomeField($value): ?ModeloPortadoresCombustible
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
