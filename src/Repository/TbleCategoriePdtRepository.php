<?php

namespace App\Repository;

use App\Entity\TbleCategoriePdt;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbleCategoriePdt|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbleCategoriePdt|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbleCategoriePdt[]    findAll()
 * @method TbleCategoriePdt[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbleCategoriePdtRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbleCategoriePdt::class);
    }

    // /**
    //  * @return TbleCategoriePdt[] Returns an array of TbleCategoriePdt objects
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
    public function findOneBySomeField($value): ?TbleCategoriePdt
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
