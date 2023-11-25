<?php

namespace App\Repository;

use App\Entity\Conversation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Conversation>
 *
 * @method Conversation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Conversation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Conversation[]    findAll()
 * @method Conversation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConversationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Conversation::class);
    }

//    /**
//     * @return Conversation[] Returns an array of Conversation objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Conversation
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
public function findNewConversations($userId, \DateTime $lastDisplayedDate)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.iduser1 = :userId OR c.iduser2 = :userId')
            ->andWhere('c.dateMsg > :lastDisplayedDate')
            ->setParameter('userId', $userId)
            ->setParameter('lastDisplayedDate', $lastDisplayedDate)
            ->getQuery()
            ->getResult();
    }

    public function markAsRead(Conversation $conversation)
    {
        $conversation->setIsRead(true);

        // If you want to persist the change to the database
        $this->_em->flush();
    }
     /**
     * Find unread conversations for a specific user.
     *
     * @param int $userId
     * @return Conversation[]
     */
    public function findUnreadConversations(int $userId): array
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.isRead = :isRead')
            ->andWhere('(c.iduser1 = :userId AND c.iduser2 = :userId) OR (c.iduser1 = :userId OR c.iduser2 = :userId)')
            ->setParameter('isRead', false)
            ->setParameter('userId', $userId)
            ->getQuery()
            ->getResult();
    }
}
