<?php

namespace App\Repositories;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class BookRepository extends EntityRepository
{
    private const LIMIT = 7;

    private Paginator $paginator;

    public function setPaginator(string $title, string $sortBy, string $sortOrder): void
    {
        $this->paginator = new Paginator($this->createQueryBuilder('b')
            ->where('b.title LIKE :title')
            ->setParameter('title', sprintf('%%%s%%', $title))
            ->orderBy('b.' . $sortBy, $sortOrder)
            ->getQuery());
    }

    public function getTotalPages(): float
    {
        return ceil($this->paginator->count() / self::LIMIT);
    }

    public function getWithPagination(int $page): mixed
    {
        return $this->paginator
            ->getQuery()
            ->setFirstResult(($page - 1) * self::LIMIT)
            ->setMaxResults(self::LIMIT)
            ->getResult();
    }
}
