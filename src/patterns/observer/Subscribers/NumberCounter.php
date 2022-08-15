<?php

namespace Patterns\Observer\Subscribers;

class NumberCounter implements SubscriberInterface
{
    public static int $numberCount = 0;

    public function update(string $word): void
    {
        if (preg_match('/^\d+$/', $word)) {
            static::$numberCount++;
        }
    }
}
