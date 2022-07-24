<?php

namespace App\Models;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repositories\BookRepository")
 * @ORM\Table(name="books")
 */
class Book
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\ManyToOne(targetEntity="Type")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     */
    private Type $type;

    /**
     * @ORM\Column(type="string")
     */
    private string $title;

    /**
     * @ORM\ManyToMany(targetEntity="Author")
     * @ORM\JoinTable(
     *     name="book_author",
     *     joinColumns={@ORM\JoinColumn(name="book_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="author_id", referencedColumnName="id")}
     * )
     */
    private Collection $authors;

    /**
     * @ORM\ManyToOne(targetEntity="Publisher")
     * @ORM\JoinColumn(name="publisher_id", referencedColumnName="id")
     */
    private Publisher $publisher;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private ?string $description;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private ?string $pathToFile;

    public function getID(): int
    {
        return $this->id;
    }

    public function getType(): Type
    {
        return $this->type;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthors(): string
    {
        $authorsString = '';
        foreach ($this->authors as $author) {
            $authorsString .= $author->getFullName();
        }

        return $authorsString;
    }

    public function getPublisher(): Publisher
    {
        return $this->publisher;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getPathToFile(): ?string
    {
        return $this->pathToFile;
    }
}
