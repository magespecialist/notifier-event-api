<?php
/**
 * Automatically created by MageSpecialist CodeMonkey
 * https://github.com/magespecialist/m2-MSP_CodeMonkey
 */

declare(strict_types=1);

namespace MSP\NotifierEventApi\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface RuleInterface extends ExtensibleDataInterface
{
    const ID = 'rule_id';
    const NAME = 'name';
    const EVENTS = 'events';
    const CHANNELS_CODES = 'channels_codes';
    const TEMPLATE_ID = 'template_id';
    const THROTTLE_LIMIT = 'throttle_limit';
    const THROTTLE_INTERVAL = 'throttle_interval';
    const LAST_FIRED_AT = 'last_fired_at';
    const FIRE_COUNT = 'fire_count';
    const ENABLED = 'enabled';

    /**
     * Get value for rule_id
     * @return int
     */
    public function getId();

    /**
     * Set value for rule_id
     * @param int $value
     * @return void
     */
    public function setId($value);

    /**
     * Get value for name
     * @return string
     */
    public function getName();

    /**
     * Set value for name
     * @param string $value
     * @return void
     */
    public function setName($value);

    /**
     * Get value for events
     * @return string
     */
    public function getEvents();

    /**
     * Set value for events
     * @param string $value
     * @return void
     */
    public function setEvents($value);

    /**
     * Get value for channels_codes
     * @return string
     */
    public function getChannelsCodes();

    /**
     * Set value for channels_codes
     * @param string $value
     * @return void
     */
    public function setChannelsCodes($value);

    /**
     * Get value for template_id
     * @return string
     */
    public function getTemplateId();

    /**
     * Set value for template_id
     * @param string $value
     * @return void
     */
    public function setTemplateId($value);

    /**
     * Get value for throttle_limit
     * @return int
     */
    public function getThrottleLimit();

    /**
     * Set value for template_id
     * @param int $value
     * @return void
     */
    public function setThrottleLimit($value);

    /**
     * Get value for throttle_interval
     * @return int
     */
    public function getThrottleInterval();

    /**
     * Set value for throttle_interval
     * @param int $value
     * @return void
     */
    public function setThrottleInterval($value);

    /**
     * Get value for last_fired_at
     * @return int
     */
    public function getLastFiredAt();

    /**
     * Set value for last_fired_at
     * @param int $value
     * @return void
     */
    public function setLastFiredAt($value);

    /**
     * Get value for fire_count
     * @return int
     */
    public function getFireCount();

    /**
     * Set value for fire_count
     * @param int $value
     * @return void
     */
    public function setFireCount($value);

    /**
     * Get value for enabled
     * @return bool
     */
    public function getEnabled();

    /**
     * Set value for enabled
     * @param bool $value
     * @return void
     */
    public function setEnabled($value);

    /**
     * Retrieve existing extension attributes object or create a new one
     * @return \MSP\NotifierEventApi\Api\Data\RuleExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object
     * @param \MSP\NotifierEventApi\Api\Data\RuleExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \MSP\NotifierEventApi\Api\Data\RuleExtensionInterface $extensionAttributes
    );
}
