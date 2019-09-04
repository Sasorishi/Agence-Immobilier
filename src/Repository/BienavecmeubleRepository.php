<?php

namespace App\Repository;

use App\Entity\Bienavecmeuble;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Bienavecmeuble|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bienavecmeuble|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bienavecmeuble[]    findAll()
 * @method Bienavecmeuble[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BienavecmeubleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Bienavecmeuble::class);
    }

    // /**
    //  * @return Bienavecmeuble[] Returns an array of Bienavecmeuble objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Bienavecmeuble
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
