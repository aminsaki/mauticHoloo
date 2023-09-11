<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.integrations.sync.notification.handler_company' shared service.

return $this->services['mautic.integrations.sync.notification.handler_company'] = new \Mautic\IntegrationsBundle\Sync\Notification\Handler\CompanyNotificationHandler(($this->services['mautic.integrations.sync.notification.writer'] ?? $this->load('getMautic_Integrations_Sync_Notification_WriterService.php')), ($this->services['mautic.integrations.sync.notification.helper_user_notification'] ?? $this->load('getMautic_Integrations_Sync_Notification_HelperUserNotificationService.php')), ($this->services['mautic.integrations.sync.notification.helper_company'] ?? $this->load('getMautic_Integrations_Sync_Notification_HelperCompanyService.php')));
