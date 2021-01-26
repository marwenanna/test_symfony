<?php

namespace App\Repository;

use App\Entity\TbleFacture1;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbleFacture1|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbleFacture1|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbleFacture1[]    findAll()
 * @method TbleFacture1[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbleFacture1Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbleFacture1::class);
    }

    // /**
    //  * @return TbleFacture1[] Returns an array of TbleFacture1 objects
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
    public function findOneBySomeField($value): ?TbleFacture1
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
