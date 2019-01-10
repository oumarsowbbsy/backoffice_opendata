<?php

namespace App\Repository;

use App\Entity\SaintLouis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SaintLouis|null find($id, $lockMode = null, $lockVersion = null)
 * @method SaintLouis|null findOneBy(array $criteria, array $orderBy = null)
 * @method SaintLouis[]    findAll()
 * @method SaintLouis[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SaintLouisRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SaintLouis::class);
    }

    // /**
    //  * @return SaintLouis[] Returns an array of SaintLouis objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SaintLouis
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
