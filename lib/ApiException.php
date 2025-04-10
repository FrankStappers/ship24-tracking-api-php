<?php
/**
 * ApiException
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

namespace Ship24\TrackingApi;

use \Exception;

/**
 * ApiException Class Doc Comment
 *
 * @category Class
 * @package  Ship24\TrackingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ApiException extends Exception
{
    /**
     * The HTTP body of the server response either as Json or string.
     *
     * @var \stdClass|string|null
     */
    protected $responseBody;

    /**
     * The HTTP header of the server response.
     *
     * @var string[][]|null
     */
    protected $responseHeaders;

    /**
     * The deserialized response object
     *
     * @var \stdClass|string|null
     */
    protected $responseObject;

    /**
     * Constructor
     *
     * @param string                $message         Error message
     * @param int                   $code            HTTP status code
     * @param string[][]|null       $responseHeaders HTTP response header
     * @param \stdClass|string|null $responseBody    HTTP decoded body of the server response either as \stdClass or string
     */
    public function __construct($message = "", $code = 0, $responseHeaders = [], $responseBody = null)
    {
        parent::__construct($message, $code);
        $this->responseHeaders = $responseHeaders;
        $this->responseBody = $responseBody;
    }

    /**
     * Gets the HTTP response header
     *
     * @return string[][]|null HTTP response header
     */
    public function getResponseHeaders()
    {
        return $this->responseHeaders;
    }

    /**
     * Gets the HTTP body of the server response either as Json or string
     *
     * @return \stdClass|string|null HTTP body of the server response either as \stdClass or string
     */
    public function getResponseBody()
    {
        return $this->responseBody;
    }

    /**
     * Sets the deserialized response object (during deserialization)
     *
     * @param mixed $obj Deserialized response object
     *
     * @return void
     */
    public function setResponseObject($obj)
    {
        $this->responseObject = $obj;
    }

    /**
     * Gets the deserialized response object (during deserialization)
     *
     * @return mixed the deserialized response object
     */
    public function getResponseObject()
    {
        return $this->responseObject;
    }
}
