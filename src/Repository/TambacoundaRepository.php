<?php

namespace App\Repository;

use App\Entity\Tambacounda;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Tambacounda|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tambacounda|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tambacounda[]    findAll()
 * @method Tambacounda[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TambacoundaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Tambacounda::class);
    }

    // /**
    //  * @return Tambacounda[] Returns an array of Tambacounda objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Tambacounda
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
