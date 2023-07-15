<?php

namespace App\Repository;

use App\Entity\FormulaireG;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FormulaireG>
 *
 * @method FormulaireG|null find($id, $lockMode = null, $lockVersion = null)
 * @method FormulaireG|null findOneBy(array $criteria, array $orderBy = null)
 * @method FormulaireG[]    findAll()
 * @method FormulaireG[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FormulaireGRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FormulaireG::class);
    }

//    /**
//     * @return FormulaireG[] Returns an array of FormulaireG objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?FormulaireG
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
