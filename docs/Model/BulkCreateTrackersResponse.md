# # BulkCreateTrackersResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Status of the bulk creation.  &#x60;success&#x60;: All trackers were created successfully or already existed. (Status code 200)  &#x60;partial&#x60;: Operation contains both successes and errors. (Status code 207)  &#x60;error&#x60;: All creations failed or error on request level. (Status codes 400, 403) |
**summary** | [**\Ship24\TrackingApi\Model\BulkCreateTrackersResponseSummary**](BulkCreateTrackersResponseSummary.md) |  | [optional]
**data** | [**\Ship24\TrackingApi\Model\BulkCreateTrackersResponseDataInner[]**](BulkCreateTrackersResponseDataInner.md) | Detailed information about each tracker creation. Null if status is &#x60;error&#x60;. | [optional]
**error** | [**\Ship24\TrackingApi\Model\BulkCreateTrackersResponseError**](BulkCreateTrackersResponseError.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
