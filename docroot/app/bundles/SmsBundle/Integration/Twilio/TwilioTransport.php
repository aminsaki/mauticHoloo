<?php

namespace Mautic\SmsBundle\Integration\Twilio;

use libphonenumber\NumberParseException;
use libphonenumber\PhoneNumberFormat;
use libphonenumber\PhoneNumberUtil;
use Mautic\LeadBundle\Entity\Lead;
use Mautic\SmsBundle\Sms\TransportInterface;
use Psr\Log\LoggerInterface;
use Twilio\Exceptions\ConfigurationException;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Client;

class TwilioTransport implements TransportInterface
{
    /**
     * @var Configuration
     */
    private $configuration;

    /**
     * @var LoggerInterface
     */
    private $logger;

    protected $token;

    protected $sender;

    protected $base_url;

    /**
     * @var Client
     */
    private $client;

    /**
     * @var string
     */
    private $sendingPhoneNumber;

    /**
     * TwilioTransport constructor.
     */
    public function __construct(Configuration $configuration, LoggerInterface $logger)
    {
        $this->logger = $logger;
        $this->configuration = $configuration;
        $this->base_url = "https://api.kavenegar.com/v1";
        $this->token = "4954352F383964723255736C4D6C36507A3465496A4E6E594D61384D34474F36452B30685635474A577A6F3D";
        $this->sender = "200023067";
    }

    /**
     * @param string $content
     *
     * @return bool|string
     */
    public function sendSms(Lead $lead, $content)
    {
        $number = $lead->getLeadPhoneNumber();
        if (null === $number) {
            return false;
        }
        $url = $this->base_url . '/' . $this->token . '/sms/send.json?receptor=' . $number . '&sender=' . $this->sender . '&message=' . $content;


        try {
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_HTTPHEADER => array(
                    'Cookie: cookiesession1=678A8C314567801234ABCEGIKMOQ294F'
                ),
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            $this->logger->addWarning(
                $response,
                ['exception' => $response]
            );
            return true;
        } catch (NumberParseException $exception) {
            $this->logger->addWarning(
                $exception->getMessage(),
                ['exception' => $exception]
            );

            return $exception->getMessage();
        } catch (ConfigurationException $exception) {
            $message = ($exception->getMessage()) ? $exception->getMessage() : 'mautic.sms.transport.twilio.not_configured';
            $this->logger->addWarning(
                $message,
                ['exception' => $exception]
            );

            return $message;
        } catch (TwilioException $exception) {
            $this->logger->addWarning(
                $exception->getMessage(),
                ['exception' => $exception]
            );

            return $exception->getMessage();
        }
    }

    /**
     * @param string $number
     *
     * @return string
     *
     * @throws NumberParseException
     */
    private function sanitizeNumber($number)
    {
        $util = PhoneNumberUtil::getInstance();
        $parsed = $util->parse($number, 'US');

        return $util->format($parsed, PhoneNumberFormat::E164);
    }

    /**
     * @throws ConfigurationException
     */
    private function configureClient()
    {
        if ($this->client) {
            // Already configured
            return;
        }

        $this->sendingPhoneNumber = $this->configuration->getSendingNumber();
        $this->client = new Client(
            $this->configuration->getAccountSid(),
            $this->configuration->getAuthToken()
        );
    }
}
