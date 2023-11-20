<?php
/**
 * AccountSignatureProvider
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21
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
 * AccountSignatureProvider Class Doc Comment
 *
 * @category    Class
 * @description Contains information abotu the signature provider associated with the Identity Verification workflow.  If empty, then this specific workflow is not intended for signers.
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AccountSignatureProvider implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'accountSignatureProvider';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_required' => '?string',
        'priority' => '?string',
        'signature_provider_display_name' => '?string',
        'signature_provider_id' => '?string',
        'signature_provider_name' => '?string',
        'signature_provider_options_metadata' => '\DocuSign\eSign\Model\AccountSignatureProviderOption[]',
        'signature_provider_required_options' => '\DocuSign\eSign\Model\SignatureProviderRequiredOption[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_required' => null,
        'priority' => null,
        'signature_provider_display_name' => null,
        'signature_provider_id' => null,
        'signature_provider_name' => null,
        'signature_provider_options_metadata' => null,
        'signature_provider_required_options' => null
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
        'is_required' => 'isRequired',
        'priority' => 'priority',
        'signature_provider_display_name' => 'signatureProviderDisplayName',
        'signature_provider_id' => 'signatureProviderId',
        'signature_provider_name' => 'signatureProviderName',
        'signature_provider_options_metadata' => 'signatureProviderOptionsMetadata',
        'signature_provider_required_options' => 'signatureProviderRequiredOptions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_required' => 'setIsRequired',
        'priority' => 'setPriority',
        'signature_provider_display_name' => 'setSignatureProviderDisplayName',
        'signature_provider_id' => 'setSignatureProviderId',
        'signature_provider_name' => 'setSignatureProviderName',
        'signature_provider_options_metadata' => 'setSignatureProviderOptionsMetadata',
        'signature_provider_required_options' => 'setSignatureProviderRequiredOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_required' => 'getIsRequired',
        'priority' => 'getPriority',
        'signature_provider_display_name' => 'getSignatureProviderDisplayName',
        'signature_provider_id' => 'getSignatureProviderId',
        'signature_provider_name' => 'getSignatureProviderName',
        'signature_provider_options_metadata' => 'getSignatureProviderOptionsMetadata',
        'signature_provider_required_options' => 'getSignatureProviderRequiredOptions'
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
        $this->container['is_required'] = isset($data['is_required']) ? $data['is_required'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['signature_provider_display_name'] = isset($data['signature_provider_display_name']) ? $data['signature_provider_display_name'] : null;
        $this->container['signature_provider_id'] = isset($data['signature_provider_id']) ? $data['signature_provider_id'] : null;
        $this->container['signature_provider_name'] = isset($data['signature_provider_name']) ? $data['signature_provider_name'] : null;
        $this->container['signature_provider_options_metadata'] = isset($data['signature_provider_options_metadata']) ? $data['signature_provider_options_metadata'] : null;
        $this->container['signature_provider_required_options'] = isset($data['signature_provider_required_options']) ? $data['signature_provider_required_options'] : null;
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
     * Gets is_required
     *
     * @return ?string
     */
    public function getIsRequired()
    {
        return $this->container['is_required'];
    }

    /**
     * Sets is_required
     *
     * @param ?string $is_required 
     *
     * @return $this
     */
    public function setIsRequired($is_required)
    {
        $this->container['is_required'] = $is_required;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return ?string
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param ?string $priority 
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets signature_provider_display_name
     *
     * @return ?string
     */
    public function getSignatureProviderDisplayName()
    {
        return $this->container['signature_provider_display_name'];
    }

    /**
     * Sets signature_provider_display_name
     *
     * @param ?string $signature_provider_display_name 
     *
     * @return $this
     */
    public function setSignatureProviderDisplayName($signature_provider_display_name)
    {
        $this->container['signature_provider_display_name'] = $signature_provider_display_name;

        return $this;
    }

    /**
     * Gets signature_provider_id
     *
     * @return ?string
     */
    public function getSignatureProviderId()
    {
        return $this->container['signature_provider_id'];
    }

    /**
     * Sets signature_provider_id
     *
     * @param ?string $signature_provider_id 
     *
     * @return $this
     */
    public function setSignatureProviderId($signature_provider_id)
    {
        $this->container['signature_provider_id'] = $signature_provider_id;

        return $this;
    }

    /**
     * Gets signature_provider_name
     *
     * @return ?string
     */
    public function getSignatureProviderName()
    {
        return $this->container['signature_provider_name'];
    }

    /**
     * Sets signature_provider_name
     *
     * @param ?string $signature_provider_name 
     *
     * @return $this
     */
    public function setSignatureProviderName($signature_provider_name)
    {
        $this->container['signature_provider_name'] = $signature_provider_name;

        return $this;
    }

    /**
     * Gets signature_provider_options_metadata
     *
     * @return \DocuSign\eSign\Model\AccountSignatureProviderOption[]
     */
    public function getSignatureProviderOptionsMetadata()
    {
        return $this->container['signature_provider_options_metadata'];
    }

    /**
     * Sets signature_provider_options_metadata
     *
     * @param \DocuSign\eSign\Model\AccountSignatureProviderOption[] $signature_provider_options_metadata 
     *
     * @return $this
     */
    public function setSignatureProviderOptionsMetadata($signature_provider_options_metadata)
    {
        $this->container['signature_provider_options_metadata'] = $signature_provider_options_metadata;

        return $this;
    }

    /**
     * Gets signature_provider_required_options
     *
     * @return \DocuSign\eSign\Model\SignatureProviderRequiredOption[]
     */
    public function getSignatureProviderRequiredOptions()
    {
        return $this->container['signature_provider_required_options'];
    }

    /**
     * Sets signature_provider_required_options
     *
     * @param \DocuSign\eSign\Model\SignatureProviderRequiredOption[] $signature_provider_required_options 
     *
     * @return $this
     */
    public function setSignatureProviderRequiredOptions($signature_provider_required_options)
    {
        $this->container['signature_provider_required_options'] = $signature_provider_required_options;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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

