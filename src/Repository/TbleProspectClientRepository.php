<?php

namespace App\Repository;

use App\Entity\TbleProspectClient;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbleProspectClient|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbleProspectClient|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbleProspectClient[]    findAll()
 * @method TbleProspectClient[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbleProspectClientRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbleProspectClient::class);
    }
    public function findAllVisible():Query
    {

    }

    // /**
    //  * @return TbleProspectClient[] Returns an array of TbleProspectClient objects
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
    public function findOneBySomeField($value): ?TbleProspectClient
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
