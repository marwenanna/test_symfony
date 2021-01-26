<?php

namespace App\Repository;

use App\Entity\TbleDetailCommande;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbleDetailCommande|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbleDetailCommande|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbleDetailCommande[]    findAll()
 * @method TbleDetailCommande[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbleDetailCommandeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbleDetailCommande::class);
    }

    // /**
    //  * @return TbleDetailCommande[] Returns an array of TbleDetailCommande objects
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
    public function findOneBySomeField($value): ?TbleDetailCommande
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
