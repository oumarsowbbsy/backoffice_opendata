<?php

namespace App\Repository;

use App\Entity\Kolda;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Kolda|null find($id, $lockMode = null, $lockVersion = null)
 * @method Kolda|null findOneBy(array $criteria, array $orderBy = null)
 * @method Kolda[]    findAll()
 * @method Kolda[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KoldaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Kolda::class);
    }

    // /**
    //  * @return Kolda[] Returns an array of Kolda objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('k.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Kolda
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
