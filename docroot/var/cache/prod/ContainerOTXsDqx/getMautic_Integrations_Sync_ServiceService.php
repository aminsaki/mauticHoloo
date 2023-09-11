<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.integrations.sync.service' shared service.

$this->services['mautic.integrations.sync.service'] = $instance = new \Mautic\IntegrationsBundle\Sync\SyncService\SyncService(($this->services['mautic.integrations.sync.data_exchange.mautic'] ?? $this->load('getMautic_Integrations_Sync_DataExchange_MauticService.php')), ($this->services['mautic.integrations.helper.sync_date'] ?? $this->load('getMautic_Integrations_Helper_SyncDateService.php')), ($this->services['mautic.integrations.helper.sync_mapping'] ?? $this->load('getMautic_Integrations_Helper_SyncMappingService.php')), ($this->services['mautic.integrations.sync.helper.relations'] ?? $this->load('getMautic_Integrations_Sync_Helper_RelationsService.php')), ($this->services['mautic.integrations.helper.sync_integrations'] ?? $this->load('getMautic_Integrations_Helper_SyncIntegrationsService.php')), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['mautic.integrations.sync.notifier'] ?? $this->load('getMautic_Integrations_Sync_NotifierService.php')), ($this->services['mautic.integrations.sync.integration_process'] ?? $this->load('getMautic_Integrations_Sync_IntegrationProcessService.php')), ($this->services['mautic.integrations.sync.internal_process'] ?? $this->load('getMautic_Integrations_Sync_InternalProcessService.php')));

$instance->initiateDebugLogger(($this->services['mautic.sync.logger'] ?? $this->load('getMautic_Sync_LoggerService.php')));

return $instance;
