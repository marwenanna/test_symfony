<?php

namespace App\Repository;

use App\Entity\TbleEmploye2;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbleEmploye2|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbleEmploye2|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbleEmploye2[]    findAll()
 * @method TbleEmploye2[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbleEmploye2Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbleEmploye2::class);
    }

    // /**
    //  * @return TbleEmploye2[] Returns an array of TbleEmploye2 objects
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
    public function findOneBySomeField($value): ?TbleEmploye2
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
