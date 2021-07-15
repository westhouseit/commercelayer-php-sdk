# # ParcelDataAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **string** | Unique identifier for the parcel | [optional]
**weight** | **float** | The parcel weight, used to automatically calculate the tax rates from the available carrier accounts. | [optional]
**unit_of_weight** | **string** | The unit of weight. Can be one of &#39;gr&#39;, or &#39;oz&#39;. | [optional]
**eel_pfc** | **string** | When shipping outside the US, you need to provide either an Exemption and Exclusion Legend (EEL) code or a Proof of Filing Citation (PFC). Which you need is based on the value of the goods being shipped. Value can be one of \&quot;EEL\&quot; o \&quot;PFC\&quot;. | [optional]
**contents_type** | **string** | The type of item you are sending. Can be one of &#39;merchandise&#39;, &#39;gift&#39;, &#39;documents&#39;, &#39;returned_goods&#39;, &#39;sample&#39;, or &#39;other&#39;. | [optional]
**contents_explanation** | **string** | If you specify &#39;other&#39; in the &#39;contents_type&#39; attribute, you must supply a brief description in this attribute. | [optional]
**customs_certify** | **bool** | Indicates if the provided information is accurate | [optional]
**customs_signer** | **string** | This is the name of the person who is certifying that the information provided on the customs form is accurate. Use a name of the person in your organization who is responsible for this. | [optional]
**non_delivery_option** | **string** | In case the shipment cannot be delivered, this option tells the carrier what you want to happen to the parcel. You can pass either &#39;return&#39;, or &#39;abandon&#39;. The value defaults to &#39;return&#39;. If you pass &#39;abandon&#39;, you will not receive the parcel back if it cannot be delivered. | [optional]
**restriction_type** | **string** | Describes if your parcel requires any special treatment or quarantine when entering the country. Can be one of &#39;none&#39;, &#39;other&#39;, &#39;quarantine&#39;, or &#39;sanitary_phytosanitary_inspection&#39;. | [optional]
**restriction_comments** | **string** | If you specify &#39;other&#39; in the restriction type, you must supply a brief description of what is required. | [optional]
**customs_info_required** | **bool** | Indicates if the parcel requires customs info to get the shipping rates. | [optional]
**shipping_label_url** | **string** | The shipping label url, ready to be downloaded and printed. | [optional]
**shipping_label_file_type** | **string** | The shipping label file type. One of &#39;application/pdf&#39;, &#39;application/zpl&#39;, &#39;application/epl2&#39;, or &#39;image/png&#39;. | [optional]
**shipping_label_size** | **string** | The shipping label size. | [optional]
**shipping_label_resolution** | **string** | The shipping label resolution. | [optional]
**tracking_number** | **string** | The tracking number associated to this parcel. | [optional]
**tracking_status** | **string** | The tracking status for this parcel, automatically updated in real time by the shipping carrier. | [optional]
**tracking_status_detail** | **string** | Additional information about the tracking status, automatically updated in real time by the shipping carrier. | [optional]
**tracking_status_updated_at** | **string** | Time at which the parcel&#39;s tracking status was last updated. | [optional]
**tracking_details** | **string** | The parcel&#39;s full tracking history, automatically updated in real time by the shipping carrier. | [optional]
**carrier_weight_oz** | **string** | The weight of the parcel as measured by the carrier in ounces (if available) | [optional]
**signed_by** | **string** | The name of the person who signed for the parcel (if available) | [optional]
**incoterm** | **string** | The type of Incoterm (if available). | [optional]
**id** | **string** | Unique identifier for the resource (hash). | [optional]
**created_at** | **string** | Time at which the resource was created. | [optional]
**updated_at** | **string** | Time at which the resource was last updated. | [optional]
**reference** | **string** | A string that you can use to add any external identifier to the resource. This can be useful for integrating the resource to an external system, like an ERP, a marketing tool, a CRM, or whatever. | [optional]
**reference_origin** | **string** | Any identifier of the third party system that defines the reference code | [optional]
**metadata** | **object** | Set of key-value pairs that you can attach to the resource. This can be useful for storing additional information about the resource in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
