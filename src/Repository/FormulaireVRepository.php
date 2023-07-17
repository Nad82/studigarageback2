<?php

namespace App\Repository;

use App\Entity\FormulaireV;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FormulaireV>
 *
 * @method FormulaireV|null find($id, $lockMode = null, $lockVersion = null)
 * @method FormulaireV|null findOneBy(array $criteria, array $orderBy = null)
 * @method FormulaireV[]    findAll()
 * @method FormulaireV[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FormulaireVRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FormulaireV::class);
    }

//    /**
//     * @return FormulaireV[] Returns an array of FormulaireV objects
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

//    public function findOneBySomeField($value): ?FormulaireV
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
