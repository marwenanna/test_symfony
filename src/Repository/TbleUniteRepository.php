<?php

namespace App\Repository;

use App\Entity\TbleUnite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbleUnite|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbleUnite|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbleUnite[]    findAll()
 * @method TbleUnite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbleUniteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbleUnite::class);
    }

    // /**
    //  * @return TbleUnite[] Returns an array of TbleUnite objects
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
    public function findOneBySomeField($value): ?TbleUnite
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
