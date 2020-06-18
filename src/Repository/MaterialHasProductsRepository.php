<?php

namespace App\Repository;

use App\Entity\MaterialHasProducts;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MaterialHasProducts|null find($id, $lockMode = null, $lockVersion = null)
 * @method MaterialHasProducts|null findOneBy(array $criteria, array $orderBy = null)
 * @method MaterialHasProducts[]    findAll()
 * @method MaterialHasProducts[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MaterialHasProductsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MaterialHasProducts::class);
    }

    // /**
    //  * @return MaterialHasProducts[] Returns an array of MaterialHasProducts objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MaterialHasProducts
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
