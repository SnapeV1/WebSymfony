<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Product>
 *
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

//    /**
//     * @return Product[] Returns an array of Product objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Product
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
public function searchByCriteria(array $criteria): array
{
    $qb = $this->createQueryBuilder('p');

    // Customize the query based on your criteria
    if (!empty($criteria['nom'])) {
        $qb->andWhere('p.nom LIKE :nom')
            ->setParameter('nom', '%' . $criteria['nom'] . '%');
    }

    // Add a condition for the price range if both min and max prices are provided
    if (!empty($criteria['min_price']) && !empty($criteria['max_price'])) {
        $qb->andWhere('p.prix BETWEEN :min_price AND :max_price')
            ->setParameter('min_price', $criteria['min_price'])
            ->setParameter('max_price', $criteria['max_price']);
    }

    // You can add more conditions for other criteria if needed

    return $qb->getQuery()->getResult();
}

}

