<?php

namespace App\Repository;

use App\Entity\VoltaireCritere;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method VoltaireCritere|null find($id, $lockMode = null, $lockVersion = null)
 * @method VoltaireCritere|null findOneBy(array $criteria, array $orderBy = null)
 * @method VoltaireCritere[]    findAll()
 * @method VoltaireCritere[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VoltaireCritereRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VoltaireCritere::class);
    }

    // /**
    //  * @return VoltaireCritere[] Returns an array of VoltaireCritere objects
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
    public function findOneBySomeField($value): ?VoltaireCritere
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
