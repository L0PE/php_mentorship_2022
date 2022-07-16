<?php

namespace App\Validator;

class BookValidator
{
    private const ALLOWED_KEYS = [
        'title',
        'author',
        'publisher',
        'year',
    ];

    public function __construct(protected array $data)
    {
    }

    public function get_data(): array
    {
        return array_intersect_key($this->data, array_flip(self::ALLOWED_KEYS));
    }

    public function is_valid(): bool
    {
        if (
            !isset($this->data['title']) ||
            !isset($this->data['author']) ||
            !isset($this->data['publisher']) ||
            !isset($this->data['year'])
        ) {
            return false;
        }

        array_walk($this->data, function (&$value) {
            $value = strip_tags(stripslashes(trim($value)));
        });

        if (
            empty($this->data['title']) ||
            empty($this->data['author']) ||
            empty($this->data['publisher']) ||
            empty($this->data['year'])
        ) {
            return false;
        }

        return true;
    }
}
