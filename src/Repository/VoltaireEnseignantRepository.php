<?php

namespace App\Repository;

use App\Entity\VoltaireEnseignant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method VoltaireEnseignant|null find($id, $lockMode = null, $lockVersion = null)
 * @method VoltaireEnseignant|null findOneBy(array $criteria, array $orderBy = null)
 * @method VoltaireEnseignant[]    findAll()
 * @method VoltaireEnseignant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VoltaireEnseignantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VoltaireEnseignant::class);
    }

    // /**
    //  * @return VoltaireEnseignant[] Returns an array of VoltaireEnseignant objects
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
    public function findOneBySomeField($value): ?VoltaireEnseignant
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
