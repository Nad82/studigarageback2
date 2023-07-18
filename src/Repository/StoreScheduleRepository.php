<?php

namespace App\Repository;

use App\Entity\StoreSchedule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<StoreSchedule>
 *
 * @method StoreSchedule|null find($id, $lockMode = null, $lockVersion = null)
 * @method StoreSchedule|null findOneBy(array $criteria, array $orderBy = null)
 * @method StoreSchedule[]    findAll()
 * @method StoreSchedule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StoreScheduleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StoreSchedule::class);
    }

//    /**
//     * @return StoreSchedule[] Returns an array of StoreSchedule objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?StoreSchedule
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
