<?php

namespace App\Repository;

use App\Entity\Typemeuble;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Typemeuble|null find($id, $lockMode = null, $lockVersion = null)
 * @method Typemeuble|null findOneBy(array $criteria, array $orderBy = null)
 * @method Typemeuble[]    findAll()
 * @method Typemeuble[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypemeubleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Typemeuble::class);
    }

    // /**
    //  * @return Typemeuble[] Returns an array of Typemeuble objects
    //  */
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
    public function findOneBySomeField($value): ?Typemeuble
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
