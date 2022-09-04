<?php

namespace App\Repository;

use App\Entity\Text;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\Connection;
use Doctrine\ORM\Query\Expr;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Text>
 *
 * @method Text|null find($id, $lockMode = null, $lockVersion = null)
 * @method Text|null findOneBy(array $criteria, array $orderBy = null)
 * @method Text[]    findAll()
 * @method Text[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TextRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Text::class);
    }

    public function add(Text $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Text $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findOneByHash(string $hash): ?Text
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.hash = :val')
            ->setParameter('val', $hash)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * @param \DateTime|false $startDate
     * @param \DateTime|false $endDate
     * @return array<int, int|float>|null
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function getGlobalStatistic(\DateTime|false $startDate, \DateTime|false $endDate): ?array
    {
        $qb = $this->createQueryBuilder('t');

        $qb->add('select', new Expr\Select(
            [
                    $qb->expr()->count('t.hash'),
                    $qb->expr()->avg('t.number_of_characters'),
                    $qb->expr()->avg('t.number_of_words'),
                    $qb->expr()->avg('t.number_of_sentences'),
                    $qb->expr()->avg('t.number_of_palindromes'),
                    $qb->expr()->avg('t.average_word_length'),
                    $qb->expr()->avg('t.average_number_of_words_in_sentence'),
                    $qb->expr()->avg('t.taken_time')
                ]
        ));

        if ($startDate && $endDate) {
            $qb->where('t.created_at >= ?1')
                ->andWhere('t.created_at <= ?2')
                ->setParameter('1', $startDate)
                ->setParameter('2', $endDate);
        }

        return $qb->getQuery()->getOneOrNullResult();
    }

    /**
     * @param int[] $ids
     * @return Text[]|null
     */
    public function findLastTen(array $ids): ?array
    {
        return $this->createQueryBuilder('t')
            ->where('t.id IN (:val)')
            ->orderBy('t.created_at')
            ->setMaxResults(10)
            ->setParameter('val', $ids, Connection::PARAM_STR_ARRAY)
            ->getQuery()
            ->getResult();
    }
}
