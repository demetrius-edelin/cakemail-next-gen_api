<?php
/**
 * ModelList
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Cakemail API
 *
 * The Cakemail API exposes multiple APIs including Authentication, Marketing, Contact, Transactional, Analytic, Content, Account and Partner.
 *
 * OpenAPI spec version: 1.0.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ModelList Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ModelList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'List';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
'default_sender' => '\Swagger\Client\Model\Sender',
'language' => 'string',
'redirections' => 'AllOfListRedirections',
'webhook' => 'AllOfListWebhook'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
'default_sender' => null,
'language' => null,
'redirections' => null,
'webhook' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
'default_sender' => 'default_sender',
'language' => 'language',
'redirections' => 'redirections',
'webhook' => 'webhook'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
'default_sender' => 'setDefaultSender',
'language' => 'setLanguage',
'redirections' => 'setRedirections',
'webhook' => 'setWebhook'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
'default_sender' => 'getDefaultSender',
'language' => 'getLanguage',
'redirections' => 'getRedirections',
'webhook' => 'getWebhook'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const LANGUAGE_EN_US = 'en_US';
const LANGUAGE_DE_DE = 'de_DE';
const LANGUAGE_EL_GR = 'el_GR';
const LANGUAGE_ES_US = 'es_US';
const LANGUAGE_ET_EE = 'et_EE';
const LANGUAGE_FR_CA = 'fr_CA';
const LANGUAGE_NL_NL = 'nl_NL';
const LANGUAGE_RO_RO = 'ro_RO';
const LANGUAGE_RU_RU = 'ru_RU';
const LANGUAGE_TH_TH = 'th_TH';
const LANGUAGE_ZH_CN = 'zh_CN';
const LANGUAGE_FI_FI = 'fi_FI';
const LANGUAGE_SV_SE = 'sv_SE';
const LANGUAGE_ES_ES = 'es_ES';
const LANGUAGE_FR_FR = 'fr_FR';
const LANGUAGE_TR_TR = 'tr_TR';
const LANGUAGE_PT_BR = 'pt_BR';
const LANGUAGE_DA_DK = 'da_DK';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLanguageAllowableValues()
    {
        return [
            self::LANGUAGE_EN_US,
self::LANGUAGE_DE_DE,
self::LANGUAGE_EL_GR,
self::LANGUAGE_ES_US,
self::LANGUAGE_ET_EE,
self::LANGUAGE_FR_CA,
self::LANGUAGE_NL_NL,
self::LANGUAGE_RO_RO,
self::LANGUAGE_RU_RU,
self::LANGUAGE_TH_TH,
self::LANGUAGE_ZH_CN,
self::LANGUAGE_FI_FI,
self::LANGUAGE_SV_SE,
self::LANGUAGE_ES_ES,
self::LANGUAGE_FR_FR,
self::LANGUAGE_TR_TR,
self::LANGUAGE_PT_BR,
self::LANGUAGE_DA_DK,        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['default_sender'] = isset($data['default_sender']) ? $data['default_sender'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : 'en_US';
        $this->container['redirections'] = isset($data['redirections']) ? $data['redirections'] : null;
        $this->container['webhook'] = isset($data['webhook']) ? $data['webhook'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['default_sender'] === null) {
            $invalidProperties[] = "'default_sender' can't be null";
        }
        $allowedValues = $this->getLanguageAllowableValues();
        if (!is_null($this->container['language']) && !in_array($this->container['language'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'language', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets default_sender
     *
     * @return \Swagger\Client\Model\Sender
     */
    public function getDefaultSender()
    {
        return $this->container['default_sender'];
    }

    /**
     * Sets default_sender
     *
     * @param \Swagger\Client\Model\Sender $default_sender default_sender
     *
     * @return $this
     */
    public function setDefaultSender($default_sender)
    {
        $this->container['default_sender'] = $default_sender;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language This will localize the tracking links and contents associated with that list.
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $allowedValues = $this->getLanguageAllowableValues();
        if (!is_null($language) && !in_array($language, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'language', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets redirections
     *
     * @return AllOfListRedirections
     */
    public function getRedirections()
    {
        return $this->container['redirections'];
    }

    /**
     * Sets redirections
     *
     * @param AllOfListRedirections $redirections redirections
     *
     * @return $this
     */
    public function setRedirections($redirections)
    {
        $this->container['redirections'] = $redirections;

        return $this;
    }

    /**
     * Gets webhook
     *
     * @return AllOfListWebhook
     */
    public function getWebhook()
    {
        return $this->container['webhook'];
    }

    /**
     * Sets webhook
     *
     * @param AllOfListWebhook $webhook webhook
     *
     * @return $this
     */
    public function setWebhook($webhook)
    {
        $this->container['webhook'] = $webhook;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
