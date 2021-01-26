<?php

namespace App\Repository;

use App\Entity\TbleSettings;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbleSettings|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbleSettings|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbleSettings[]    findAll()
 * @method TbleSettings[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbleSettingsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbleSettings::class);
    }

    // /**
    //  * @return TbleSettings[] Returns an array of TbleSettings objects
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
    public function findOneBySomeField($value): ?TbleSettings
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
