<?php

namespace App\Repository;

use App\Entity\Kaolack;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Kaolack|null find($id, $lockMode = null, $lockVersion = null)
 * @method Kaolack|null findOneBy(array $criteria, array $orderBy = null)
 * @method Kaolack[]    findAll()
 * @method Kaolack[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KaolackRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Kaolack::class);
    }

    // /**
    //  * @return Kaolack[] Returns an array of Kaolack objects
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
    public function findOneBySomeField($value): ?Kaolack
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
