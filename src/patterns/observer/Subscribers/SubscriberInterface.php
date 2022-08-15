<?php

namespace Patterns\Observer\Subscribers;

interface SubscriberInterface
{
    public function update(string $word);
}
