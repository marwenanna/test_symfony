<?php

namespace App\Repository;

use App\Entity\TbleAlarmesRappelReminders;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TbleAlarmesRappelReminders|null find($id, $lockMode = null, $lockVersion = null)
 * @method TbleAlarmesRappelReminders|null findOneBy(array $criteria, array $orderBy = null)
 * @method TbleAlarmesRappelReminders[]    findAll()
 * @method TbleAlarmesRappelReminders[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbleAlarmesRappelRemindersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TbleAlarmesRappelReminders::class);
    }

    // /**
    //  * @return TbleAlarmesRappelReminders[] Returns an array of TbleAlarmesRappelReminders objects
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
    public function findOneBySomeField($value): ?TbleAlarmesRappelReminders
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
