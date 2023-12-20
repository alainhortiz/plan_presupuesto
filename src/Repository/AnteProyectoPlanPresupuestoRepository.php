<?php

namespace App\Repository;

use App\Entity\AnteProyectoPlanPresupuesto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AnteProyectoPlanPresupuesto>
 *
 * @method AnteProyectoPlanPresupuesto|null find($id, $lockMode = null, $lockVersion = null)
 * @method AnteProyectoPlanPresupuesto|null findOneBy(array $criteria, array $orderBy = null)
 * @method AnteProyectoPlanPresupuesto[]    findAll()
 * @method AnteProyectoPlanPresupuesto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnteProyectoPlanPresupuestoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AnteProyectoPlanPresupuesto::class);
    }

    public function save(AnteProyectoPlanPresupuesto $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(AnteProyectoPlanPresupuesto $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return AnteProyectoPlanPresupuesto[] Returns an array of AnteProyectoPlanPresupuesto objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?AnteProyectoPlanPresupuesto
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
