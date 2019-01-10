<?php

namespace App\Repository;

use App\Entity\Ziguinchor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Ziguinchor|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ziguinchor|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ziguinchor[]    findAll()
 * @method Ziguinchor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ZiguinchorRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Ziguinchor::class);
    }

    // /**
    //  * @return Ziguinchor[] Returns an array of Ziguinchor objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('z')
            ->andWhere('z.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('z.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ziguinchor
    {
        return $this->createQueryBuilder('z')
            ->andWhere('z.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
