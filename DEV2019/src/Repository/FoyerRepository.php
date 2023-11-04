<?php

namespace App\Repository;

use App\Entity\Foyer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Foyer>
 *
 * @method Foyer|null find($id, $lockMode = null, $lockVersion = null)
 * @method Foyer|null findOneBy(array $criteria, array $orderBy = null)
 * @method Foyer[]    findAll()
 * @method Foyer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FoyerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Foyer::class);
    }

//    /**
//     * @return Foyer[] Returns an array of Foyer objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Foyer
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
