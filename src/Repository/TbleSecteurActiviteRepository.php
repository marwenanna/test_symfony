<?php

namespace App\Repository;

use App\Entity\TbleSecteurActivite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbleSecteurActivite|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbleSecteurActivite|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbleSecteurActivite[]    findAll()
 * @method TbleSecteurActivite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbleSecteurActiviteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbleSecteurActivite::class);
    }

    // /**
    //  * @return TbleSecteurActivite[] Returns an array of TbleSecteurActivite objects
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
    public function findOneBySomeField($value): ?TbleSecteurActivite
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
