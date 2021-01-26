<?php

namespace App\Repository;

use App\Entity\TblePoleAffaire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TblePoleAffaire|null find($id, $lockMode = null, $lockVersion = null)
 * @method TblePoleAffaire|null findOneBy(array $criteria, array $orderBy = null)
 * @method TblePoleAffaire[]    findAll()
 * @method TblePoleAffaire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblePoleAffaireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TblePoleAffaire::class);
    }

    // /**
    //  * @return TblePoleAffaire[] Returns an array of TblePoleAffaire objects
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
    public function findOneBySomeField($value): ?TblePoleAffaire
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
