<?php

namespace Patterns\Composite\FileSystem;

interface FileSystemInterface
{
    public function getName(): string;

    public function getSize(): int;
}
