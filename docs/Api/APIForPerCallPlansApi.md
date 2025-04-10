# Ship24\TrackingApi\APIForPerCallPlansApi

All URIs are relative to https://api.ship24.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTracking()**](APIForPerCallPlansApi.md#getTracking) | **POST** /public/v1/tracking/search | Get tracking results by tracking number |


## `getTracking()`

```php
getTracking($authorization, $content_type, $get_tracking_request): \Ship24\TrackingApi\Model\GetTracking201Response
```

Get tracking results by tracking number

This endpoint will return the `tracking` corresponding to the tracking number provided as a parameter.   The `tracking` object is detailed in the [SCHEMAS](/schemas/tracking) section.  For better accuracy, we strongly advise to provide extra information such as the origin country, destination postcode & country, and the shipping date.  > 🛑 You need an active \"Per-call\" subscription to use this endpoint. Our standard \"Per-shipment\" product & plans remain the best choice as it offers more features, allow faster tracking information fetching with less dependency on courier's system availability at a lower cost overall.   > 🛑 As this endpoint is synchronously fetching tracking results from couriers, **response time may be up to 1 minute, and results depend on the courier's system availability** at the time of the call.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ship24\TrackingApi\Api\APIForPerCallPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Bearer your_api_key; // string | Your `api_key` prefixed with `Bearer`.
$content_type = application/json; charset=utf-8; // string
$get_tracking_request = new \Ship24\TrackingApi\Model\GetTrackingRequest(); // \Ship24\TrackingApi\Model\GetTrackingRequest

try {
    $result = $apiInstance->getTracking($authorization, $content_type, $get_tracking_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIForPerCallPlansApi->getTracking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Your &#x60;api_key&#x60; prefixed with &#x60;Bearer&#x60;. | |
| **content_type** | **string**|  | [optional] |
| **get_tracking_request** | [**\Ship24\TrackingApi\Model\GetTrackingRequest**](../Model/GetTrackingRequest.md)|  | [optional] |

### Return type

[**\Ship24\TrackingApi\Model\GetTracking201Response**](../Model/GetTracking201Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
