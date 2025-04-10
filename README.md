# OpenAPIClient-php

## Getting started

Make sure to read the [Getting started](https://docs.ship24.com/getting-started) section of our [API Documentation](https://docs.ship24.com/) before using the endpoints presented below.
## Documentation structure

Use the top navigation bar to switch from:

- Our [API Documentation](https://docs.ship24.com/), which contains a comprehensive explanation of how our API works.
- Our [API Reference](https://docs.ship24.com/tracking-api-reference/), which contains the specification of each of our endpoints.
- Our [Support](https://docs.ship24.com/support/introduction) section, which contains help articles for most of the common questions and issues you may encounter.

## Import our documentation into your HTTP client

Our API Reference is available as an Open API 3.1 format file, which is supported by most HTTP clients.

- Latest version: https://docs.ship24.com/assets/openapi/ship24-tracking-api.yaml

| <!-- -->                                                     | <!-- -->                                                                                                                                                     |
| ------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| ![Postman](/img/postman-logo.svg) Postman                    | In Postman, click on \"Import\", go on the \"Link\" tab, and paste this URL `https://docs.ship24.com/assets/openapi/ship24-tracking-api.yaml`                           |
| <img src=\"/img/insomnia-logo.png\" width=\"32\"></img> Insomnia | From Insomnia preferences, locate the \"Import data\" option, choose \"From URL\", and paste this URL `https://docs.ship24.com/assets/openapi/ship24-tracking-api.yaml` |

For more information, please visit [https://www.ship24.com/contact-us](https://www.ship24.com/contact-us).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://api.ship24.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*APIForPerCallPlansApi* | [**getTracking**](docs/Api/APIForPerCallPlansApi.md#gettracking) | **POST** /public/v1/tracking/search | Get tracking results by tracking number
*CouriersApi* | [**getCouriers**](docs/Api/CouriersApi.md#getcouriers) | **GET** /public/v1/couriers | Get all couriers
*TrackersApi* | [**bulkCreateTrackers**](docs/Api/TrackersApi.md#bulkcreatetrackers) | **POST** /public/v1/trackers/bulk | Bulk create trackers
*TrackersApi* | [**createTracker**](docs/Api/TrackersApi.md#createtracker) | **POST** /public/v1/trackers | Create a tracker
*TrackersApi* | [**createTrackerAndGetTrackingResults**](docs/Api/TrackersApi.md#createtrackerandgettrackingresults) | **POST** /public/v1/trackers/track | Create a tracker and get tracking results
*TrackersApi* | [**getTrackerByTrackerId**](docs/Api/TrackersApi.md#gettrackerbytrackerid) | **GET** /public/v1/trackers/{trackerId} | Get an existing tracker
*TrackersApi* | [**getTrackingResultsOfTrackerByTrackerId**](docs/Api/TrackersApi.md#gettrackingresultsoftrackerbytrackerid) | **GET** /public/v1/trackers/{trackerId}/results | Get tracking results for an existing tracker
*TrackersApi* | [**getTrackingResultsOfTrackersByTrackingNumber**](docs/Api/TrackersApi.md#gettrackingresultsoftrackersbytrackingnumber) | **GET** /public/v1/trackers/search/{trackingNumber}/results | Get tracking results for existing trackers by tracking number
*TrackersApi* | [**listTrackers**](docs/Api/TrackersApi.md#listtrackers) | **GET** /public/v1/trackers/bulk | List existing Trackers
*TrackersApi* | [**resendWebhooks**](docs/Api/TrackersApi.md#resendwebhooks) | **POST** /public/v1/trackers/{trackerId}/webhook-events/resend | Resend webhooks of an existing tracker
*TrackersApi* | [**updateTrackerByTrackerId**](docs/Api/TrackersApi.md#updatetrackerbytrackerid) | **PATCH** /public/v1/trackers/{trackerId} | Update an existing tracker

## Models

- [BulkCreateTrackersResponseDataInner](docs/Model/BulkCreateTrackersResponseDataInner.md)
- [BulkCreateTrackersResponseDataInnerErrorsInner](docs/Model/BulkCreateTrackersResponseDataInnerErrorsInner.md)
- [BulkCreateTrackersResponseError](docs/Model/BulkCreateTrackersResponseError.md)
- [BulkCreateTrackersResponseSummary](docs/Model/BulkCreateTrackersResponseSummary.md)
- [CreateTracker201Response](docs/Model/CreateTracker201Response.md)
- [CreateTracker201ResponseData](docs/Model/CreateTracker201ResponseData.md)
- [CreateTrackerAndGetTrackingResults200Response](docs/Model/CreateTrackerAndGetTrackingResults200Response.md)
- [CreateTrackerAndGetTrackingResults200ResponseData](docs/Model/CreateTrackerAndGetTrackingResults200ResponseData.md)
- [CreateTrackerAndGetTrackingResults200ResponseDataTrackingsInner](docs/Model/CreateTrackerAndGetTrackingResults200ResponseDataTrackingsInner.md)
- [ErrorResponseFormatErrorsInner](docs/Model/ErrorResponseFormatErrorsInner.md)
- [GetCouriers200Response](docs/Model/GetCouriers200Response.md)
- [GetCouriers200ResponseData](docs/Model/GetCouriers200ResponseData.md)
- [GetCouriers200ResponseDataCouriersInner](docs/Model/GetCouriers200ResponseDataCouriersInner.md)
- [GetTracking201Response](docs/Model/GetTracking201Response.md)
- [GetTracking201ResponseData](docs/Model/GetTracking201ResponseData.md)
- [GetTracking201ResponseDataTrackingsInner](docs/Model/GetTracking201ResponseDataTrackingsInner.md)
- [GetTrackingRequest](docs/Model/GetTrackingRequest.md)
- [ListTrackers200Response](docs/Model/ListTrackers200Response.md)
- [ListTrackers200Response1](docs/Model/ListTrackers200Response1.md)
- [ListTrackers200ResponseData](docs/Model/ListTrackers200ResponseData.md)
- [ReceiveWebhooksTrackingResultsRequest](docs/Model/ReceiveWebhooksTrackingResultsRequest.md)
- [ReceiveWebhooksTrackingResultsRequestTrackingsInner](docs/Model/ReceiveWebhooksTrackingResultsRequestTrackingsInner.md)
- [ResendWebhooks201Response](docs/Model/ResendWebhooks201Response.md)
- [ResendWebhooks201ResponseData](docs/Model/ResendWebhooks201ResponseData.md)
- [ResendWebhooks201ResponseDataSummary](docs/Model/ResendWebhooks201ResponseDataSummary.md)
- [ShipmentDelivery](docs/Model/ShipmentDelivery.md)
- [ShipmentRecipient](docs/Model/ShipmentRecipient.md)
- [ShipmentTrackingNumbersInner](docs/Model/ShipmentTrackingNumbersInner.md)
- [StatisticsTimestamps](docs/Model/StatisticsTimestamps.md)
- [TrackerCreateRequestRecipient](docs/Model/TrackerCreateRequestRecipient.md)
- [TrackerCreateRequestSettings](docs/Model/TrackerCreateRequestSettings.md)
- [Tracking](docs/Model/Tracking.md)
- [UpdateTrackerByTrackerIdRequest](docs/Model/UpdateTrackerByTrackerIdRequest.md)

## Authorization

Authentication schemes defined for the API:
### Authorization

- **Type**: API key
- **API key parameter name**: Bearer your_api_key
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Generator version: `7.12.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
