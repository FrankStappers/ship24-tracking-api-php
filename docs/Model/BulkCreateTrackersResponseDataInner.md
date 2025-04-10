# # BulkCreateTrackersResponseDataInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_status** | **string** | Status of the tracker creation. |
**input_data** | [**\Ship24\TrackingApi\Model\TrackerCreateRequest**](TrackerCreateRequest.md) | Payload used to create the tracker. |
**tracker** | [**\Ship24\TrackingApi\Model\Tracker**](Tracker.md) | Tracker object. Null if &#x60;status&#x60; is &#x60;error&#x60;. | [optional]
**errors** | [**\Ship24\TrackingApi\Model\BulkCreateTrackersResponseDataInnerErrorsInner[]**](BulkCreateTrackersResponseDataInnerErrorsInner.md) | [Error details](https://docs.ship24.com/errors#error-response-format) about a single tracker creation. Null if &#x60;itemStatus&#x60; is not &#x60;error&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
