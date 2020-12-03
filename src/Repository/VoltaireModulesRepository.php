<?php

namespace App\Repository;

use App\Entity\VoltaireModules;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method VoltaireModules|null find($id, $lockMode = null, $lockVersion = null)
 * @method VoltaireModules|null findOneBy(array $criteria, array $orderBy = null)
 * @method VoltaireModules[]    findAll()
 * @method VoltaireModules[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VoltaireModulesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VoltaireModules::class);
    }

    // /**
    //  * @return VoltaireModules[] Returns an array of VoltaireModules objects
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
    public function findOneBySomeField($value): ?VoltaireModules
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
