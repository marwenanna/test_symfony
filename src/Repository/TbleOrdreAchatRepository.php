<?php

namespace App\Repository;

use App\Entity\TbleOrdreAchat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbleOrdreAchat|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbleOrdreAchat|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbleOrdreAchat[]    findAll()
 * @method TbleOrdreAchat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbleOrdreAchatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbleOrdreAchat::class);
    }

    // /**
    //  * @return TbleOrdreAchat[] Returns an array of TbleOrdreAchat objects
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
    public function findOneBySomeField($value): ?TbleOrdreAchat
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
