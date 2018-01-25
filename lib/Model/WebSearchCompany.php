<?php
/**
 * WebSearchCompany
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * api.riskscreen.com
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
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
 * WebSearchCompany Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WebSearchCompany implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WebSearchCompany';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company_name' => 'string',
        'company_name_accuracy_percent' => 'int',
        'search_ref' => 'string',
        'search_watch_lists' => 'bool',
        'search_sanctions' => 'bool',
        'display_result_details' => 'bool',
        'display_filtered_results_only' => 'bool',
        'filters' => 'map[string,string]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'company_name' => null,
        'company_name_accuracy_percent' => 'int32',
        'search_ref' => null,
        'search_watch_lists' => null,
        'search_sanctions' => null,
        'display_result_details' => null,
        'display_filtered_results_only' => null,
        'filters' => null
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
        'company_name' => 'CompanyName',
        'company_name_accuracy_percent' => 'CompanyNameAccuracyPercent',
        'search_ref' => 'SearchRef',
        'search_watch_lists' => 'SearchWatchLists',
        'search_sanctions' => 'SearchSanctions',
        'display_result_details' => 'DisplayResultDetails',
        'display_filtered_results_only' => 'DisplayFilteredResultsOnly',
        'filters' => 'Filters'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_name' => 'setCompanyName',
        'company_name_accuracy_percent' => 'setCompanyNameAccuracyPercent',
        'search_ref' => 'setSearchRef',
        'search_watch_lists' => 'setSearchWatchLists',
        'search_sanctions' => 'setSearchSanctions',
        'display_result_details' => 'setDisplayResultDetails',
        'display_filtered_results_only' => 'setDisplayFilteredResultsOnly',
        'filters' => 'setFilters'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_name' => 'getCompanyName',
        'company_name_accuracy_percent' => 'getCompanyNameAccuracyPercent',
        'search_ref' => 'getSearchRef',
        'search_watch_lists' => 'getSearchWatchLists',
        'search_sanctions' => 'getSearchSanctions',
        'display_result_details' => 'getDisplayResultDetails',
        'display_filtered_results_only' => 'getDisplayFilteredResultsOnly',
        'filters' => 'getFilters'
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
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['company_name_accuracy_percent'] = isset($data['company_name_accuracy_percent']) ? $data['company_name_accuracy_percent'] : null;
        $this->container['search_ref'] = isset($data['search_ref']) ? $data['search_ref'] : null;
        $this->container['search_watch_lists'] = isset($data['search_watch_lists']) ? $data['search_watch_lists'] : null;
        $this->container['search_sanctions'] = isset($data['search_sanctions']) ? $data['search_sanctions'] : null;
        $this->container['display_result_details'] = isset($data['display_result_details']) ? $data['display_result_details'] : null;
        $this->container['display_filtered_results_only'] = isset($data['display_filtered_results_only']) ? $data['display_filtered_results_only'] : null;
        $this->container['filters'] = isset($data['filters']) ? $data['filters'] : null;
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
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name company_name
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets company_name_accuracy_percent
     *
     * @return int
     */
    public function getCompanyNameAccuracyPercent()
    {
        return $this->container['company_name_accuracy_percent'];
    }

    /**
     * Sets company_name_accuracy_percent
     *
     * @param int $company_name_accuracy_percent company_name_accuracy_percent
     *
     * @return $this
     */
    public function setCompanyNameAccuracyPercent($company_name_accuracy_percent)
    {
        $this->container['company_name_accuracy_percent'] = $company_name_accuracy_percent;

        return $this;
    }

    /**
     * Gets search_ref
     *
     * @return string
     */
    public function getSearchRef()
    {
        return $this->container['search_ref'];
    }

    /**
     * Sets search_ref
     *
     * @param string $search_ref search_ref
     *
     * @return $this
     */
    public function setSearchRef($search_ref)
    {
        $this->container['search_ref'] = $search_ref;

        return $this;
    }

    /**
     * Gets search_watch_lists
     *
     * @return bool
     */
    public function getSearchWatchLists()
    {
        return $this->container['search_watch_lists'];
    }

    /**
     * Sets search_watch_lists
     *
     * @param bool $search_watch_lists search_watch_lists
     *
     * @return $this
     */
    public function setSearchWatchLists($search_watch_lists)
    {
        $this->container['search_watch_lists'] = $search_watch_lists;

        return $this;
    }

    /**
     * Gets search_sanctions
     *
     * @return bool
     */
    public function getSearchSanctions()
    {
        return $this->container['search_sanctions'];
    }

    /**
     * Sets search_sanctions
     *
     * @param bool $search_sanctions search_sanctions
     *
     * @return $this
     */
    public function setSearchSanctions($search_sanctions)
    {
        $this->container['search_sanctions'] = $search_sanctions;

        return $this;
    }

    /**
     * Gets display_result_details
     *
     * @return bool
     */
    public function getDisplayResultDetails()
    {
        return $this->container['display_result_details'];
    }

    /**
     * Sets display_result_details
     *
     * @param bool $display_result_details display_result_details
     *
     * @return $this
     */
    public function setDisplayResultDetails($display_result_details)
    {
        $this->container['display_result_details'] = $display_result_details;

        return $this;
    }

    /**
     * Gets display_filtered_results_only
     *
     * @return bool
     */
    public function getDisplayFilteredResultsOnly()
    {
        return $this->container['display_filtered_results_only'];
    }

    /**
     * Sets display_filtered_results_only
     *
     * @param bool $display_filtered_results_only display_filtered_results_only
     *
     * @return $this
     */
    public function setDisplayFilteredResultsOnly($display_filtered_results_only)
    {
        $this->container['display_filtered_results_only'] = $display_filtered_results_only;

        return $this;
    }

    /**
     * Gets filters
     *
     * @return map[string,string]
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     *
     * @param map[string,string] $filters filters
     *
     * @return $this
     */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;

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


