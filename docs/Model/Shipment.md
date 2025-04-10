# # Shipment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_id** | **string** | Unique identifier of the parcel in Ship24 system. | [optional]
**status_code** | **string** | [statusCode](https://docs.ship24.com/status/#statuscode-and-statuscategory) of the shipment. | [optional]
**status_category** | **string** | [statusCategory](https://docs.ship24.com/status/#statuscode-and-statuscategory) of the shipment. | [optional]
**status_milestone** | **string** | [statusMilestone](https:docs.ship24.com/status/#statusmilestone) of the shipment. | [optional]
**origin_country_code** | **string** | Detected country code of origin. | [optional]
**destination_country_code** | **string** | Detected country code of destination. | [optional]
**delivery** | [**\Ship24\TrackingApi\Model\ShipmentDelivery**](ShipmentDelivery.md) |  | [optional]
**tracking_numbers** | [**\Ship24\TrackingApi\Model\ShipmentTrackingNumbersInner[]**](ShipmentTrackingNumbersInner.md) | List of tracking numbers linked to the shipment. | [optional]
**recipient** | [**\Ship24\TrackingApi\Model\ShipmentRecipient**](ShipmentRecipient.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
