<?php

namespace App\Repository;

use App\Entity\TbleStatutContact;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbleStatutContact|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbleStatutContact|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbleStatutContact[]    findAll()
 * @method TbleStatutContact[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbleStatutContactRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbleStatutContact::class);
    }

    // /**
    //  * @return TbleStatutContact[] Returns an array of TbleStatutContact objects
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
    public function findOneBySomeField($value): ?TbleStatutContact
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
