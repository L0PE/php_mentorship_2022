<?php

namespace Patterns\Observer\Processor;

use Patterns\Observer\Subscribers\SubscriberInterface;

class FileProcessor
{
    private array $listeners = [];

    public function subscribe(SubscriberInterface $subscriber): void
    {
        $this->listeners[$subscriber::class] = $subscriber;
    }

    public function unsubscribe(SubscriberInterface $subscriber): void
    {
        unset($this->listeners[$subscriber::class]);
    }

    private function notify(string $word): void
    {
        /** @var SubscriberInterface $listener */
        foreach ($this->listeners as $listener) {
            $listener->update($word);
        }
    }

    public function process($fileName): void
    {
        $fileContent = file_get_contents($fileName);

        $words = preg_split('/([,;.!?]*\s)|([,;.!?]+$)+/u', $fileContent, flags: PREG_SPLIT_NO_EMPTY);

        foreach ($words as $word) {
            echo 'Word' . $word;
            $this->notify($word);
            echo '<br>';
        }
    }

}
