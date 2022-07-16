<?php

namespace App\Validator;

class IndexValidator
{
    private const ALLOWED_KEYS = [
        'title',
        'sortBy',
        'sortOrder',
        'page',
    ];

    protected const ALLOWED_SORT_ORDER = [
        'asc',
        'desc',
    ];

    const SORT_COLUMNS = [
        'title',
        'author',
        'publisher',
        'year'
    ];

    public function __construct(private array $data)
    {
    }

    public function get_data(): array
    {
        $this->data['title'] = isset($this->data['title']) ?
            strtolower(strip_tags(stripslashes(trim($this->data['title'])))) : '';

        $this->data['sortBy'] = isset($this->data['sortBy']) ?
            strtolower(strip_tags(stripslashes(trim($this->data['sortBy'])))) : 'id';

        $this->data['sortBy'] = in_array($this->data['sortBy'], self::SORT_COLUMNS) ?
            $this->data['sortBy'] : 'id';

        $this->data['sortOrder'] = isset($this->data['sortOrder']) ?
            strtolower(strip_tags(stripslashes(trim($this->data['sortOrder'])))) : 'asc';

        $this->data['sortOrder'] = in_array($this->data['sortOrder'], self::ALLOWED_SORT_ORDER) ?
            $this->data['sortOrder'] : 'asc';

        $this->data['page'] = isset($this->data['page']) ? filter_var($this->data['page'], FILTER_VALIDATE_INT, [ 'options' => ['min_range' => 1]]) : 1;

        return array_intersect_key($this->data, array_flip(self::ALLOWED_KEYS));
    }
}
