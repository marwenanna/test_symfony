<?php

namespace App\Repository;

use App\Entity\TblePrivilege;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TblePrivilege|null find($id, $lockMode = null, $lockVersion = null)
 * @method TblePrivilege|null findOneBy(array $criteria, array $orderBy = null)
 * @method TblePrivilege[]    findAll()
 * @method TblePrivilege[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblePrivilegeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TblePrivilege::class);
    }

    // /**
    //  * @return TblePrivilege[] Returns an array of TblePrivilege objects
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
    public function findOneBySomeField($value): ?TblePrivilege
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
