<?php

namespace App\Repository;

use App\Entity\ModeloNivelActividad;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ModeloNivelActividad>
 *
 * @method ModeloNivelActividad|null find($id, $lockMode = null, $lockVersion = null)
 * @method ModeloNivelActividad|null findOneBy(array $criteria, array $orderBy = null)
 * @method ModeloNivelActividad[]    findAll()
 * @method ModeloNivelActividad[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModeloNivelActividadRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ModeloNivelActividad::class);
    }

    public function save(ModeloNivelActividad $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ModeloNivelActividad $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ModeloNivelActividad[] Returns an array of ModeloNivelActividad objects
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

//    public function findOneBySomeField($value): ?ModeloNivelActividad
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
