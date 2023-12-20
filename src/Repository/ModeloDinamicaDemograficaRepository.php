<?php

namespace App\Repository;

use App\Entity\ModeloDinamicaDemografica;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ModeloDinamicaDemografica>
 *
 * @method ModeloDinamicaDemografica|null find($id, $lockMode = null, $lockVersion = null)
 * @method ModeloDinamicaDemografica|null findOneBy(array $criteria, array $orderBy = null)
 * @method ModeloDinamicaDemografica[]    findAll()
 * @method ModeloDinamicaDemografica[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModeloDinamicaDemograficaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ModeloDinamicaDemografica::class);
    }

    public function save(ModeloDinamicaDemografica $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ModeloDinamicaDemografica $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ModeloDinamicaDemografica[] Returns an array of ModeloDinamicaDemografica objects
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

//    public function findOneBySomeField($value): ?ModeloDinamicaDemografica
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
