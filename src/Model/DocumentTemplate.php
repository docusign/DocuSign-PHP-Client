<?php
/**
 * DocumentTemplate
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
 * DocumentTemplate Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DocumentTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'documentTemplate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'document_end_page' => '?string',
        'document_id' => '?string',
        'document_start_page' => '?string',
        'error_details' => '\DocuSign\eSign\Model\ErrorDetails',
        'template_id' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'document_end_page' => null,
        'document_id' => null,
        'document_start_page' => null,
        'error_details' => null,
        'template_id' => null
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
        'document_end_page' => 'documentEndPage',
        'document_id' => 'documentId',
        'document_start_page' => 'documentStartPage',
        'error_details' => 'errorDetails',
        'template_id' => 'templateId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'document_end_page' => 'setDocumentEndPage',
        'document_id' => 'setDocumentId',
        'document_start_page' => 'setDocumentStartPage',
        'error_details' => 'setErrorDetails',
        'template_id' => 'setTemplateId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'document_end_page' => 'getDocumentEndPage',
        'document_id' => 'getDocumentId',
        'document_start_page' => 'getDocumentStartPage',
        'error_details' => 'getErrorDetails',
        'template_id' => 'getTemplateId'
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
        $this->container['document_end_page'] = isset($data['document_end_page']) ? $data['document_end_page'] : null;
        $this->container['document_id'] = isset($data['document_id']) ? $data['document_id'] : null;
        $this->container['document_start_page'] = isset($data['document_start_page']) ? $data['document_start_page'] : null;
        $this->container['error_details'] = isset($data['error_details']) ? $data['error_details'] : null;
        $this->container['template_id'] = isset($data['template_id']) ? $data['template_id'] : null;
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
     * Gets document_end_page
     *
     * @return ?string
     */
    public function getDocumentEndPage()
    {
        return $this->container['document_end_page'];
    }

    /**
     * Sets document_end_page
     *
     * @param ?string $document_end_page 
     *
     * @return $this
     */
    public function setDocumentEndPage($document_end_page)
    {
        $this->container['document_end_page'] = $document_end_page;

        return $this;
    }

    /**
     * Gets document_id
     *
     * @return ?string
     */
    public function getDocumentId()
    {
        return $this->container['document_id'];
    }

    /**
     * Sets document_id
     *
     * @param ?string $document_id Specifies the document ID number that the tab is placed on. This must refer to an existing Document's ID attribute.
     *
     * @return $this
     */
    public function setDocumentId($document_id)
    {
        $this->container['document_id'] = $document_id;

        return $this;
    }

    /**
     * Gets document_start_page
     *
     * @return ?string
     */
    public function getDocumentStartPage()
    {
        return $this->container['document_start_page'];
    }

    /**
     * Sets document_start_page
     *
     * @param ?string $document_start_page 
     *
     * @return $this
     */
    public function setDocumentStartPage($document_start_page)
    {
        $this->container['document_start_page'] = $document_start_page;

        return $this;
    }

    /**
     * Gets error_details
     *
     * @return \DocuSign\eSign\Model\ErrorDetails
     */
    public function getErrorDetails()
    {
        return $this->container['error_details'];
    }

    /**
     * Sets error_details
     *
     * @param \DocuSign\eSign\Model\ErrorDetails $error_details error_details
     *
     * @return $this
     */
    public function setErrorDetails($error_details)
    {
        $this->container['error_details'] = $error_details;

        return $this;
    }

    /**
     * Gets template_id
     *
     * @return ?string
     */
    public function getTemplateId()
    {
        return $this->container['template_id'];
    }

    /**
     * Sets template_id
     *
     * @param ?string $template_id The unique identifier of the template. If this is not provided, DocuSign will generate a value.
     *
     * @return $this
     */
    public function setTemplateId($template_id)
    {
        $this->container['template_id'] = $template_id;

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

