<?php

namespace App\Repository;

use App\Entity\TbleDetailOrdreAchat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbleDetailOrdreAchat|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbleDetailOrdreAchat|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbleDetailOrdreAchat[]    findAll()
 * @method TbleDetailOrdreAchat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbleDetailOrdreAchatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbleDetailOrdreAchat::class);
    }

    // /**
    //  * @return TbleDetailOrdreAchat[] Returns an array of TbleDetailOrdreAchat objects
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
    public function findOneBySomeField($value): ?TbleDetailOrdreAchat
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
