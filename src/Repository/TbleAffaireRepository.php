<?php

namespace App\Repository;

use App\Entity\TbleAffaire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbleAffaire|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbleAffaire|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbleAffaire[]    findAll()
 * @method TbleAffaire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbleAffaireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbleAffaire::class);
    }

    // /**
    //  * @return TbleAffaire[] Returns an array of TbleAffaire objects
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
    public function findOneBySomeField($value): ?TbleAffaire
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
