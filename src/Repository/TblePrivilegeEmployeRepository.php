<?php

namespace App\Repository;

use App\Entity\TblePrivilegeEmploye;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TblePrivilegeEmploye|null find($id, $lockMode = null, $lockVersion = null)
 * @method TblePrivilegeEmploye|null findOneBy(array $criteria, array $orderBy = null)
 * @method TblePrivilegeEmploye[]    findAll()
 * @method TblePrivilegeEmploye[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblePrivilegeEmployeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TblePrivilegeEmploye::class);
    }

    // /**
    //  * @return TblePrivilegeEmploye[] Returns an array of TblePrivilegeEmploye objects
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
    public function findOneBySomeField($value): ?TblePrivilegeEmploye
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
