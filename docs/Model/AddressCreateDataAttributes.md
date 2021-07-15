# # AddressCreateDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**business** | **bool** | Indicates if it&#39;s a business or a personal address | [optional]
**first_name** | **string** | Address first name (personal) | [optional]
**last_name** | **string** | Address last name (personal) | [optional]
**company** | **string** | Address company name (business) | [optional]
**line_1** | **string** | Address line 1, i.e. Street address, PO Box |
**line_2** | **string** | Address line 2, i.e. Apartment, Suite, Building | [optional]
**city** | **string** | Address city |
**zip_code** | **string** | ZIP or postal code | [optional]
**state_code** | **string** | State, province or region code. |
**country_code** | **string** | The international 2-letter country code as defined by the ISO 3166-1 standard |
**phone** | **string** | Phone number (including extension). |
**email** | **string** | Email address. | [optional]
**notes** | **string** | A free notes attached to the address. When used as a shipping address, this can be useful to let the customers add specific delivery instructions. | [optional]
**lat** | **float** | The address geocoded latitude. This is automatically generated when creating a shipping/billing address for an order and a valid geocoder is attached to the order&#39;s market. | [optional]
**lng** | **float** | The address geocoded longitude. This is automatically generated when creating a shipping/billing address for an order and a valid geocoder is attached to the order&#39;s market. | [optional]
**billing_info** | **string** | Customer&#39;s billing information (i.e. VAT number, codice fiscale) | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
