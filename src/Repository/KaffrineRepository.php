<?php

namespace App\Repository;

use App\Entity\Kaffrine;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Kaffrine|null find($id, $lockMode = null, $lockVersion = null)
 * @method Kaffrine|null findOneBy(array $criteria, array $orderBy = null)
 * @method Kaffrine[]    findAll()
 * @method Kaffrine[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KaffrineRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Kaffrine::class);
    }

    // /**
    //  * @return Kaffrine[] Returns an array of Kaffrine objects
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
    public function findOneBySomeField($value): ?Kaffrine
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
