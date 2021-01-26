<?php

namespace App\Repository;

use App\Entity\TbleLivrableAttendu;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbleLivrableAttendu|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbleLivrableAttendu|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbleLivrableAttendu[]    findAll()
 * @method TbleLivrableAttendu[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbleLivrableAttenduRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbleLivrableAttendu::class);
    }

    // /**
    //  * @return TbleLivrableAttendu[] Returns an array of TbleLivrableAttendu objects
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
    public function findOneBySomeField($value): ?TbleLivrableAttendu
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
