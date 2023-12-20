<?php

namespace App\Repository;

use App\Entity\ModeloPortadoresServicios;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ModeloPortadoresServicios>
 *
 * @method ModeloPortadoresServicios|null find($id, $lockMode = null, $lockVersion = null)
 * @method ModeloPortadoresServicios|null findOneBy(array $criteria, array $orderBy = null)
 * @method ModeloPortadoresServicios[]    findAll()
 * @method ModeloPortadoresServicios[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModeloPortadoresServiciosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ModeloPortadoresServicios::class);
    }

    public function save(ModeloPortadoresServicios $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ModeloPortadoresServicios $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ModeloPortadoresServicios[] Returns an array of ModeloPortadoresServicios objects
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

//    public function findOneBySomeField($value): ?ModeloPortadoresServicios
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
