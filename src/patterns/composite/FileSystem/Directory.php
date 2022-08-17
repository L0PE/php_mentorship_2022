<?php

namespace Patterns\Composite\FileSystem;

class Directory implements FileSystemInterface
{

    public function __construct(private string $name, private array $content = [])
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSize(): int
    {
        $size = 0;

        /** @var File $fileSystem */
        foreach ($this->content as $fileSystem) {
            $size += $fileSystem->getSize();
        }

        return $size;
    }

    public function add(FileSystemInterface $fileSystem): void
    {
        $name = $fileSystem->getName();
        $this->content[$name] = $fileSystem;
    }

    public function remove(FileSystemInterface $fileSystem): void
    {
        unset($this->content[$fileSystem->getName()]);
    }

    public function listContent(): array
    {
        return $this->content;
    }
}
