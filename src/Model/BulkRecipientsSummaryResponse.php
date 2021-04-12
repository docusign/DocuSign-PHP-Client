<?php
/**
 * BulkRecipientsSummaryResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;
use DocuSign\eSign\ObjectSerializer;

/**
 * BulkRecipientsSummaryResponse Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BulkRecipientsSummaryResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'bulkRecipientsSummaryResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bulk_recipients' => '\DocuSign\eSign\Model\BulkRecipient[]',
        'bulk_recipients_count' => '?string',
        'bulk_recipients_uri' => '?string',
        'error_details' => '\DocuSign\eSign\Model\ErrorDetails[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bulk_recipients' => null,
        'bulk_recipients_count' => null,
        'bulk_recipients_uri' => null,
        'error_details' => null
    ];

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
        'bulk_recipients' => 'bulkRecipients',
        'bulk_recipients_count' => 'bulkRecipientsCount',
        'bulk_recipients_uri' => 'bulkRecipientsUri',
        'error_details' => 'errorDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bulk_recipients' => 'setBulkRecipients',
        'bulk_recipients_count' => 'setBulkRecipientsCount',
        'bulk_recipients_uri' => 'setBulkRecipientsUri',
        'error_details' => 'setErrorDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bulk_recipients' => 'getBulkRecipients',
        'bulk_recipients_count' => 'getBulkRecipientsCount',
        'bulk_recipients_uri' => 'getBulkRecipientsUri',
        'error_details' => 'getErrorDetails'
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
        return self::$swaggerModelName;
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
        $this->container['bulk_recipients'] = isset($data['bulk_recipients']) ? $data['bulk_recipients'] : null;
        $this->container['bulk_recipients_count'] = isset($data['bulk_recipients_count']) ? $data['bulk_recipients_count'] : null;
        $this->container['bulk_recipients_uri'] = isset($data['bulk_recipients_uri']) ? $data['bulk_recipients_uri'] : null;
        $this->container['error_details'] = isset($data['error_details']) ? $data['error_details'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets bulk_recipients
     *
     * @return \DocuSign\eSign\Model\BulkRecipient[]
     */
    public function getBulkRecipients()
    {
        return $this->container['bulk_recipients'];
    }

    /**
     * Sets bulk_recipients
     *
     * @param \DocuSign\eSign\Model\BulkRecipient[] $bulk_recipients A complex type containing information about the bulk recipients in the response.
     *
     * @return $this
     */
    public function setBulkRecipients($bulk_recipients)
    {
        $this->container['bulk_recipients'] = $bulk_recipients;

        return $this;
    }

    /**
     * Gets bulk_recipients_count
     *
     * @return ?string
     */
    public function getBulkRecipientsCount()
    {
        return $this->container['bulk_recipients_count'];
    }

    /**
     * Sets bulk_recipients_count
     *
     * @param ?string $bulk_recipients_count The number of items returned in this response.
     *
     * @return $this
     */
    public function setBulkRecipientsCount($bulk_recipients_count)
    {
        $this->container['bulk_recipients_count'] = $bulk_recipients_count;

        return $this;
    }

    /**
     * Gets bulk_recipients_uri
     *
     * @return ?string
     */
    public function getBulkRecipientsUri()
    {
        return $this->container['bulk_recipients_uri'];
    }

    /**
     * Sets bulk_recipients_uri
     *
     * @param ?string $bulk_recipients_uri Contains a URI for an endpoint that allows you to easily retrieve bulk recipient information.
     *
     * @return $this
     */
    public function setBulkRecipientsUri($bulk_recipients_uri)
    {
        $this->container['bulk_recipients_uri'] = $bulk_recipients_uri;

        return $this;
    }

    /**
     * Gets error_details
     *
     * @return \DocuSign\eSign\Model\ErrorDetails[]
     */
    public function getErrorDetails()
    {
        return $this->container['error_details'];
    }

    /**
     * Sets error_details
     *
     * @param \DocuSign\eSign\Model\ErrorDetails[] $error_details Array or errors.
     *
     * @return $this
     */
    public function setErrorDetails($error_details)
    {
        $this->container['error_details'] = $error_details;

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

