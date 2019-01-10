<?php

namespace App\Repository;

use App\Entity\Kedougou;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Kedougou|null find($id, $lockMode = null, $lockVersion = null)
 * @method Kedougou|null findOneBy(array $criteria, array $orderBy = null)
 * @method Kedougou[]    findAll()
 * @method Kedougou[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KedougouRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Kedougou::class);
    }

    // /**
    //  * @return Kedougou[] Returns an array of Kedougou objects
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
    public function findOneBySomeField($value): ?Kedougou
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
