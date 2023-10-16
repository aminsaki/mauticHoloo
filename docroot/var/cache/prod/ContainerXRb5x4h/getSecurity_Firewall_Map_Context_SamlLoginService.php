<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.firewall.map.context.saml_login' shared service.

return $this->privates['security.firewall.map.context.saml_login'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
    yield 0 => ($this->privates['security.channel_listener'] ?? $this->load('getSecurity_ChannelListenerService.php'));
    yield 1 => ($this->privates['security.context_listener.1'] ?? $this->load('getSecurity_ContextListener_1Service.php'));
    yield 2 => ($this->privates['security.authentication.listener.anonymous.saml_login'] ?? $this->load('getSecurity_Authentication_Listener_Anonymous_SamlLoginService.php'));
    yield 3 => ($this->privates['security.access_listener'] ?? $this->load('getSecurity_AccessListenerService.php'));
}, 4), new \Symfony\Component\Security\Http\Firewall\ExceptionListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.http_utils'] ?? $this->load('getSecurity_HttpUtilsService.php')), 'saml_login', NULL, NULL, NULL, ($this->privates['monolog.logger.security'] ?? $this->load('getMonolog_Logger_SecurityService.php')), false), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('saml_login', 'security.user_checker', '.security.request_matcher.HKz5.ct', true, false, 'mautic.user.provider', 'mautic', NULL, NULL, NULL, [0 => 'anonymous'], NULL));
