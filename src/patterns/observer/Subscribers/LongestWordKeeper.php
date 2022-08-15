<?php

namespace Patterns\Observer\Subscribers;

class LongestWordKeeper implements SubscriberInterface
{
    public static string $word = '';

    public function update(string $word): void
    {
        if (mb_strlen($word) > mb_strlen(static::$word)) {
            static::$word = $word;
        }
    }
}
