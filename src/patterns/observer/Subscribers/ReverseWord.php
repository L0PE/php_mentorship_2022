<?php

namespace Patterns\Observer\Subscribers;

class ReverseWord implements SubscriberInterface
{

    public function update(string $word): void
    {
        $chars = mb_str_split($word);

        echo ' Reverse Word: ' . implode(array_reverse($chars));
    }
}
