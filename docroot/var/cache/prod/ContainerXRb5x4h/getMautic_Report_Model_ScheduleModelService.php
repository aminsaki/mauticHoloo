<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.report.model.schedule_model' shared service.

return $this->services['mautic.report.model.schedule_model'] = new \Mautic\ReportBundle\Model\ScheduleModel(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['mautic.report.model.scheduler_planner'] ?? $this->load('getMautic_Report_Model_SchedulerPlannerService.php')));
