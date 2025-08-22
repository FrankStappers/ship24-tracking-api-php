# # GetTrackingRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tracking_number** | **string** | Tracking number of the shipment. | [optional]
**origin_country_code** | **string** | Sender country code - 📌 Recommended to improve tracking accuracy | [optional]
**destination_country_code** | **string** | Recipient country code - 📌 Recommended to improve tracking accuracy | [optional]
**destination_post_code** | **string** | Recipient Post code (or ZIP code) - 📌 Recommended to improve tracking accuracy | [optional]
**shipping_date** | **\DateTime** | Date at which the shipment has been shipped  - 📌 Recommended to improve tracking accuracy: providing the shipping date helps us accurately identify the shipment and improves our ability to retrieve the correct data. However, an inaccurate shipping date could cause our system to exclude the right shipment. Therefore, please ensure the provided shipping date aligns closely with the actual shipment date, give or take a few days. [Format](http://docs.ship24.com/data-format#logistics-date-and-time) | [optional]
**courier_code** | **mixed[]** | Code of the courier(s) handling the shipment (Up to 3 max) (see Couriers list section)  - 📌 Recommended to improve tracking accuracy | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
