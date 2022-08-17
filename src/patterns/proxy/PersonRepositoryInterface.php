<?php

interface PersonRepositoryInterface
{
    public function savePerson(): void;

    public function readPeople(): array;

    public function readPerson(string $name): ?array;
}
