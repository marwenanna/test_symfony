<?php

namespace App\Repository;

use App\Entity\TbleEmploye1;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbleEmploye1|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbleEmploye1|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbleEmploye1[]    findAll()
 * @method TbleEmploye1[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbleEmploye1Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbleEmploye1::class);
    }

    // /**
    //  * @return TbleEmploye1[] Returns an array of TbleEmploye1 objects
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
    public function findOneBySomeField($value): ?TbleEmploye1
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
