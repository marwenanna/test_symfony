<?php

namespace App\Repository;

use App\Entity\TbleGovernorat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbleGovernorat|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbleGovernorat|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbleGovernorat[]    findAll()
 * @method TbleGovernorat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbleGovernoratRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbleGovernorat::class);
    }

    // /**
    //  * @return TbleGovernorat[] Returns an array of TbleGovernorat objects
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
    public function findOneBySomeField($value): ?TbleGovernorat
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
