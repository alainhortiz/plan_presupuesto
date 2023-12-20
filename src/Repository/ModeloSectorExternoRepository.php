<?php

namespace App\Repository;

use App\Entity\ModeloSectorExterno;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ModeloSectorExterno>
 *
 * @method ModeloSectorExterno|null find($id, $lockMode = null, $lockVersion = null)
 * @method ModeloSectorExterno|null findOneBy(array $criteria, array $orderBy = null)
 * @method ModeloSectorExterno[]    findAll()
 * @method ModeloSectorExterno[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModeloSectorExternoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ModeloSectorExterno::class);
    }

    public function save(ModeloSectorExterno $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ModeloSectorExterno $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ModeloSectorExterno[] Returns an array of ModeloSectorExterno objects
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

//    public function findOneBySomeField($value): ?ModeloSectorExterno
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
