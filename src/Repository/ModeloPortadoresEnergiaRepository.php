<?php

namespace App\Repository;

use App\Entity\ModeloPortadoresEnergia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ModeloPortadoresEnergia>
 *
 * @method ModeloPortadoresEnergia|null find($id, $lockMode = null, $lockVersion = null)
 * @method ModeloPortadoresEnergia|null findOneBy(array $criteria, array $orderBy = null)
 * @method ModeloPortadoresEnergia[]    findAll()
 * @method ModeloPortadoresEnergia[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModeloPortadoresEnergiaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ModeloPortadoresEnergia::class);
    }

    public function save(ModeloPortadoresEnergia $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ModeloPortadoresEnergia $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ModeloPortadoresEnergia[] Returns an array of ModeloPortadoresEnergia objects
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

//    public function findOneBySomeField($value): ?ModeloPortadoresEnergia
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
