<?php

namespace App\Repository;

use App\Entity\Sowing;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Sowing|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sowing|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sowing[]    findAll()
 * @method Sowing[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SowingRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Sowing::class);
    }

//    /**
//     * @return Sowing[] Returns an array of Sowing objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Sowing
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
