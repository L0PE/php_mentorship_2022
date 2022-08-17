<?php

namespace Patterns\Observer\Subscribers;

class WordCounter implements SubscriberInterface
{
    public static int $wordCount = 0;

    public function update(string $word): void
    {
        static::$wordCount++;
    }
}
