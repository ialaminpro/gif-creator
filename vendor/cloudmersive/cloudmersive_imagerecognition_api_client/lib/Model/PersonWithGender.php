<?php
/**
 * PersonWithGender
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * imageapi
 *
 * Image Recognition and Processing APIs let you use Machine Learning to recognize and process images, and also perform useful image modification operations.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
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
 * PersonWithGender Class Doc Comment
 *
 * @category Class
 * @description A person identified in an image gender classification operation
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PersonWithGender implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PersonWithGender';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'face_location' => '\Swagger\Client\Model\Face',
        'gender_classification_confidence' => 'double',
        'gender_class' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'face_location' => null,
        'gender_classification_confidence' => 'double',
        'gender_class' => null
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
        'face_location' => 'FaceLocation',
        'gender_classification_confidence' => 'GenderClassificationConfidence',
        'gender_class' => 'GenderClass'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'face_location' => 'setFaceLocation',
        'gender_classification_confidence' => 'setGenderClassificationConfidence',
        'gender_class' => 'setGenderClass'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'face_location' => 'getFaceLocation',
        'gender_classification_confidence' => 'getGenderClassificationConfidence',
        'gender_class' => 'getGenderClass'
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
        $this->container['face_location'] = isset($data['face_location']) ? $data['face_location'] : null;
        $this->container['gender_classification_confidence'] = isset($data['gender_classification_confidence']) ? $data['gender_classification_confidence'] : null;
        $this->container['gender_class'] = isset($data['gender_class']) ? $data['gender_class'] : null;
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

        return true;
    }


    /**
     * Gets face_location
     *
     * @return \Swagger\Client\Model\Face
     */
    public function getFaceLocation()
    {
        return $this->container['face_location'];
    }

    /**
     * Sets face_location
     *
     * @param \Swagger\Client\Model\Face $face_location Location and other information about the person's face corresponding to this age classification
     *
     * @return $this
     */
    public function setFaceLocation($face_location)
    {
        $this->container['face_location'] = $face_location;

        return $this;
    }

    /**
     * Gets gender_classification_confidence
     *
     * @return double
     */
    public function getGenderClassificationConfidence()
    {
        return $this->container['gender_classification_confidence'];
    }

    /**
     * Sets gender_classification_confidence
     *
     * @param double $gender_classification_confidence Confidence level of gender classification; possible values are between 0.0 and 1.0; higher is better, with values &gt; 0.50 being high confidence results
     *
     * @return $this
     */
    public function setGenderClassificationConfidence($gender_classification_confidence)
    {
        $this->container['gender_classification_confidence'] = $gender_classification_confidence;

        return $this;
    }

    /**
     * Gets gender_class
     *
     * @return string
     */
    public function getGenderClass()
    {
        return $this->container['gender_class'];
    }

    /**
     * Sets gender_class
     *
     * @param string $gender_class The person's identified gender; possible values are \"Male\", \"Female\" and \"Unknown\"
     *
     * @return $this
     */
    public function setGenderClass($gender_class)
    {
        $this->container['gender_class'] = $gender_class;

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


