<?php
/**
 * Identity
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Ory\Kratos\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Ory Kratos API
 *
 * Documentation for all public and administrative Ory Kratos APIs. Public and administrative APIs are exposed on different ports. Public APIs can face the public internet without any protection while administrative APIs should never be exposed without prior authorization. To protect the administative API port you should use something like Nginx, Ory Oathkeeper, or any other technology capable of authorizing incoming requests.
 *
 * The version of the OpenAPI document: v0.6.2-alpha.1
 * Contact: hi@ory.sh
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ory\Kratos\Client\Model;

use \ArrayAccess;
use \Ory\Kratos\Client\ObjectSerializer;

/**
 * Identity Class Doc Comment
 *
 * @category Class
 * @package  Ory\Kratos\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Identity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Identity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'recoveryAddresses' => '\Ory\Kratos\Client\Model\RecoveryAddress[]',
        'schemaId' => 'string',
        'schemaUrl' => 'string',
        'traits' => 'object',
        'verifiableAddresses' => '\Ory\Kratos\Client\Model\VerifiableAddress[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid4',
        'recoveryAddresses' => null,
        'schemaId' => null,
        'schemaUrl' => null,
        'traits' => null,
        'verifiableAddresses' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'recoveryAddresses' => 'recovery_addresses',
        'schemaId' => 'schema_id',
        'schemaUrl' => 'schema_url',
        'traits' => 'traits',
        'verifiableAddresses' => 'verifiable_addresses'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'recoveryAddresses' => 'setRecoveryAddresses',
        'schemaId' => 'setSchemaId',
        'schemaUrl' => 'setSchemaUrl',
        'traits' => 'setTraits',
        'verifiableAddresses' => 'setVerifiableAddresses'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'recoveryAddresses' => 'getRecoveryAddresses',
        'schemaId' => 'getSchemaId',
        'schemaUrl' => 'getSchemaUrl',
        'traits' => 'getTraits',
        'verifiableAddresses' => 'getVerifiableAddresses'
    ];

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
        return self::$openAPIModelName;
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['recoveryAddresses'] = $data['recoveryAddresses'] ?? null;
        $this->container['schemaId'] = $data['schemaId'] ?? null;
        $this->container['schemaUrl'] = $data['schemaUrl'] ?? null;
        $this->container['traits'] = $data['traits'] ?? null;
        $this->container['verifiableAddresses'] = $data['verifiableAddresses'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['schemaId'] === null) {
            $invalidProperties[] = "'schemaId' can't be null";
        }
        if ($this->container['schemaUrl'] === null) {
            $invalidProperties[] = "'schemaUrl' can't be null";
        }
        if ($this->container['traits'] === null) {
            $invalidProperties[] = "'traits' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets recoveryAddresses
     *
     * @return \Ory\Kratos\Client\Model\RecoveryAddress[]|null
     */
    public function getRecoveryAddresses()
    {
        return $this->container['recoveryAddresses'];
    }

    /**
     * Sets recoveryAddresses
     *
     * @param \Ory\Kratos\Client\Model\RecoveryAddress[]|null $recoveryAddresses RecoveryAddresses contains all the addresses that can be used to recover an identity.
     *
     * @return self
     */
    public function setRecoveryAddresses($recoveryAddresses)
    {
        $this->container['recoveryAddresses'] = $recoveryAddresses;

        return $this;
    }

    /**
     * Gets schemaId
     *
     * @return string
     */
    public function getSchemaId()
    {
        return $this->container['schemaId'];
    }

    /**
     * Sets schemaId
     *
     * @param string $schemaId SchemaID is the ID of the JSON Schema to be used for validating the identity's traits.
     *
     * @return self
     */
    public function setSchemaId($schemaId)
    {
        $this->container['schemaId'] = $schemaId;

        return $this;
    }

    /**
     * Gets schemaUrl
     *
     * @return string
     */
    public function getSchemaUrl()
    {
        return $this->container['schemaUrl'];
    }

    /**
     * Sets schemaUrl
     *
     * @param string $schemaUrl SchemaURL is the URL of the endpoint where the identity's traits schema can be fetched from.  format: url
     *
     * @return self
     */
    public function setSchemaUrl($schemaUrl)
    {
        $this->container['schemaUrl'] = $schemaUrl;

        return $this;
    }

    /**
     * Gets traits
     *
     * @return object
     */
    public function getTraits()
    {
        return $this->container['traits'];
    }

    /**
     * Sets traits
     *
     * @param object $traits traits
     *
     * @return self
     */
    public function setTraits($traits)
    {
        $this->container['traits'] = $traits;

        return $this;
    }

    /**
     * Gets verifiableAddresses
     *
     * @return \Ory\Kratos\Client\Model\VerifiableAddress[]|null
     */
    public function getVerifiableAddresses()
    {
        return $this->container['verifiableAddresses'];
    }

    /**
     * Sets verifiableAddresses
     *
     * @param \Ory\Kratos\Client\Model\VerifiableAddress[]|null $verifiableAddresses VerifiableAddresses contains all the addresses that can be verified by the user.
     *
     * @return self
     */
    public function setVerifiableAddresses($verifiableAddresses)
    {
        $this->container['verifiableAddresses'] = $verifiableAddresses;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


