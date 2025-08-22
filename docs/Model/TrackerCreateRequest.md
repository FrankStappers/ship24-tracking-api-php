# # TrackerCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tracking_number** | **string** | Tracking number of the shipment. |
**shipment_reference** | **string** | Your reference for this shipment. Will be provided in our webhooks or API responses for this tracker. | [optional]
**client_tracker_id** | **string** | Your unique identifier for this shipment. Will be provided in our webhooks or API responses for this tracker. | [optional]
**origin_country_code** | **string** | Sender country code. | [optional]
**destination_country_code** | **string** | Recipient country code - 📌 Recommended to improve tracking accuracy | [optional]
**destination_post_code** | **string** | Recipient Post code (or ZIP code)  - 📌 Recommended to improve tracking accuracy | [optional]
**courier_account** | **string** | Courier account | [optional]
**shipping_date** | **\DateTime** | Date at which the shipment has been shipped  - 📌 Recommended to improve tracking accuracy: providing the shipping date helps us accurately identify the shipment and improves our ability to retrieve the correct data. However, an inaccurate shipping date could cause our system to exclude the right shipment. Therefore, please ensure the provided shipping date aligns closely with the actual shipment date, give or take a few days. [Format](http://docs.ship24.com/data-format#logistics-date-and-time) | [optional]
**courier_code** | **string[]** | Code of the courier(s) handling the shipment (Up to 3 max) (see Couriers list section)  - 📌 Recommended to improve tracking accuracy | [optional]
**courier_name** | **string** | Courier name and/or service. | [optional]
**tracking_url** | **string** | Tracking URL of the courier. | [optional]
**order_number** | **string** | Order number in case of an eCommerce order. | [optional]
**title** | **string** | Title for this shipment, visible on the Tracking Dashboard. | [optional]
**recipient** | [**\Ship24\TrackingApi\Model\TrackerCreateRequestRecipient**](TrackerCreateRequestRecipient.md) |  | [optional]
**settings** | [**\Ship24\TrackingApi\Model\TrackerCreateRequestSettings**](TrackerCreateRequestSettings.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
