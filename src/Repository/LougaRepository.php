<?php

namespace App\Repository;

use App\Entity\Louga;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Louga|null find($id, $lockMode = null, $lockVersion = null)
 * @method Louga|null findOneBy(array $criteria, array $orderBy = null)
 * @method Louga[]    findAll()
 * @method Louga[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LougaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Louga::class);
    }

    // /**
    //  * @return Louga[] Returns an array of Louga objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Louga
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
