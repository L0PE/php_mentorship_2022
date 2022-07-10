<?php

namespace App\Models;

use App\DTO\BookDTO;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repositories\BookRepository")
 * @ORM\Table(name="books")
 */
class Book
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="string")
     */
    private string $title;

    /**
     * @ORM\Column(type="string")
     */
    private string $author;

    /**
     * @ORM\Column(type="string")
     */
    private string $publisher;

    /**
     * @ORM\Column(type="string")
     */
    private string $year;

    public function createOrUpdate(BookDTO $bookData): void
    {
        $this->title = $bookData->title;
        $this->author = $bookData->author;
        $this->publisher = $bookData->publisher;
        $this->year = $bookData->year;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getPublisher(): string
    {
        return $this->publisher;
    }

    public function getYear(): string
    {
        return $this->year;
    }
}
