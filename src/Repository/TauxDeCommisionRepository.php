<?php

namespace App\Repository;

use App\Entity\TauxDeCommision;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TauxDeCommision|null find($id, $lockMode = null, $lockVersion = null)
 * @method TauxDeCommision|null findOneBy(array $criteria, array $orderBy = null)
 * @method TauxDeCommision[]    findAll()
 * @method TauxDeCommision[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TauxDeCommisionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TauxDeCommision::class);
    }

    // /**
    //  * @return TauxDeCommision[] Returns an array of TauxDeCommision objects
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
    public function findOneBySomeField($value): ?TauxDeCommision
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
