<?php

namespace App\Repository;

use App\Entity\Diaspora;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Diaspora|null find($id, $lockMode = null, $lockVersion = null)
 * @method Diaspora|null findOneBy(array $criteria, array $orderBy = null)
 * @method Diaspora[]    findAll()
 * @method Diaspora[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DiasporaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Diaspora::class);
    }

    // /**
    //  * @return Diaspora[] Returns an array of Diaspora objects
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
    public function findOneBySomeField($value): ?Diaspora
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
