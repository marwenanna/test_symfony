<?php

namespace App\Repository;

use App\Entity\TbleFacture;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbleFacture|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbleFacture|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbleFacture[]    findAll()
 * @method TbleFacture[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbleFactureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbleFacture::class);
    }

    // /**
    //  * @return TbleFacture[] Returns an array of TbleFacture objects
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
    public function findOneBySomeField($value): ?TbleFacture
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
