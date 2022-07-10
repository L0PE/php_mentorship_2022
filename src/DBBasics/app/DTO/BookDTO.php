<?php

namespace App\DTO;

use Spatie\DataTransferObject\DataTransferObject;

class BookDTO extends DataTransferObject
{
    public string $title;

    public string $author;

    public string $publisher;

    public string $year;
}
