<?php

namespace App\TheCat\Responses;

use App\Models\Breed;
use Psr\Http\Message\StreamInterface;

class BreedResponse implements ResponseInterface
{
    public function __construct(private StreamInterface $stream)
    {
    }

    public function getData(): array
    {
        $breedsData = json_decode($this->stream, true);

        $breeds = [];

        foreach ($breedsData as $breedData) {
            $breed = new Breed();
            $breed->create([
                'id' => $breedData['id'],
                'name' => $breedData['name'],
                'origin' => $breedData['origin'],
                'temperament' => $breedData['temperament'],
                'description' => $breedData['description'],
                'life_span' => $breedData['life_span'],
                'weight' => $breedData['weight']['metric'],
            ]);

            $breeds[] = $breed;
        }

        return $breeds;
    }
}
