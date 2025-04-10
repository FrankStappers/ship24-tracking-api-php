<?php
/**
 * Tracker
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Ship24\TrackingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Ship24 Tracking API
 *
 * ## Getting started  Make sure to read the [Getting started](https://docs.ship24.com/getting-started) section of our [API Documentation](https://docs.ship24.com/) before using the endpoints presented below. ## Documentation structure  Use the top navigation bar to switch from:  - Our [API Documentation](https://docs.ship24.com/), which contains a comprehensive explanation of how our API works. - Our [API Reference](https://docs.ship24.com/tracking-api-reference/), which contains the specification of each of our endpoints. - Our [Support](https://docs.ship24.com/support/introduction) section, which contains help articles for most of the common questions and issues you may encounter.  ## Import our documentation into your HTTP client  Our API Reference is available as an Open API 3.1 format file, which is supported by most HTTP clients.  - Latest version: https://docs.ship24.com/assets/openapi/ship24-tracking-api.yaml  | <!-- -->                                                     | <!-- -->                                                                                                                                                     | | ------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------ | | ![Postman](/img/postman-logo.svg) Postman                    | In Postman, click on \"Import\", go on the \"Link\" tab, and paste this URL `https://docs.ship24.com/assets/openapi/ship24-tracking-api.yaml`                           | | <img src=\"/img/insomnia-logo.png\" width=\"32\"></img> Insomnia | From Insomnia preferences, locate the \"Import data\" option, choose \"From URL\", and paste this URL `https://docs.ship24.com/assets/openapi/ship24-tracking-api.yaml` |
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ship24\TrackingApi\Model;

use \ArrayAccess;
use \Ship24\TrackingApi\ObjectSerializer;

/**
 * Tracker Class Doc Comment
 *
 * @category Class
 * @package  Ship24\TrackingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Tracker implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'tracker';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tracker_id' => 'string',
        'tracking_number' => 'string',
        'shipment_reference' => 'string',
        'courier_code' => 'string[]',
        'client_tracker_id' => 'string',
        'is_subscribed' => 'bool',
        'is_tracked' => 'bool',
        'created_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'tracker_id' => null,
        'tracking_number' => null,
        'shipment_reference' => null,
        'courier_code' => null,
        'client_tracker_id' => null,
        'is_subscribed' => null,
        'is_tracked' => null,
        'created_at' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'tracker_id' => false,
        'tracking_number' => false,
        'shipment_reference' => true,
        'courier_code' => false,
        'client_tracker_id' => true,
        'is_subscribed' => false,
        'is_tracked' => false,
        'created_at' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'tracker_id' => 'trackerId',
        'tracking_number' => 'trackingNumber',
        'shipment_reference' => 'shipmentReference',
        'courier_code' => 'courierCode',
        'client_tracker_id' => 'clientTrackerId',
        'is_subscribed' => 'isSubscribed',
        'is_tracked' => 'isTracked',
        'created_at' => 'createdAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tracker_id' => 'setTrackerId',
        'tracking_number' => 'setTrackingNumber',
        'shipment_reference' => 'setShipmentReference',
        'courier_code' => 'setCourierCode',
        'client_tracker_id' => 'setClientTrackerId',
        'is_subscribed' => 'setIsSubscribed',
        'is_tracked' => 'setIsTracked',
        'created_at' => 'setCreatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tracker_id' => 'getTrackerId',
        'tracking_number' => 'getTrackingNumber',
        'shipment_reference' => 'getShipmentReference',
        'courier_code' => 'getCourierCode',
        'client_tracker_id' => 'getClientTrackerId',
        'is_subscribed' => 'getIsSubscribed',
        'is_tracked' => 'getIsTracked',
        'created_at' => 'getCreatedAt'
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('tracker_id', $data ?? [], null);
        $this->setIfExists('tracking_number', $data ?? [], null);
        $this->setIfExists('shipment_reference', $data ?? [], null);
        $this->setIfExists('courier_code', $data ?? [], null);
        $this->setIfExists('client_tracker_id', $data ?? [], null);
        $this->setIfExists('is_subscribed', $data ?? [], null);
        $this->setIfExists('is_tracked', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['tracker_id'] === null) {
            $invalidProperties[] = "'tracker_id' can't be null";
        }
        if ($this->container['tracking_number'] === null) {
            $invalidProperties[] = "'tracking_number' can't be null";
        }
        if ($this->container['shipment_reference'] === null) {
            $invalidProperties[] = "'shipment_reference' can't be null";
        }
        if (!is_null($this->container['courier_code']) && (count($this->container['courier_code']) > 3)) {
            $invalidProperties[] = "invalid value for 'courier_code', number of items must be less than or equal to 3.";
        }

        if (!is_null($this->container['courier_code']) && (count($this->container['courier_code']) < 0)) {
            $invalidProperties[] = "invalid value for 'courier_code', number of items must be greater than or equal to 0.";
        }

        if ($this->container['client_tracker_id'] === null) {
            $invalidProperties[] = "'client_tracker_id' can't be null";
        }
        if ($this->container['is_subscribed'] === null) {
            $invalidProperties[] = "'is_subscribed' can't be null";
        }
        if ($this->container['is_tracked'] === null) {
            $invalidProperties[] = "'is_tracked' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
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
     * Gets tracker_id
     *
     * @return string
     */
    public function getTrackerId()
    {
        return $this->container['tracker_id'];
    }

    /**
     * Sets tracker_id
     *
     * @param string $tracker_id The id of the tracker that is providing this tracking.
     *
     * @return self
     */
    public function setTrackerId($tracker_id)
    {
        if (is_null($tracker_id)) {
            throw new \InvalidArgumentException('non-nullable tracker_id cannot be null');
        }
        $this->container['tracker_id'] = $tracker_id;

        return $this;
    }

    /**
     * Gets tracking_number
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param string $tracking_number The tracking number which the tracker is following.
     *
     * @return self
     */
    public function setTrackingNumber($tracking_number)
    {
        if (is_null($tracking_number)) {
            throw new \InvalidArgumentException('non-nullable tracking_number cannot be null');
        }
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets shipment_reference
     *
     * @return string
     */
    public function getShipmentReference()
    {
        return $this->container['shipment_reference'];
    }

    /**
     * Sets shipment_reference
     *
     * @param string $shipment_reference The `shipmentReference` you provided at the tracker's creation.
     *
     * @return self
     */
    public function setShipmentReference($shipment_reference)
    {
        if (is_null($shipment_reference)) {
            array_push($this->openAPINullablesSetToNull, 'shipment_reference');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shipment_reference', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shipment_reference'] = $shipment_reference;

        return $this;
    }

    /**
     * Gets courier_code
     *
     * @return string[]|null
     */
    public function getCourierCode()
    {
        return $this->container['courier_code'];
    }

    /**
     * Sets courier_code
     *
     * @param string[]|null $courier_code Code of the courier(s) handling the shipment.
     *
     * @return self
     */
    public function setCourierCode($courier_code)
    {
        if (is_null($courier_code)) {
            throw new \InvalidArgumentException('non-nullable courier_code cannot be null');
        }

        if ((count($courier_code) > 3)) {
            throw new \InvalidArgumentException('invalid value for $courier_code when calling Tracker., number of items must be less than or equal to 3.');
        }
        if ((count($courier_code) < 0)) {
            throw new \InvalidArgumentException('invalid length for $courier_code when calling Tracker., number of items must be greater than or equal to 0.');
        }
        $this->container['courier_code'] = $courier_code;

        return $this;
    }

    /**
     * Gets client_tracker_id
     *
     * @return string
     */
    public function getClientTrackerId()
    {
        return $this->container['client_tracker_id'];
    }

    /**
     * Sets client_tracker_id
     *
     * @param string $client_tracker_id The `clientTrackerId` you provided at the tracker's creation.
     *
     * @return self
     */
    public function setClientTrackerId($client_tracker_id)
    {
        if (is_null($client_tracker_id)) {
            array_push($this->openAPINullablesSetToNull, 'client_tracker_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('client_tracker_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['client_tracker_id'] = $client_tracker_id;

        return $this;
    }

    /**
     * Gets is_subscribed
     *
     * @return bool
     */
    public function getIsSubscribed()
    {
        return $this->container['is_subscribed'];
    }

    /**
     * Sets is_subscribed
     *
     * @param bool $is_subscribed Indicates whether the tracker is active. A value of `false` means the tracker is archived and will not be used for tracking.
     *
     * @return self
     */
    public function setIsSubscribed($is_subscribed)
    {
        if (is_null($is_subscribed)) {
            throw new \InvalidArgumentException('non-nullable is_subscribed cannot be null');
        }
        $this->container['is_subscribed'] = $is_subscribed;

        return $this;
    }

    /**
     * Gets is_tracked
     *
     * @return bool
     */
    public function getIsTracked()
    {
        return $this->container['is_tracked'];
    }

    /**
     * Sets is_tracked
     *
     * @param bool $is_tracked Indicates whether we are actively tracking the parcel. A value of `true` means new data is being searched for, while `false` indicates tracking has stopped due to delivery, inactivity, or unsubscription. Existing tracking results will remain accessible; however, new data will not be fetched, and notifications will no longer be sent.
     *
     * @return self
     */
    public function setIsTracked($is_tracked)
    {
        if (is_null($is_tracked)) {
            throw new \InvalidArgumentException('non-nullable is_tracked cannot be null');
        }
        $this->container['is_tracked'] = $is_tracked;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at The date and time at which the tracker was created.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


