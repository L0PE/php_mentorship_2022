<?php

namespace App\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="logs")
 */
class Log
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private string $id;

    /**
     * @ORM\Column(type="string")
     */
    private string $method;

    /**
     * @ORM\Column(type="string")
     */
    private string $url;

    /**
     * @ORM\Column(type="array")
     */
    private array $headers;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private string $body;

    /**
     * @ORM\Column(type="datetime")
     */
    private \DateTime $data_time;

    public function create(array $logData)
    {
        $this->method = $logData['method'];
        $this->url = $logData['url'];
        $this->headers = $logData['headers'];
        $this->body = $logData['body'];
        $this->data_time = new \DateTime();
    }
}
