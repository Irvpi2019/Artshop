<?php

namespace App\Repository;

use App\Entity\ProductHasStyles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProductHasStyles|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductHasStyles|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductHasStyles[]    findAll()
 * @method ProductHasStyles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductHasStylesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductHasStyles::class);
    }

    // /**
    //  * @return ProductHasStyles[] Returns an array of ProductHasStyles objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ProductHasStyles
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
