<?php

namespace App\Repository;

use App\Entity\OederHasProduckts;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method OederHasProduckts|null find($id, $lockMode = null, $lockVersion = null)
 * @method OederHasProduckts|null findOneBy(array $criteria, array $orderBy = null)
 * @method OederHasProduckts[]    findAll()
 * @method OederHasProduckts[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OederHasProducktsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OederHasProduckts::class);
    }

    // /**
    //  * @return OederHasProduckts[] Returns an array of OederHasProduckts objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?OederHasProduckts
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
