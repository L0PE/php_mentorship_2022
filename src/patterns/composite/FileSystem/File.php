<?php

namespace Patterns\Composite\FileSystem;

class File implements FileSystemInterface
{
    public function __construct(private string $name, private int $size)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSize(): int
    {
        return $this->size;
    }
}
