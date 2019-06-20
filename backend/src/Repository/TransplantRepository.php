<?php

namespace App\Repository;

use App\Entity\Transplant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Transplant|null find($id, $lockMode = null, $lockVersion = null)
 * @method Transplant|null findOneBy(array $criteria, array $orderBy = null)
 * @method Transplant[]    findAll()
 * @method Transplant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TransplantRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Transplant::class);
    }

//    /**
//     * @return Transplant[] Returns an array of Transplant objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Transplant
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
