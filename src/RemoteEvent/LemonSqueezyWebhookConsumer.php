<?php

namespace App\RemoteEvent;

use Symfony\Component\RemoteEvent\Attribute\AsRemoteEventConsumer;
use Symfony\Component\RemoteEvent\Consumer\ConsumerInterface;
use Symfony\Component\RemoteEvent\RemoteEvent;

#[AsRemoteEventConsumer('lemon-squeezy')]
final class LemonSqueezyWebhookConsumer implements ConsumerInterface
{
    public function __construct()
    {
    }

    public function consume(RemoteEvent $event): void
    {
        // Implement your own logic here
    }
}
