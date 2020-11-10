<?php

namespace App\Repository;

use App\Entity\VoltaireUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method VoltaireUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method VoltaireUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method VoltaireUser[]    findAll()
 * @method VoltaireUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VoltaireUserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VoltaireUser::class);
    }

    // /**
    //  * @return VoltaireUser[] Returns an array of VoltaireUser objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?VoltaireUser
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
