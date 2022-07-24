<?php

namespace App\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="publishers")
 */
class Publisher
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */private int $id;

    /**
     * @ORM\Column(type="string")
     */
    private string $name;

    public function getName(): string
    {
        return $this->name;
    }
}
