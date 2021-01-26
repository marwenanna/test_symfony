<?php

namespace App\Repository;

use App\Entity\TbleStatutOrdreAchat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbleStatutOrdreAchat|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbleStatutOrdreAchat|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbleStatutOrdreAchat[]    findAll()
 * @method TbleStatutOrdreAchat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbleStatutOrdreAchatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbleStatutOrdreAchat::class);
    }

    // /**
    //  * @return TbleStatutOrdreAchat[] Returns an array of TbleStatutOrdreAchat objects
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
    public function findOneBySomeField($value): ?TbleStatutOrdreAchat
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
