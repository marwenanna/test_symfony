<?php

namespace App\Repository;

use App\Entity\TbleTypeFRS;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbleTypeFRS|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbleTypeFRS|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbleTypeFRS[]    findAll()
 * @method TbleTypeFRS[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbleTypeFRSRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbleTypeFRS::class);
    }

    // /**
    //  * @return TbleTypeFRS[] Returns an array of TbleTypeFRS objects
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
    public function findOneBySomeField($value): ?TbleTypeFRS
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
