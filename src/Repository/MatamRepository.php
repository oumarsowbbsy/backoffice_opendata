<?php

namespace App\Repository;

use App\Entity\Matam;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Matam|null find($id, $lockMode = null, $lockVersion = null)
 * @method Matam|null findOneBy(array $criteria, array $orderBy = null)
 * @method Matam[]    findAll()
 * @method Matam[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MatamRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Matam::class);
    }

    // /**
    //  * @return Matam[] Returns an array of Matam objects
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
    public function findOneBySomeField($value): ?Matam
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
