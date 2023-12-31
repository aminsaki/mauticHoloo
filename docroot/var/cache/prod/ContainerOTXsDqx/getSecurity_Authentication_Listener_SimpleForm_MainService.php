<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.listener.simple_form.main' shared service.

@trigger_error('The "security.authentication.listener.simple_form.main" service is deprecated since Symfony 4.2.', E_USER_DEPRECATED);

$a = $this->load('getSecurity_Authentication_SimpleSuccessFailureHandler_MainService.php');

$this->privates['security.authentication.listener.simple_form.main'] = $instance = new \Symfony\Component\Security\Http\Firewall\SimpleFormAuthenticationListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['security.authentication.session_strategy'] ?? $this->load('getSecurity_Authentication_SessionStrategyService.php')), ($this->privates['security.http_utils'] ?? $this->load('getSecurity_HttpUtilsService.php')), 'main', $a, $a, ['authenticator' => 'mautic.user.form_authenticator', 'check_path' => '/s/login_check', 'use_forward' => false, 'require_previous_session' => false, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true], ($this->privates['monolog.logger.security'] ?? $this->load('getMonolog_Logger_SecurityService.php')), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()), ($this->services['mautic.user.form_authenticator'] ?? $this->load('getMautic_User_FormAuthenticatorService.php')));

$instance->setRememberMeServices(($this->privates['security.authentication.rememberme.services.simplehash.main'] ?? $this->load('getSecurity_Authentication_Rememberme_Services_Simplehash_MainService.php')));

return $instance;
