<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_oauth_server.auth_code_manager.default' shared service.

return $this->privates['fos_oauth_server.auth_code_manager.default'] = new \FOS\OAuthServerBundle\Entity\AuthCodeManager(($this->privates['fos_oauth_server.entity_manager'] ?? $this->load('getFosOauthServer_EntityManagerService.php')), 'Mautic\\ApiBundle\\Entity\\oAuth2\\AuthCode');
