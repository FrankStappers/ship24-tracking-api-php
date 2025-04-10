# Ship24\TrackingApi\CouriersApi

All URIs are relative to https://api.ship24.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCouriers()**](CouriersApi.md#getCouriers) | **GET** /public/v1/couriers | Get all couriers |


## `getCouriers()`

```php
getCouriers($authorization): \Ship24\TrackingApi\Model\GetCouriers200Response
```

Get all couriers

This endpoint will return the list of all couriers supported by Ship24, identified by their `courierCode`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ship24\TrackingApi\Api\CouriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Bearer your_api_key; // string | Your `api_key` prefixed with `Bearer`.

try {
    $result = $apiInstance->getCouriers($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouriersApi->getCouriers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Your &#x60;api_key&#x60; prefixed with &#x60;Bearer&#x60;. | |

### Return type

[**\Ship24\TrackingApi\Model\GetCouriers200Response**](../Model/GetCouriers200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
