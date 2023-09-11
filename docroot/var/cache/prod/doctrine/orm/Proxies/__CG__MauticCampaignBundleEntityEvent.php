<?php

namespace Proxies\__CG__\Mautic\CampaignBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Event extends \Mautic\CampaignBundle\Entity\Event implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'id', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'name', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'description', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'type', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'eventType', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'order', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'properties', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'triggerDate', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'triggerInterval', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'triggerIntervalUnit', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'triggerHour', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'triggerRestrictedStartHour', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'triggerRestrictedStopHour', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'triggerRestrictedDaysOfWeek', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'triggerMode', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'campaign', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'children', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'parent', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'decisionPath', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'tempId', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'log', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'contactLog', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'channel', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'channelId', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'changes'];
        }

        return ['__isInitialized__', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'id', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'name', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'description', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'type', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'eventType', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'order', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'properties', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'triggerDate', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'triggerInterval', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'triggerIntervalUnit', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'triggerHour', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'triggerRestrictedStartHour', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'triggerRestrictedStopHour', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'triggerRestrictedDaysOfWeek', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'triggerMode', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'campaign', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'children', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'parent', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'decisionPath', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'tempId', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'log', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'contactLog', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'channel', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'channelId', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Event' . "\0" . 'changes'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Event $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * {@inheritDoc}
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);

        parent::__clone();
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getChanges()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChanges', []);

        return parent::getChanges();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function nullId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'nullId', []);

        return parent::nullId();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrder($order)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrder', [$order]);

        return parent::setOrder($order);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrder', []);

        return parent::getOrder();
    }

    /**
     * {@inheritDoc}
     */
    public function setProperties($properties)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProperties', [$properties]);

        return parent::setProperties($properties);
    }

    /**
     * {@inheritDoc}
     */
    public function getProperties()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProperties', []);

        return parent::getProperties();
    }

    /**
     * {@inheritDoc}
     */
    public function setCampaign(\Mautic\CampaignBundle\Entity\Campaign $campaign)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCampaign', [$campaign]);

        return parent::setCampaign($campaign);
    }

    /**
     * {@inheritDoc}
     */
    public function getCampaign()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCampaign', []);

        return parent::getCampaign();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function convertToArray()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'convertToArray', []);

        return parent::convertToArray();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function addLog(\Mautic\CampaignBundle\Entity\LeadEventLog $log)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLog', [$log]);

        return parent::addLog($log);
    }

    /**
     * {@inheritDoc}
     */
    public function removeLog(\Mautic\CampaignBundle\Entity\LeadEventLog $log)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeLog', [$log]);

        return parent::removeLog($log);
    }

    /**
     * {@inheritDoc}
     */
    public function getLog()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLog', []);

        return parent::getLog();
    }

    /**
     * {@inheritDoc}
     */
    public function getLogByContactAndRotation(\Mautic\LeadBundle\Entity\Lead $contact, $rotation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogByContactAndRotation', [$contact, $rotation]);

        return parent::getLogByContactAndRotation($contact, $rotation);
    }

    /**
     * {@inheritDoc}
     */
    public function addChild(\Mautic\CampaignBundle\Entity\Event $children)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addChild', [$children]);

        return parent::addChild($children);
    }

    /**
     * {@inheritDoc}
     */
    public function removeChild(\Mautic\CampaignBundle\Entity\Event $children)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeChild', [$children]);

        return parent::removeChild($children);
    }

    /**
     * {@inheritDoc}
     */
    public function getChildren()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChildren', []);

        return parent::getChildren();
    }

    /**
     * {@inheritDoc}
     */
    public function getPositiveChildren()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPositiveChildren', []);

        return parent::getPositiveChildren();
    }

    /**
     * {@inheritDoc}
     */
    public function getNegativeChildren()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNegativeChildren', []);

        return parent::getNegativeChildren();
    }

    /**
     * {@inheritDoc}
     */
    public function getChildrenByType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChildrenByType', [$type]);

        return parent::getChildrenByType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getChildrenByEventType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChildrenByEventType', [$type]);

        return parent::getChildrenByEventType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function setParent(\Mautic\CampaignBundle\Entity\Event $parent = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParent', [$parent]);

        return parent::setParent($parent);
    }

    /**
     * {@inheritDoc}
     */
    public function removeParent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeParent', []);

        return parent::removeParent();
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParent', []);

        return parent::getParent();
    }

    /**
     * {@inheritDoc}
     */
    public function getTriggerDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTriggerDate', []);

        return parent::getTriggerDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setTriggerDate($triggerDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTriggerDate', [$triggerDate]);

        return parent::setTriggerDate($triggerDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getTriggerInterval()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTriggerInterval', []);

        return parent::getTriggerInterval();
    }

    /**
     * {@inheritDoc}
     */
    public function setTriggerInterval($triggerInterval)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTriggerInterval', [$triggerInterval]);

        return parent::setTriggerInterval($triggerInterval);
    }

    /**
     * {@inheritDoc}
     */
    public function getTriggerHour()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTriggerHour', []);

        return parent::getTriggerHour();
    }

    /**
     * {@inheritDoc}
     */
    public function setTriggerHour($triggerHour)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTriggerHour', [$triggerHour]);

        return parent::setTriggerHour($triggerHour);
    }

    /**
     * {@inheritDoc}
     */
    public function getTriggerIntervalUnit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTriggerIntervalUnit', []);

        return parent::getTriggerIntervalUnit();
    }

    /**
     * {@inheritDoc}
     */
    public function setTriggerIntervalUnit($triggerIntervalUnit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTriggerIntervalUnit', [$triggerIntervalUnit]);

        return parent::setTriggerIntervalUnit($triggerIntervalUnit);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEventType', []);

        return parent::getEventType();
    }

    /**
     * {@inheritDoc}
     */
    public function setEventType($eventType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEventType', [$eventType]);

        return parent::setEventType($eventType);
    }

    /**
     * {@inheritDoc}
     */
    public function getTriggerMode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTriggerMode', []);

        return parent::getTriggerMode();
    }

    /**
     * {@inheritDoc}
     */
    public function setTriggerMode($triggerMode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTriggerMode', [$triggerMode]);

        return parent::setTriggerMode($triggerMode);
    }

    /**
     * {@inheritDoc}
     */
    public function getDecisionPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDecisionPath', []);

        return parent::getDecisionPath();
    }

    /**
     * {@inheritDoc}
     */
    public function setDecisionPath($decisionPath)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDecisionPath', [$decisionPath]);

        return parent::setDecisionPath($decisionPath);
    }

    /**
     * {@inheritDoc}
     */
    public function getTempId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTempId', []);

        return parent::getTempId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTempId($tempId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTempId', [$tempId]);

        return parent::setTempId($tempId);
    }

    /**
     * {@inheritDoc}
     */
    public function getChannel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChannel', []);

        return parent::getChannel();
    }

    /**
     * {@inheritDoc}
     */
    public function setChannel($channel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChannel', [$channel]);

        return parent::setChannel($channel);
    }

    /**
     * {@inheritDoc}
     */
    public function getChannelId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChannelId', []);

        return parent::getChannelId();
    }

    /**
     * {@inheritDoc}
     */
    public function setChannelId($channelId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChannelId', [$channelId]);

        return parent::setChannelId($channelId);
    }

    /**
     * {@inheritDoc}
     */
    public function getContactLog(\Mautic\LeadBundle\Entity\Lead $contact = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContactLog', [$contact]);

        return parent::getContactLog($contact);
    }

    /**
     * {@inheritDoc}
     */
    public function setContactLog($contactLog)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContactLog', [$contactLog]);

        return parent::setContactLog($contactLog);
    }

    /**
     * {@inheritDoc}
     */
    public function addContactLog($contactLog)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addContactLog', [$contactLog]);

        return parent::addContactLog($contactLog);
    }

    /**
     * {@inheritDoc}
     */
    public function getTriggerRestrictedStartHour()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTriggerRestrictedStartHour', []);

        return parent::getTriggerRestrictedStartHour();
    }

    /**
     * {@inheritDoc}
     */
    public function setTriggerRestrictedStartHour($triggerRestrictedStartHour)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTriggerRestrictedStartHour', [$triggerRestrictedStartHour]);

        return parent::setTriggerRestrictedStartHour($triggerRestrictedStartHour);
    }

    /**
     * {@inheritDoc}
     */
    public function getTriggerRestrictedStopHour()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTriggerRestrictedStopHour', []);

        return parent::getTriggerRestrictedStopHour();
    }

    /**
     * {@inheritDoc}
     */
    public function setTriggerRestrictedStopHour($triggerRestrictedStopHour)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTriggerRestrictedStopHour', [$triggerRestrictedStopHour]);

        return parent::setTriggerRestrictedStopHour($triggerRestrictedStopHour);
    }

    /**
     * {@inheritDoc}
     */
    public function getTriggerRestrictedDaysOfWeek()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTriggerRestrictedDaysOfWeek', []);

        return parent::getTriggerRestrictedDaysOfWeek();
    }

    /**
     * {@inheritDoc}
     */
    public function setTriggerRestrictedDaysOfWeek(array $triggerRestrictedDaysOfWeek = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTriggerRestrictedDaysOfWeek', [$triggerRestrictedDaysOfWeek]);

        return parent::setTriggerRestrictedDaysOfWeek($triggerRestrictedDaysOfWeek);
    }

}
