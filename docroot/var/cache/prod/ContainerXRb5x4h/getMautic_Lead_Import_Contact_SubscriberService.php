<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.lead.import.contact.subscriber' shared service.

return $this->services['mautic.lead.import.contact.subscriber'] = new \Mautic\LeadBundle\EventListener\ImportContactSubscriber(($this->services['mautic.lead.field.field_list'] ?? $this->getMautic_Lead_Field_FieldListService()), ($this->services['mautic.security'] ?? $this->getMautic_SecurityService()), ($this->services['mautic.lead.model.lead'] ?? $this->getMautic_Lead_Model_LeadService()), ($this->services['translator.default'] ?? $this->getTranslator_DefaultService()));
