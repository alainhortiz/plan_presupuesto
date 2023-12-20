<?php

namespace App\Repository;

use App\Entity\ModeloInversiones;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ModeloInversiones>
 *
 * @method ModeloInversiones|null find($id, $lockMode = null, $lockVersion = null)
 * @method ModeloInversiones|null findOneBy(array $criteria, array $orderBy = null)
 * @method ModeloInversiones[]    findAll()
 * @method ModeloInversiones[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModeloInversionesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ModeloInversiones::class);
    }

    public function save(ModeloInversiones $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ModeloInversiones $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ModeloInversiones[] Returns an array of ModeloInversiones objects
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

//    public function findOneBySomeField($value): ?ModeloInversiones
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
