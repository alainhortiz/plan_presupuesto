<?php

namespace App\Repository;

use App\Entity\ModeloColaboracionInternacionalActivosFijos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ModeloColaboracionInternacionalActivosFijos>
 *
 * @method ModeloColaboracionInternacionalActivosFijos|null find($id, $lockMode = null, $lockVersion = null)
 * @method ModeloColaboracionInternacionalActivosFijos|null findOneBy(array $criteria, array $orderBy = null)
 * @method ModeloColaboracionInternacionalActivosFijos[]    findAll()
 * @method ModeloColaboracionInternacionalActivosFijos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModeloColaboracionInternacionalActivosFijosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ModeloColaboracionInternacionalActivosFijos::class);
    }

    public function save(ModeloColaboracionInternacionalActivosFijos $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ModeloColaboracionInternacionalActivosFijos $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ModeloColaboracionInternacionalActivosFijos[] Returns an array of ModeloColaboracionInternacionalActivosFijos objects
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

//    public function findOneBySomeField($value): ?ModeloColaboracionInternacionalActivosFijos
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
