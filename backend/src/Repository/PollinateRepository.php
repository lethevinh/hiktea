<?php

namespace App\Repository;

use App\Entity\Pollinate;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Pollinate|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pollinate|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pollinate[]    findAll()
 * @method Pollinate[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PollinateRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Pollinate::class);
    }

//    /**
//     * @return Pollinate[] Returns an array of Pollinate objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Pollinate
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
