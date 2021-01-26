<?php

namespace App\Repository;

use App\Entity\TbleTransporteur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbleTransporteur|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbleTransporteur|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbleTransporteur[]    findAll()
 * @method TbleTransporteur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbleTransporteurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbleTransporteur::class);
    }

    // /**
    //  * @return TbleTransporteur[] Returns an array of TbleTransporteur objects
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
    public function findOneBySomeField($value): ?TbleTransporteur
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
