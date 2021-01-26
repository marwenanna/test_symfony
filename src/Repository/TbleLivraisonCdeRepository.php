<?php

namespace App\Repository;

use App\Entity\TbleLivraisonCde;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbleLivraisonCde|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbleLivraisonCde|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbleLivraisonCde[]    findAll()
 * @method TbleLivraisonCde[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbleLivraisonCdeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbleLivraisonCde::class);
    }

    // /**
    //  * @return TbleLivraisonCde[] Returns an array of TbleLivraisonCde objects
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
    public function findOneBySomeField($value): ?TbleLivraisonCde
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
