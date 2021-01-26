<?php

namespace App\Repository;

use App\Entity\TbleConge;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbleConge|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbleConge|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbleConge[]    findAll()
 * @method TbleConge[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbleCongeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbleConge::class);
    }

    // /**
    //  * @return TbleConge[] Returns an array of TbleConge objects
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
    public function findOneBySomeField($value): ?TbleConge
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
