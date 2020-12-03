<?php

namespace App\Repository;

use App\Entity\VoltaireBareme;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method VoltaireBareme|null find($id, $lockMode = null, $lockVersion = null)
 * @method VoltaireBareme|null findOneBy(array $criteria, array $orderBy = null)
 * @method VoltaireBareme[]    findAll()
 * @method VoltaireBareme[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VoltaireBaremeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VoltaireBareme::class);
    }

    // /**
    //  * @return VoltaireBareme[] Returns an array of VoltaireBareme objects
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
    public function findOneBySomeField($value): ?VoltaireBareme
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
