<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.form.type.integration.settings' shared service.

return $this->services['mautic.form.type.integration.settings'] = new \Mautic\PluginBundle\Form\Type\FeatureSettingsType(($this->services['session'] ?? $this->getSessionService()), ($this->services['mautic.helper.core_parameters'] ?? ($this->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($this))), ($this->services['monolog.logger.mautic'] ?? $this->getMonolog_Logger_MauticService()));
