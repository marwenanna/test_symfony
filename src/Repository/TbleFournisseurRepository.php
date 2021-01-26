<?php

namespace App\Repository;

use App\Entity\TbleFournisseur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbleFournisseur|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbleFournisseur|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbleFournisseur[]    findAll()
 * @method TbleFournisseur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbleFournisseurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbleFournisseur::class);
    }

    // /**
    //  * @return TbleFournisseur[] Returns an array of TbleFournisseur objects
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
    public function findOneBySomeField($value): ?TbleFournisseur
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
