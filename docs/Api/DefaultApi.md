# Ship24\TrackingApi\DefaultApi

All URIs are relative to https://api.ship24.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**receiveWebhooksHealthCheck()**](DefaultApi.md#receiveWebhooksHealthCheck) | **HEAD** /your-endpoint | Receive webhooks - Health check |
| [**receiveWebhooksTrackingResults()**](DefaultApi.md#receiveWebhooksTrackingResults) | **POST** /your-endpoint | Receive webhooks - Tracking results |


## `receiveWebhooksHealthCheck()`

```php
receiveWebhooksHealthCheck($authorization)
```

Receive webhooks - Health check

> This endpoint is **NOT** part of the Ship24 API but rather **has to be implemented on your side** in order to receive webhook messages. Ship24 will be probing this endpoint using a HEAD request to make sure your server is ready to receive webhooks. A HEAD request and response don't contain any body, you just need to return a 200 OK HTTP code to our HEAD requests. [Learn how to set up and use webhooks](https://docs.ship24.com/webhooks/overview).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ship24\TrackingApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Bearer your_webhook_secret; // string | Ship24 will send your allocated webhook secret in each request.

try {
    $apiInstance->receiveWebhooksHealthCheck($authorization);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->receiveWebhooksHealthCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Ship24 will send your allocated webhook secret in each request. | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `receiveWebhooksTrackingResults()`

```php
receiveWebhooksTrackingResults($authorization, $receive_webhooks_tracking_results_request)
```

Receive webhooks - Tracking results

> This endpoint is **NOT** part of the Ship24 API but rather **has to be implemented on your side** in order to receive webhook messages. Ship24 will be pushing tracking results to your endpoint using a `trackings` array containing `tracking` objects. The `tracking` object is detailed below as well as in [Schemas > Tracking](/schemas/tracking). [Learn how to set up and use webhooks](https://docs.ship24.com/webhooks/overview).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ship24\TrackingApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Bearer your_webhook_secret; // string | Ship24 will send your allocated webhook secret in each request.
$receive_webhooks_tracking_results_request = {"trackings":[{"metadata":{"generatedAt":"2023-01-19T09:12:39.052Z","messageId":"356a7f93-3ce5-4b49-b560-156537283df9"},"tracker":{"trackerId":"26148317-7502-d3ac-44a9-546d240ac0dd","trackingNumber":"S24DEMO456393"},"shipment":{"shipmentId":"f4f888d7-d140-423f-9a48-e0689d27e098","statusCode":"delivery_delivered","statusCategory":"delivery","statusMilestone":"delivered","originCountryCode":"US","destinationCountryCode":"CN","delivery":{"estimatedDeliveryDate":null,"service":null,"signedBy":null},"trackingNumbers":[{"tn":"S24DEMO456393"},{"tn":"S24DEMO169411"}],"recipient":{"name":null,"address":null,"postCode":"94901","city":null,"subdivision":null}},"events":[{"eventId":"ee8ebe96-4eae-4a91-9a99-8f3afa6a0f46","trackingNumber":"S24DEMO169411","eventTrackingNumber":"S24DEMO169411","status":"Delivered to the addressee","occurrenceDatetime":"2021-03-04T17:12:57","order":null,"location":"SAN RAFAEL, CA 94901","sourceCode":"usps-tracking","courierCode":"us-post","statusCode":"delivery_delivered","statusCategory":"delivery","statusMilestone":"delivered"},{"eventId":"ee8ebe96-4eae-4a91-9a99-8f3afa6a00ja","trackingNumber":"S24DEMO169411","eventTrackingNumber":"S24DEMO169411","status":"Out for Delivery","occurrenceDatetime":"2021-03-04T10:12:57","order":null,"location":"SAN RAFAEL, CA 94901","sourceCode":"usps-tracking","courierCode":"us-post","statusCode":"delivery_out_for_delivery","statusCategory":"delivery","statusMilestone":"out_for_delivery"},{"eventId":"ee8ebe96-4eae-4a91-9a99-8f3afa6a0765","trackingNumber":"S24DEMO169411","eventTrackingNumber":"S24DEMO169411","status":"Arrived at Hub, Your item arrived at the hub.","occurrenceDatetime":"2021-03-04T06:12:57","order":null,"location":"SAN RAFAEL, CA 94901","sourceCode":"usps-tracking","courierCode":"us-post","statusCode":null,"statusCategory":null,"statusMilestone":"in_transit"},{"eventId":"ee8ebe96-4eae-4a91-9a99-8f3afa6a0f67","trackingNumber":"S24DEMO169411","eventTrackingNumber":"S24DEMO169411","status":"Processed Through Regional Facility","occurrenceDatetime":"2021-03-03T17:12:57","order":null,"location":"LOS ANGELES CA INTERNATIONAL DISTRIBUTION CENTER","sourceCode":"usps-tracking","courierCode":"us-post","statusCode":null,"statusCategory":null,"statusMilestone":"in_transit"},{"eventId":"ee8ebe96-4eae-4a91-9a99-8f3afa6a0f24","trackingNumber":"S24DEMO169411","eventTrackingNumber":"S24DEMO169411","status":"Arrived at Regional Facility","occurrenceDatetime":"2021-03-03T15:38:57","order":null,"location":"LOS ANGELES CA INTERNATIONAL DISTRIBUTION CENTER","sourceCode":"usps-tracking","courierCode":"us-post","statusCode":null,"statusCategory":null,"statusMilestone":"in_transit"},{"eventId":"5adff7f7-c370-4026-9ff5-2ff4156ff2ff","trackingNumber":"S24DEMO169411","eventTrackingNumber":"S24DEMO456393","status":"Flight Departure","occurrenceDatetime":"2021-03-02T23:24:50","order":null,"location":"Beijing airport","sourceCode":"china-post-tracking","courierCode":"cn-post","statusCode":null,"statusCategory":null,"statusMilestone":"in_transit"},{"eventId":"918c20dc-9a9b-4588-bf62-ded9761d9621","trackingNumber":"S24DEMO169411","eventTrackingNumber":"S24DEMO456393","status":"Dispatched from Office of Exchange","occurrenceDatetime":"2021-03-02T22:23:41","order":null,"location":"Beijing","sourceCode":"china-post-tracking","courierCode":"cn-post","statusCode":null,"statusCategory":null,"statusMilestone":"in_transit"},{"eventId":"b8dabe5f-1022-41c5-ad3a-8c8e4aacc965","trackingNumber":"S24DEMO169411","eventTrackingNumber":"S24DEMO456393","status":"Departure from Local Sorting Center","occurrenceDatetime":"2021-03-02T19:24:57","order":null,"location":"Beijing","sourceCode":"china-post-tracking","courierCode":"cn-post","statusCode":null,"statusCategory":null,"statusMilestone":"in_transit"},{"eventId":"ee8ebe96-4eae-4a91-9a99-6f3afa6a0f45","trackingNumber":"S24DEMO169411","eventTrackingNumber":"S24DEMO456393","status":"Package Received","occurrenceDatetime":"2021-03-02T15:38:57","order":null,"location":"Beijing","sourceCode":"china-post-tracking","courierCode":"cn-post","statusCode":null,"statusCategory":"transit","statusMilestone":"in_transit"}],"statistics":{"timestamps":{"infoReceivedDatetime":"2021-03-02T15:38:57","inTransitDatetime":"2021-03-02T15:38:57","outForDeliveryDatetime":"2021-03-04T10:12:57","failedAttemptDatetime":null,"availableForPickupDatetime":null,"exceptionDatetime":null,"deliveredDatetime":"2021-03-04T17:12:57"}}}]}; // \Ship24\TrackingApi\Model\ReceiveWebhooksTrackingResultsRequest | Ship24 will send the following JSON body:

try {
    $apiInstance->receiveWebhooksTrackingResults($authorization, $receive_webhooks_tracking_results_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->receiveWebhooksTrackingResults: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Ship24 will send your allocated webhook secret in each request. | [optional] |
| **receive_webhooks_tracking_results_request** | [**\Ship24\TrackingApi\Model\ReceiveWebhooksTrackingResultsRequest**](../Model/ReceiveWebhooksTrackingResultsRequest.md)| Ship24 will send the following JSON body: | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
