<?php

namespace App\Repository;

use App\Entity\Orderstatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Orderstatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method Orderstatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method Orderstatus[]    findAll()
 * @method Orderstatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrderstatusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Orderstatus::class);
    }

    // /**
    //  * @return Orderstatus[] Returns an array of Orderstatus objects
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
    public function findOneBySomeField($value): ?Orderstatus
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
