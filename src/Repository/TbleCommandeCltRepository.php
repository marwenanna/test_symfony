<?php

namespace App\Repository;

use App\Entity\TbleCommandeClt;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbleCommandeClt|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbleCommandeClt|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbleCommandeClt[]    findAll()
 * @method TbleCommandeClt[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbleCommandeCltRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbleCommandeClt::class);
    }

    // /**
    //  * @return TbleCommandeClt[] Returns an array of TbleCommandeClt objects
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
    public function findOneBySomeField($value): ?TbleCommandeClt
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
