<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.queue.helper.rabbitmq_consumer' shared service.

return $this->services['mautic.queue.helper.rabbitmq_consumer'] = new \Mautic\QueueBundle\Helper\RabbitMqConsumer(($this->services['mautic.queue.service'] ?? $this->getMautic_Queue_ServiceService()));
