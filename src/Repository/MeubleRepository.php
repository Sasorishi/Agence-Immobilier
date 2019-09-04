<?php

namespace App\Repository;

use App\Entity\Meuble;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Meuble|null find($id, $lockMode = null, $lockVersion = null)
 * @method Meuble|null findOneBy(array $criteria, array $orderBy = null)
 * @method Meuble[]    findAll()
 * @method Meuble[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MeubleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Meuble::class);
    }

    // /**
    //  * @return Meuble[] Returns an array of Meuble objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Meuble
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
