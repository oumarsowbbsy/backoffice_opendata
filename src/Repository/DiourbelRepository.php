<?php

namespace App\Repository;

use App\Entity\Diourbel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Diourbel|null find($id, $lockMode = null, $lockVersion = null)
 * @method Diourbel|null findOneBy(array $criteria, array $orderBy = null)
 * @method Diourbel[]    findAll()
 * @method Diourbel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DiourbelRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Diourbel::class);
    }

    // /**
    //  * @return Diourbel[] Returns an array of Diourbel objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Diourbel
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
