<?php

namespace MauticPlugin\MauticCitrixBundle\Integration;

use Mautic\PluginBundle\Entity\Integration;
use Mautic\PluginBundle\Integration\AbstractIntegration;

/**
 * Class CitrixAbstractIntegration.
 *
 * @deprecated will be removed in Mautic 5. See DEPRECATION_MESSAGE below.
 */
abstract class CitrixAbstractIntegration extends AbstractIntegration
{
    protected $auth;
    public const DEPRECATION_MESSAGE = 'The Citrix plugin is deprecated and will be removed in Mautic 5. See <a href="https://www.leuchtfeuer.com/en/mautic/downloads/mautic-goto-plugin/" target=”_blank”>an alternative</a> for this plugin.';

    /**
     * @return array
     */
    public function getSupportedFeatures()
    {
        return [];
    }

    public function setIntegrationSettings(Integration $settings)
    {
        //make sure URL does not have ending /
        $keys = $this->getDecryptedApiKeys($settings);
        if (array_key_exists('url', $keys) && '/' === substr($keys['url'], -1)) {
            $keys['url'] = substr($keys['url'], 0, -1);
            $this->encryptAndSetApiKeys($keys, $settings);
        }

        parent::setIntegrationSettings($settings);
    }

    /**
     * {@inheritdoc}
     *
     * @return string
     */
    public function getAuthenticationType()
    {
        return 'oauth2';
    }

    /**
     * {@inheritdoc}
     *
     * @return array
     */
    public function getRequiredKeyFields()
    {
        return [
            'app_name'      => 'mautic.citrix.form.appname',
            'client_id'     => 'mautic.citrix.form.clientid',
            'client_secret' => 'mautic.citrix.form.clientsecret',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function sortFieldsAlphabetically()
    {
        return false;
    }

    /**
     * Get the API helper.
     *
     * @return mixed
     */
    public function getApiHelper()
    {
        static $helper;
        if (null === $helper) {
            $class  = '\\MauticPlugin\\MauticCitrixBundle\\Api\\'.$this->getName().'Api';
            $helper = new $class($this);
        }

        return $helper;
    }

    /**
     * @return string
     */
    public function getApiUrl()
    {
        return 'https://api.getgo.com';
    }

    /**
     * {@inheritdoc}
     *
     * @return string
     */
    public function getAccessTokenUrl()
    {
        return $this->getApiUrl().'/oauth/v2/token';
    }

    /**
     * {@inheritdoc}
     *
     * @return string
     */
    public function getAuthenticationUrl()
    {
        return $this->getApiUrl().'/oauth/v2/authorize';
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        $keys = $this->getKeys();

        return $keys[$this->getAuthTokenKey()];
    }

    /**
     * @param bool $inAuthorization
     *
     * @return string|null
     */
    public function getBearerToken($inAuthorization = false)
    {
        if (!$inAuthorization && isset($this->keys[$this->getAuthTokenKey()])) {
            return $this->keys[$this->getAuthTokenKey()];
        }

        return null;
    }

    /**
     * @return string
     */
    public function getOrganizerKey()
    {
        $keys = $this->getKeys();

        return $keys['organizer_key'];
    }

    /**
     * Get the keys for the refresh token and expiry.
     *
     * @return array
     */
    public function getRefreshTokenKeys()
    {
        return ['refresh_token', 'expires'];
    }

    /**
     * {@inheritdoc}
     *
     * @param $data
     */
    public function prepareResponseForExtraction($data)
    {
        if (is_array($data) && isset($data['expires_in'])) {
            $data['expires'] = $data['expires_in'] + time();
        }

        return $data;
    }

    /**
     * {@inheritdoc}
     *
     * @param string $section
     *
     * @return string
     */
    public function getFormNotes($section)
    {
        if ('authorization' == $section) {
            return [
                '<b>'.self::DEPRECATION_MESSAGE.'</b><br><br>',
                'warning',
            ];
        }

        return parent::getFormNotes($section);
    }
}
