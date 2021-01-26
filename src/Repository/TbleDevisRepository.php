<?php

namespace App\Repository;

use App\Entity\TbleDevis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbleDevis|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbleDevis|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbleDevis[]    findAll()
 * @method TbleDevis[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbleDevisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbleDevis::class);
    }

    // /**
    //  * @return TbleDevis[] Returns an array of TbleDevis objects
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
    public function findOneBySomeField($value): ?TbleDevis
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
