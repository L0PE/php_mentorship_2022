<?php

namespace App\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="breeds")
 */
class Breed
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    private string $id;

    /**
     * @ORM\Column(type="string")
     */
    private string $name;

    /**
     * @ORM\Column(type="string")
     */
    private string $origin;

    /**
     * @ORM\Column(type="text")
     */
    private string $temperament;

    /**
     * @ORM\Column(type="text")
     */
    private string $description;

    /**
     * @ORM\Column(type="string")
     */
    private string $life_span;

    /**
     * @ORM\Column(type="string")
     */
    private string $weight;

    public function create(array $breedData)
    {
        $this->id = $breedData['id'];
        $this->name = $breedData['name'];
        $this->origin = $breedData['origin'];
        $this->temperament = $breedData['temperament'];
        $this->description = $breedData['description'];
        $this->life_span = $breedData['life_span'];
        $this->weight = $breedData['weight'];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getOrigin(): string
    {
        return $this->origin;
    }

    public function getTemperament(): string
    {
        return $this->temperament;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getLifeSpan(): string
    {
        return $this->life_span;
    }

    public function getWeight(): string
    {
        return $this->weight;
    }

}
