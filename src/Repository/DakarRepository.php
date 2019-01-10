<?php

namespace App\Repository;

use App\Entity\Dakar;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Dakar|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dakar|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dakar[]    findAll()
 * @method Dakar[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DakarRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Dakar::class);
    }

    // /**
    //  * @return Dakar[] Returns an array of Dakar objects
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
    public function findOneBySomeField($value): ?Dakar
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
