<?php

namespace App\Repository;

use App\Entity\TbleProduit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbleProduit|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbleProduit|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbleProduit[]    findAll()
 * @method TbleProduit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbleProduitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbleProduit::class);
    }

    // /**
    //  * @return TbleProduit[] Returns an array of TbleProduit objects
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
    public function findOneBySomeField($value): ?TbleProduit
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
