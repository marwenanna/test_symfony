<?php

namespace App\Repository;

use App\Entity\TblePaiement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TblePaiement|null find($id, $lockMode = null, $lockVersion = null)
 * @method TblePaiement|null findOneBy(array $criteria, array $orderBy = null)
 * @method TblePaiement[]    findAll()
 * @method TblePaiement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblePaiementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TblePaiement::class);
    }

    // /**
    //  * @return TblePaiement[] Returns an array of TblePaiement objects
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
    public function findOneBySomeField($value): ?TblePaiement
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
