<?php

namespace App\Repository;

use App\Entity\VoltaireNiveau;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method VoltaireNiveau|null find($id, $lockMode = null, $lockVersion = null)
 * @method VoltaireNiveau|null findOneBy(array $criteria, array $orderBy = null)
 * @method VoltaireNiveau[]    findAll()
 * @method VoltaireNiveau[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VoltaireNiveauRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VoltaireNiveau::class);
    }

    // /**
    //  * @return VoltaireNiveau[] Returns an array of VoltaireNiveau objects
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
    public function findOneBySomeField($value): ?VoltaireNiveau
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
