<?php

namespace App\Repository;

use App\Entity\TbleOperationInventaire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbleOperationInventaire|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbleOperationInventaire|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbleOperationInventaire[]    findAll()
 * @method TbleOperationInventaire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbleOperationInventaireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbleOperationInventaire::class);
    }

    // /**
    //  * @return TbleOperationInventaire[] Returns an array of TbleOperationInventaire objects
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
    public function findOneBySomeField($value): ?TbleOperationInventaire
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
