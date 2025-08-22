# Ship24\TrackingApi\TrackersApi

All URIs are relative to https://api.ship24.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bulkCreateTrackers()**](TrackersApi.md#bulkCreateTrackers) | **POST** /public/v1/trackers/bulk | Bulk create trackers |
| [**createTracker()**](TrackersApi.md#createTracker) | **POST** /public/v1/trackers | Create a tracker |
| [**createTrackerAndGetTrackingResults()**](TrackersApi.md#createTrackerAndGetTrackingResults) | **POST** /public/v1/trackers/track | Create a tracker and get tracking results |
| [**getTrackerByTrackerId()**](TrackersApi.md#getTrackerByTrackerId) | **GET** /public/v1/trackers/{trackerId} | Get an existing tracker |
| [**getTrackingResultsOfTrackerByTrackerId()**](TrackersApi.md#getTrackingResultsOfTrackerByTrackerId) | **GET** /public/v1/trackers/{trackerId}/results | Get tracking results for an existing tracker |
| [**getTrackingResultsOfTrackersByTrackingNumber()**](TrackersApi.md#getTrackingResultsOfTrackersByTrackingNumber) | **GET** /public/v1/trackers/search/{trackingNumber}/results | Get tracking results for existing trackers by tracking number |
| [**listTrackers()**](TrackersApi.md#listTrackers) | **GET** /public/v1/trackers | List existing Trackers |
| [**resendWebhooks()**](TrackersApi.md#resendWebhooks) | **POST** /public/v1/trackers/{trackerId}/webhook-events/resend | Resend webhooks of an existing tracker |
| [**updateTrackerByTrackerId()**](TrackersApi.md#updateTrackerByTrackerId) | **PATCH** /public/v1/trackers/{trackerId} | Update an existing tracker |


## `bulkCreateTrackers()`

```php
bulkCreateTrackers($content_type, $authorization, $bulk_create_trackers_request): \Ship24\TrackingApi\Model\BulkCreateTrackersResponse
```

Bulk create trackers

This endpoint allows you to create up to 100 new `Trackers` in a single operation, based on the specified information. Once the `Trackers` are created, you will be able to receive webhook notifications and/or fetch their tracking results.  > While tracker creation is idempotent, this endpoint itself is not. Any duplicate within the request or any tracker parameters matching an existing tracker will not create a duplicate `Tracker`. However, providing different information in any of the fields will create a new `Tracker`, as it will be considered as a new shipment.  The response will include a summary of: - The number of trackers successfully created. - The number of trackers ignored because they already exist. - The number of trackers that could not be created due to errors.  Additionally, the response will provide details about the created trackers and any errors that occurred during the tracker creation process.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ship24\TrackingApi\Api\TrackersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = application/json; charset=utf-8; // string | application/json; charset=utf-8
$authorization = Bearer your_api_key; // string | Your `api_key` prefixed with `Bearer`.
$bulk_create_trackers_request = [{"trackingNumber":"S24DEMO456393","shipmentReference":"c6e4fef4-a816-b68f-4024-3b7e4c5a9f81","clientTrackerId":"3fa99515-3ca0-4901-85bb-056ee016799b","originCountryCode":"CN","destinationCountryCode":"US","destinationPostCode":"94901","shippingDate":"2021-03-01T11:09:00.000Z","courierCode":["us-post"],"courierName":"USPS Standard","trackingUrl":"https://tools.usps.com/go/TrackConfirmAction?tLabels=S24DEMO456393","orderNumber":"DF14R2022","settings":{"restrictTrackingToCourierCode":true}},{"trackingNumber":"S24DEMO788895","shipmentReference":"85bff7fa-38ed-b1ba-4c15-322e41d16221","clientTrackerId":"c284fa2c-0808-48ea-bb9e-05c9135dc127","originCountryCode":"CN","destinationCountryCode":"US","destinationPostCode":"94901","shippingDate":"2021-03-05T14:21:00.000Z","courierCode":["us-post"],"courierName":"USPS","trackingUrl":"https://tools.usps.com/go/TrackConfirmAction?tLabels=S24DEMO788895","orderNumber":"DF14R2024","settings":{"restrictTrackingToCourierCode":true}}]; // \Ship24\TrackingApi\Model\BulkCreateTrackersRequest

try {
    $result = $apiInstance->bulkCreateTrackers($content_type, $authorization, $bulk_create_trackers_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackersApi->bulkCreateTrackers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_type** | **string**| application/json; charset&#x3D;utf-8 | |
| **authorization** | **string**| Your &#x60;api_key&#x60; prefixed with &#x60;Bearer&#x60;. | |
| **bulk_create_trackers_request** | [**\Ship24\TrackingApi\Model\BulkCreateTrackersRequest**](../Model/BulkCreateTrackersRequest.md)|  | [optional] |

### Return type

[**\Ship24\TrackingApi\Model\BulkCreateTrackersResponse**](../Model/BulkCreateTrackersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTracker()`

```php
createTracker($content_type, $authorization, $tracker_create_request): \Ship24\TrackingApi\Model\CreateTracker201Response
```

Create a tracker

This endpoint allows you to create a new `Tracker`, based on the specified information. Once a `Tracker` is created, you will be able to receive webhook notifications and/or fetch its tracking result.  > This endpoint is idempotent, any subsequent calls with the same parameters won't duplicate `Tracker`. However, providing different information in any of the fields will create a new `Tracker`, as it will be considered as a new shipment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ship24\TrackingApi\Api\TrackersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = application/json; charset=utf-8; // string | application/json; charset=utf-8
$authorization = Bearer your_api_key; // string | Your `api_key` prefixed with `Bearer`.
$tracker_create_request = {"trackingNumber":"S24DEMO456393","shipmentReference":"c6e4fef4-a816-b68f-4024-3b7e4c5a9f81","clientTrackerId":"3fa99515-3ca0-4901-85bb-056ee016799b","originCountryCode":"CN","destinationCountryCode":"US","destinationPostCode":"94901","shippingDate":"2021-03-01T11:09:00.000Z","courierCode":["us-post"],"courierName":"USPS Standard","trackingUrl":"https://tools.usps.com/go/TrackConfirmAction?tLabels=S24DEMO456393","orderNumber":"DF14R2022","settings":{"restrictTrackingToCourierCode":true}}; // \Ship24\TrackingApi\Model\TrackerCreateRequest

try {
    $result = $apiInstance->createTracker($content_type, $authorization, $tracker_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackersApi->createTracker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_type** | **string**| application/json; charset&#x3D;utf-8 | |
| **authorization** | **string**| Your &#x60;api_key&#x60; prefixed with &#x60;Bearer&#x60;. | |
| **tracker_create_request** | [**\Ship24\TrackingApi\Model\TrackerCreateRequest**](../Model/TrackerCreateRequest.md)|  | [optional] |

### Return type

[**\Ship24\TrackingApi\Model\CreateTracker201Response**](../Model/CreateTracker201Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTrackerAndGetTrackingResults()`

```php
createTrackerAndGetTrackingResults($content_type, $authorization, $tracker_create_request): \Ship24\TrackingApi\Model\CreateTrackerAndGetTrackingResults200Response
```

Create a tracker and get tracking results

This endpoint creates a new `Tracker` on the specified tracking number , if it does not exist, and returns the tracking results directly. We advise using this endpoint if you are not interested in receiving webhook notifications and just want to fetch tracking results. This way, you can always call this unified endpoint to get tracking results, without worrying about `Tracker` creation and management.   > 🛑 During the very first call for a tracking number, this endpoint will create a `Tracker` and try to return tracking results synchronously if the courier allows it, which can delay the initial answer, at the benefit of getting the tracking results from the first call. **Initial response time may range from a few seconds, up to 1 minute, and results will depend on the courier's system availability at that time.** Subsequent calls will be instantaneous as the `Tracker` will already exist with tracking results ready to use and constantly updated.  > This endpoint is idempotent, any subsequent calls with the same parameters won't duplicate `Tracker`. However, providing different information in any of the fields will create a new `Tracker` as it will be considered as a new shipment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ship24\TrackingApi\Api\TrackersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = application/json; charset=utf-8; // string | application/json; charset=utf-8
$authorization = Bearer your_api_key; // string | Your `api_key` prefixed with `Bearer`.
$tracker_create_request = {trackingNumber=S24DEMO456393, shipmentReference=c6e4fef4-a816-b68f-4024-3b7e4c5a9f81, clientTrackerId=3fa99515-3ca0-4901-85bb-056ee016799b, originCountryCode=CN, destinationCountryCode=US, destinationPostCode=94901, shippingDate=2021-03-01T11:09:00.000Z, courierCode=[us-post], courierName=USPS Standard, trackingUrl=https://tools.usps.com/go/TrackConfirmAction?tLabels=S24DEMO456393, orderNumber=DF14R2022, settings={restrictTrackingToCourierCode=true}}; // \Ship24\TrackingApi\Model\TrackerCreateRequest

try {
    $result = $apiInstance->createTrackerAndGetTrackingResults($content_type, $authorization, $tracker_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackersApi->createTrackerAndGetTrackingResults: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_type** | **string**| application/json; charset&#x3D;utf-8 | |
| **authorization** | **string**| Your &#x60;api_key&#x60; prefixed with &#x60;Bearer&#x60;. | |
| **tracker_create_request** | [**\Ship24\TrackingApi\Model\TrackerCreateRequest**](../Model/TrackerCreateRequest.md)|  | [optional] |

### Return type

[**\Ship24\TrackingApi\Model\CreateTrackerAndGetTrackingResults200Response**](../Model/CreateTrackerAndGetTrackingResults200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTrackerByTrackerId()`

```php
getTrackerByTrackerId($authorization, $tracker_id, $search_by): \Ship24\TrackingApi\Model\Tracker
```

Get an existing tracker

This endpoint return an existing `Tracker` for a given `trackerId`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ship24\TrackingApi\Api\TrackersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Bearer your_api_key; // string | Your `api_key` prefixed with `Bearer`.
$tracker_id = 26148317-7502-d3ac-44a9-546d240ac0dd; // string | **Required** Id of the tracker, provided by Ship24 at creation. `clientTrackerId` can also be used in this field by employing the `searchBy` parameter.
$search_by = trackerId; // string | Parameter allowing to search either by `trackerId`or `clientTrackerId`. Default behavior is by `trackerId`.

try {
    $result = $apiInstance->getTrackerByTrackerId($authorization, $tracker_id, $search_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackersApi->getTrackerByTrackerId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Your &#x60;api_key&#x60; prefixed with &#x60;Bearer&#x60;. | |
| **tracker_id** | **string**| **Required** Id of the tracker, provided by Ship24 at creation. &#x60;clientTrackerId&#x60; can also be used in this field by employing the &#x60;searchBy&#x60; parameter. | |
| **search_by** | **string**| Parameter allowing to search either by &#x60;trackerId&#x60;or &#x60;clientTrackerId&#x60;. Default behavior is by &#x60;trackerId&#x60;. | [optional] |

### Return type

[**\Ship24\TrackingApi\Model\Tracker**](../Model/Tracker.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTrackingResultsOfTrackerByTrackerId()`

```php
getTrackingResultsOfTrackerByTrackerId($authorization, $tracker_id, $search_by): \Ship24\TrackingApi\Model\CreateTrackerAndGetTrackingResults200Response
```

Get tracking results for an existing tracker

This endpoint return the `Tracking` results of an existing `Tracker` matching with the given trackerId. As trackerId are unique, the `Trackings` array will always have only one item.   The `tracking` object is detailed in the [SCHEMAS](/schemas/tracking) section.  Unlike the `/v1/trackers/track` endpoint, a **`Tracker`** **must first be created on this tracking number before using this endpoint.** As a tracking number is not unique, the endpoint may return multiple `trackings` associated with different `Trackers`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ship24\TrackingApi\Api\TrackersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Bearer your_api_key; // string | Your `api_key` prefixed with `Bearer`.
$tracker_id = 26148317-7502-d3ac-44a9-546d240ac0dd; // string | **Required** Id of the tracker, provided by Ship24 at creation. `clientTrackerId` can also be used in this field by employing the `searchBy` parameter.
$search_by = trackerId; // string | Parameter allowing to search either by `trackerId`or `clientTrackerId`. Default behavior is by `trackerId`.

try {
    $result = $apiInstance->getTrackingResultsOfTrackerByTrackerId($authorization, $tracker_id, $search_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackersApi->getTrackingResultsOfTrackerByTrackerId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Your &#x60;api_key&#x60; prefixed with &#x60;Bearer&#x60;. | |
| **tracker_id** | **string**| **Required** Id of the tracker, provided by Ship24 at creation. &#x60;clientTrackerId&#x60; can also be used in this field by employing the &#x60;searchBy&#x60; parameter. | |
| **search_by** | **string**| Parameter allowing to search either by &#x60;trackerId&#x60;or &#x60;clientTrackerId&#x60;. Default behavior is by &#x60;trackerId&#x60;. | [optional] |

### Return type

[**\Ship24\TrackingApi\Model\CreateTrackerAndGetTrackingResults200Response**](../Model/CreateTrackerAndGetTrackingResults200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTrackingResultsOfTrackersByTrackingNumber()`

```php
getTrackingResultsOfTrackersByTrackingNumber($authorization, $tracking_number): \Ship24\TrackingApi\Model\CreateTrackerAndGetTrackingResults200Response
```

Get tracking results for existing trackers by tracking number

This endpoint will return the `tracking` result corresponding to the tracking number provided as a parameter.   The `tracking` object is detailed in the [SCHEMAS](/schemas/tracking) section.   Unlike the `/v1/trackers/track` endpoint, a **`Tracker`** **must first be created on this tracking number before using this endpoint.** As a tracking number is not unique, the endpoint may return multiple `trackings` associated with different `Trackers`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ship24\TrackingApi\Api\TrackersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Bearer your_api_key; // string | Your `api_key` prefixed with `Bearer`.
$tracking_number = S24DEMO456393; // string | **Required** Tracking number of the parcel.

try {
    $result = $apiInstance->getTrackingResultsOfTrackersByTrackingNumber($authorization, $tracking_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackersApi->getTrackingResultsOfTrackersByTrackingNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Your &#x60;api_key&#x60; prefixed with &#x60;Bearer&#x60;. | |
| **tracking_number** | **string**| **Required** Tracking number of the parcel. | |

### Return type

[**\Ship24\TrackingApi\Model\CreateTrackerAndGetTrackingResults200Response**](../Model/CreateTrackerAndGetTrackingResults200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTrackers()`

```php
listTrackers($authorization, $page, $limit, $sort): \Ship24\TrackingApi\Model\ListTrackers200Response
```

List existing Trackers

This endpoint return a list of all existing `Trackers`, using page-based pagination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ship24\TrackingApi\Api\TrackersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Bearer your_api_key; // string | Your `api_key` prefixed with `Bearer`.
$page = 1; // int | The page index, starting from 1.
$limit = 100; // int | The maximum number of trackers returned per page.
$sort = 1; // int | Defines the sorting order of trackers. Use `1` for ascending (`createdAt` oldest first) and `-1` for descending (`createdAt` newest first). The default is ascending (`1`) to ensure stable pagination.

try {
    $result = $apiInstance->listTrackers($authorization, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackersApi->listTrackers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Your &#x60;api_key&#x60; prefixed with &#x60;Bearer&#x60;. | |
| **page** | **int**| The page index, starting from 1. | |
| **limit** | **int**| The maximum number of trackers returned per page. | |
| **sort** | **int**| Defines the sorting order of trackers. Use &#x60;1&#x60; for ascending (&#x60;createdAt&#x60; oldest first) and &#x60;-1&#x60; for descending (&#x60;createdAt&#x60; newest first). The default is ascending (&#x60;1&#x60;) to ensure stable pagination. | [optional] |

### Return type

[**\Ship24\TrackingApi\Model\ListTrackers200Response**](../Model/ListTrackers200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`, `multipart/form-data`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resendWebhooks()`

```php
resendWebhooks($authorization, $tracker_id, $search_by): \Ship24\TrackingApi\Model\ResendWebhooks201Response
```

Resend webhooks of an existing tracker

This endpoint allows to resend all webhook messages of an existing tracker.   This can be useful in case you missed some webhook messages or if you need to reprocess them for any reason.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ship24\TrackingApi\Api\TrackersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Bearer your_api_key; // string | Your `api_key` prefixed with `Bearer`.
$tracker_id = 26148317-7502-d3ac-44a9-546d240ac0dd; // string | **Required** Id of the tracker, provided by Ship24 at creation. `clientTrackerId` can also be used in this field by employing the `searchBy` parameter.
$search_by = trackerId; // string | Parameter allowing to search either by `trackerId`or `clientTrackerId`. Default behavior is by `trackerId`.

try {
    $result = $apiInstance->resendWebhooks($authorization, $tracker_id, $search_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackersApi->resendWebhooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Your &#x60;api_key&#x60; prefixed with &#x60;Bearer&#x60;. | |
| **tracker_id** | **string**| **Required** Id of the tracker, provided by Ship24 at creation. &#x60;clientTrackerId&#x60; can also be used in this field by employing the &#x60;searchBy&#x60; parameter. | |
| **search_by** | **string**| Parameter allowing to search either by &#x60;trackerId&#x60;or &#x60;clientTrackerId&#x60;. Default behavior is by &#x60;trackerId&#x60;. | [optional] |

### Return type

[**\Ship24\TrackingApi\Model\ResendWebhooks201Response**](../Model/ResendWebhooks201Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTrackerByTrackerId()`

```php
updateTrackerByTrackerId($authorization, $tracker_id, $content_type, $search_by, $update_tracker_by_tracker_id_request): \Ship24\TrackingApi\Model\Tracker
```

Update an existing tracker

This endpoint allows to modify an existing `Tracker` matching with the given `trackerId`.    > Once the Tracker has gathered shipment tracking information, certain fields related to the shipment data cannot be modified. These include:  > - `courierCode`  > - `originCountryCode`  > - `destinationCountryCode`  > - `destinationPostCode`  > - `shippingDate`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ship24\TrackingApi\Api\TrackersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Bearer your_api_key; // string | Your `api_key` prefixed with `Bearer`.
$tracker_id = 26148317-7502-d3ac-44a9-546d240ac0dd; // string | **Required** Id of the tracker, provided by Ship24 at creation. `clientTrackerId` can also be used in this field by employing the `searchBy` parameter.
$content_type = application/json; charset=utf-8; // string | application/json; charset=utf-8
$search_by = trackerId; // string | Parameter allowing to search either by `trackerId`or `clientTrackerId`. Default behavior is by `trackerId`.
$update_tracker_by_tracker_id_request = {"isSubscribed":false,"originCountryCode":"CN","destinationCountryCode":"US","destinationPostCode":"94901","shippingDate":"2021-03-01T11:09:00.000Z","courierCode":["us-post"]}; // \Ship24\TrackingApi\Model\UpdateTrackerByTrackerIdRequest | Only the following property can be updated on a Tracker:

try {
    $result = $apiInstance->updateTrackerByTrackerId($authorization, $tracker_id, $content_type, $search_by, $update_tracker_by_tracker_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackersApi->updateTrackerByTrackerId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Your &#x60;api_key&#x60; prefixed with &#x60;Bearer&#x60;. | |
| **tracker_id** | **string**| **Required** Id of the tracker, provided by Ship24 at creation. &#x60;clientTrackerId&#x60; can also be used in this field by employing the &#x60;searchBy&#x60; parameter. | |
| **content_type** | **string**| application/json; charset&#x3D;utf-8 | [optional] |
| **search_by** | **string**| Parameter allowing to search either by &#x60;trackerId&#x60;or &#x60;clientTrackerId&#x60;. Default behavior is by &#x60;trackerId&#x60;. | [optional] |
| **update_tracker_by_tracker_id_request** | [**\Ship24\TrackingApi\Model\UpdateTrackerByTrackerIdRequest**](../Model/UpdateTrackerByTrackerIdRequest.md)| Only the following property can be updated on a Tracker: | [optional] |

### Return type

[**\Ship24\TrackingApi\Model\Tracker**](../Model/Tracker.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
