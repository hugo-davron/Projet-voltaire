<?php

namespace App\Repository;

use App\Entity\VoltaireResultats;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method VoltaireResultats|null find($id, $lockMode = null, $lockVersion = null)
 * @method VoltaireResultats|null findOneBy(array $criteria, array $orderBy = null)
 * @method VoltaireResultats[]    findAll()
 * @method VoltaireResultats[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VoltaireResultatsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VoltaireResultats::class);
    }

    // /**
    //  * @return VoltaireResultats[] Returns an array of VoltaireResultats objects
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
    public function findOneBySomeField($value): ?VoltaireResultats
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
