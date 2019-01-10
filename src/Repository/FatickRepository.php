<?php

namespace App\Repository;

use App\Entity\Fatick;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Fatick|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fatick|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fatick[]    findAll()
 * @method Fatick[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FatickRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Fatick::class);
    }

    // /**
    //  * @return Fatick[] Returns an array of Fatick objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Fatick
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
