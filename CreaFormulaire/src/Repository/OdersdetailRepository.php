<?php

namespace App\Repository;

use App\Entity\Odersdetail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Odersdetail|null find($id, $lockMode = null, $lockVersion = null)
 * @method Odersdetail|null findOneBy(array $criteria, array $orderBy = null)
 * @method Odersdetail[]    findAll()
 * @method Odersdetail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OdersdetailRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Odersdetail::class);
    }

    // /**
    //  * @return Odersdetail[] Returns an array of Odersdetail objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Odersdetail
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
