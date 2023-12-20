<?php

namespace App\Repository;

use App\Entity\ModeloColaboracionInternacionalProyectos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ModeloColaboracionInternacionalProyectos>
 *
 * @method ModeloColaboracionInternacionalProyectos|null find($id, $lockMode = null, $lockVersion = null)
 * @method ModeloColaboracionInternacionalProyectos|null findOneBy(array $criteria, array $orderBy = null)
 * @method ModeloColaboracionInternacionalProyectos[]    findAll()
 * @method ModeloColaboracionInternacionalProyectos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModeloColaboracionInternacionalProyectosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ModeloColaboracionInternacionalProyectos::class);
    }

    public function save(ModeloColaboracionInternacionalProyectos $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ModeloColaboracionInternacionalProyectos $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ModeloColaboracionInternacionalProyectos[] Returns an array of ModeloColaboracionInternacionalProyectos objects
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

//    public function findOneBySomeField($value): ?ModeloColaboracionInternacionalProyectos
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
