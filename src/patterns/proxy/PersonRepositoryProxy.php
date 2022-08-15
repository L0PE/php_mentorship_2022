<?php

use Predis\Client;

class PersonRepositoryProxy implements PersonRepositoryInterface
{
    private const TTL = 3600;

    private Client $redisClient;

    public function __construct(private PersonRepositoryInterface $personRepository)
    {
        $this->redisClient = new Client([
            'host' => '127.0.0.1',
            'port' => '6379',
        ]);
    }

    public function savePerson(): void
    {
        $this->personRepository->savePerson();
    }

    public function readPeople(): array
    {
        return $this->personRepository->readPeople();
    }

    public function readPerson(string $name): ?array
    {
        $key = md5($name);

        if ($this->redisClient->exists($key)){
            return json_decode($this->redisClient->get($key), true);
        }

        $person = $this->personRepository->readPerson($name);

        $this->redisClient->set($key, json_encode($person), 'EX', self::TTL);

        return $person;
    }
}
