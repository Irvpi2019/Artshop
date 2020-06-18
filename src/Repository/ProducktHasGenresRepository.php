<?php

namespace App\Repository;

use App\Entity\ProducktHasGenres;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProducktHasGenres|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProducktHasGenres|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProducktHasGenres[]    findAll()
 * @method ProducktHasGenres[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProducktHasGenresRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProducktHasGenres::class);
    }

    // /**
    //  * @return ProducktHasGenres[] Returns an array of ProducktHasGenres objects
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
    public function findOneBySomeField($value): ?ProducktHasGenres
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
