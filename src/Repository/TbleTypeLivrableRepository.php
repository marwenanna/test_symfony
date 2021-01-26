<?php

namespace App\Repository;

use App\Entity\TbleTypeLivrable;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbleTypeLivrable|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbleTypeLivrable|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbleTypeLivrable[]    findAll()
 * @method TbleTypeLivrable[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbleTypeLivrableRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbleTypeLivrable::class);
    }

    // /**
    //  * @return TbleTypeLivrable[] Returns an array of TbleTypeLivrable objects
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
    public function findOneBySomeField($value): ?TbleTypeLivrable
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
