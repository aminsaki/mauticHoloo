<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.email.touser.subscriber' shared service.

return $this->services['mautic.email.touser.subscriber'] = new \Mautic\EmailBundle\EventListener\EmailToUserSubscriber(($this->services['mautic.email.model.send_email_to_user'] ?? $this->load('getMautic_Email_Model_SendEmailToUserService.php')));