# # UpdateTrackerByTrackerIdRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_subscribed** | **bool** | Setting at &#x60;false&#x60; will unsubscribe you from the &#x60;Tracker&#x60;. Once unsubscribed, you will still be able to fetch the existing tracking results but Ship24 won&#39;t search for new data or send webhook notifications. &#x60;Trackers&#x60; are automatically disabled after the parcel delivery or after a long period without any new events. Manually unsubscribing your tracker is not useful, except if you wish to stop receiving webhooks on it or if you need to reuse the &#x60;clientTrackerId&#x60; value in a new &#x60;Tracker&#x60;. | [optional]
**courier_code** | **string[]** | Code of the courier(s) handling the shipment (Up to 3 max) (see Couriers list section)  - 📌 Recommended to improve tracking accuracy | [optional]
**origin_country_code** | **string** | Sender country code. | [optional]
**destination_country_code** | **string** | Recipient country code - 📌 Recommended to improve tracking accuracy | [optional]
**destination_post_code** | **string** | Recipient Post code (or ZIP code)  - 📌 Recommended to improve tracking accuracy | [optional]
**shipping_date** | **\DateTime** | Date at which the shipment has been shipped  - 📌 Recommended to improve tracking accuracy: providing the shipping date helps us accurately identify the shipment and improves our ability to retrieve the correct data. However, an inaccurate shipping date could cause our system to exclude the right shipment. Therefore, please ensure the provided shipping date aligns closely with the actual shipment date, give or take a few days. [Format](http://docs.ship24.com/data-format#logistics-date-and-time) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
