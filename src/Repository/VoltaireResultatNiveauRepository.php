<?php

namespace App\Repository;

use App\Entity\VoltaireResultatNiveau;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method VoltaireResultatNiveau|null find($id, $lockMode = null, $lockVersion = null)
 * @method VoltaireResultatNiveau|null findOneBy(array $criteria, array $orderBy = null)
 * @method VoltaireResultatNiveau[]    findAll()
 * @method VoltaireResultatNiveau[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VoltaireResultatNiveauRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VoltaireResultatNiveau::class);
    }

    // /**
    //  * @return VoltaireResultatNiveau[] Returns an array of VoltaireResultatNiveau objects
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
    public function findOneBySomeField($value): ?VoltaireResultatNiveau
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
