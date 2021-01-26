<?php

namespace App\Repository;

use App\Entity\TblePaiementFRS;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TblePaiementFRS|null find($id, $lockMode = null, $lockVersion = null)
 * @method TblePaiementFRS|null findOneBy(array $criteria, array $orderBy = null)
 * @method TblePaiementFRS[]    findAll()
 * @method TblePaiementFRS[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblePaiementFRSRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TblePaiementFRS::class);
    }

    // /**
    //  * @return TblePaiementFRS[] Returns an array of TblePaiementFRS objects
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
    public function findOneBySomeField($value): ?TblePaiementFRS
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
