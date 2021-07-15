# # ShipmentUpdateDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_on_hold** | **bool** | Send this attribute if you want to put this shipment on hold. | [optional]
**_picking** | **bool** | Send this attribute if you want to start picking this shipment. | [optional]
**_packing** | **bool** | Send this attribute if you want to start packing this shipment. | [optional]
**_ready_to_ship** | **bool** | Send this attribute if you want to mark this shipment as ready to ship. | [optional]
**_ship** | **bool** | Send this attribute if you want to mark this shipment as shipped. | [optional]
**_get_rates** | **bool** | Send this attribute if you want get the shipping rates from the associated carrier accounts. | [optional]
**selected_rate_id** | **string** | The selected purchase rate from the available shipping rates. | [optional]
**_purchase** | **bool** | Send this attribute if you want to purchase this shipment with the selected rate. | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
