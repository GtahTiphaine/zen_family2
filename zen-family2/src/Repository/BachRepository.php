<?php

namespace App\Repository;

use App\Entity\Bach;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Bach|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bach|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bach[]    findAll()
 * @method Bach[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BachRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bach::class);
    }

    // /**
    //  * @return Bach[] Returns an array of Bach objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Bach
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
