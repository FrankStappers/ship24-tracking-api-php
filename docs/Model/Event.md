# # Event

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_id** | **string** | Unique identifier of the event in Ship24 system. | [optional]
**tracking_number** | **string** | The original tracking number used to create the Tracker. | [optional]
**event_tracking_number** | **string** | The tracking number associated with the event, on which the event has been found. | [optional]
**status** | **string** | Event raw text. | [optional]
**occurrence_datetime** | **string** | [Date and time](http://docs.ship24.com/data-format#logistics-date-and-time) at which the event occurred. | [optional]
**order** | **int** | Indicate the order of the events in case the occurrenceDatetime is the same between multiple events (lower is older). | [optional]
**location** | **string** | Location raw text of the event. | [optional]
**source_code** | **string** | Internal code of the source used to get this event. Please note that those codes may evolve at any point in time. | [optional]
**courier_code** | **string** | Code of the courier linked to this event, refers to our Couriers list. Please note that those codes may evolve at any point in time. | [optional]
**status_code** | **string** | [statusCode](https://docs.ship24.com/status/#statuscode-and-statuscategory) of the event. | [optional]
**status_category** | **string** | [statusCategory](https://docs.ship24.com/status/#statuscode-and-statuscategory) of the event. | [optional]
**status_milestone** | **string** | [statusMilestone](https://docs.ship24.com/status/#statusmilestone) of the shipment at the time of the event. | [optional]
**datetime** | **\DateTime** |  | [optional]
**utc_offset** | **string** |  | [optional]
**has_no_time** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
