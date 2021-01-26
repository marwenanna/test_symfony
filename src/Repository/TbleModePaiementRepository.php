<?php

namespace App\Repository;

use App\Entity\TbleModePaiement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbleModePaiement|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbleModePaiement|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbleModePaiement[]    findAll()
 * @method TbleModePaiement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbleModePaiementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbleModePaiement::class);
    }

    // /**
    //  * @return TbleModePaiement[] Returns an array of TbleModePaiement objects
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
    public function findOneBySomeField($value): ?TbleModePaiement
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
