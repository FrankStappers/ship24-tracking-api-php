# # Tracker

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tracker_id** | **string** | The id of the tracker that is providing this tracking. |
**tracking_number** | **string** | The tracking number which the tracker is following. |
**shipment_reference** | **string** | The &#x60;shipmentReference&#x60; you provided at the tracker&#39;s creation. |
**courier_code** | **string[]** | Code of the courier(s) handling the shipment. | [optional]
**client_tracker_id** | **string** | The &#x60;clientTrackerId&#x60; you provided at the tracker&#39;s creation. |
**is_subscribed** | **bool** | Indicates whether the tracker is active. A value of &#x60;false&#x60; means the tracker is archived and will not be used for tracking. |
**is_tracked** | **bool** | Indicates whether we are actively tracking the parcel. A value of &#x60;true&#x60; means new data is being searched for, while &#x60;false&#x60; indicates tracking has stopped due to delivery, inactivity, or unsubscription. Existing tracking results will remain accessible; however, new data will not be fetched, and notifications will no longer be sent. |
**created_at** | **\DateTime** | The date and time at which the tracker was created. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
