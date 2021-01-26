<?php

namespace App\Repository;

use App\Entity\TbleDepenses;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbleDepenses|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbleDepenses|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbleDepenses[]    findAll()
 * @method TbleDepenses[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbleDepensesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbleDepenses::class);
    }

    // /**
    //  * @return TbleDepenses[] Returns an array of TbleDepenses objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TbleDepenses
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
