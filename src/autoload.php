<?php

/**
 * @param $class
 */
function autoload_65797fa19198960091bc2c17cfc008ff($class)
{
	/** @noinspection ClassConstantCanBeUsedInspection */
	$classes = array(
        'Bring\BookingService' => __DIR__ .'/BookingService.php',
        'Bring\cargoInformation' => __DIR__ .'/cargoInformation.php',
        'Bring\customerInformation' => __DIR__ .'/customerInformation.php',
        'Bring\parcelsInformation' => __DIR__ .'/parcelsInformation.php',
        'Bring\pickupAddress' => __DIR__ .'/pickupAddress.php',
        'Bring\pickupDetails' => __DIR__ .'/pickupDetails.php',
        'Bring\BookingRequestType' => __DIR__ .'/BookingRequestType.php',
        'Bring\consignments' => __DIR__ .'/consignments.php',
        'Bring\ConsignmentRequestType' => __DIR__ .'/ConsignmentRequestType.php',
        'Bring\PartiesRequestType' => __DIR__ .'/PartiesRequestType.php',
        'Bring\PartyRequestType' => __DIR__ .'/PartyRequestType.php',
        'Bring\ContactRequestType' => __DIR__ .'/ContactRequestType.php',
        'Bring\PickupPointRequestType' => __DIR__ .'/PickupPointRequestType.php',
        'Bring\ProductRequestType' => __DIR__ .'/ProductRequestType.php',
        'Bring\additionalServices' => __DIR__ .'/additionalServices.php',
        'Bring\ediCustomsDeclarations' => __DIR__ .'/ediCustomsDeclarations.php',
        'Bring\ReturnProductRequestType' => __DIR__ .'/ReturnProductRequestType.php',
        'Bring\ServicesRequestType' => __DIR__ .'/ServicesRequestType.php',
        'Bring\RecipientNotificationRequestType' => __DIR__ .'/RecipientNotificationRequestType.php',
        'Bring\CashOnDeliveryRequestType' => __DIR__ .'/CashOnDeliveryRequestType.php',
        'Bring\CashOnDeliveryMessageRequestType' => __DIR__ .'/CashOnDeliveryMessageRequestType.php',
        'Bring\FlexDeliveryRequestType' => __DIR__ .'/FlexDeliveryRequestType.php',
        'Bring\DeliveryIndoorsRequestType' => __DIR__ .'/DeliveryIndoorsRequestType.php',
        'Bring\DangerousGoodsRequestType' => __DIR__ .'/DangerousGoodsRequestType.php',
        'Bring\AdditionalServiceRequestType' => __DIR__ .'/AdditionalServiceRequestType.php',
        'Bring\PurchaseOrderRequestType' => __DIR__ .'/PurchaseOrderRequestType.php',
        'Bring\PackagesRequestType' => __DIR__ .'/PackagesRequestType.php',
        'Bring\PackageRequestType' => __DIR__ .'/PackageRequestType.php',
        'Bring\MeasurementsRequestType' => __DIR__ .'/MeasurementsRequestType.php',
        'Bring\PackageGroupsRequestType' => __DIR__ .'/PackageGroupsRequestType.php',
        'Bring\PackageGroupRequestType' => __DIR__ .'/PackageGroupRequestType.php',
        'Bring\EDICustomsDeclarationRequestType' => __DIR__ .'/EDICustomsDeclarationRequestType.php',
        'Bring\BookingResponseType' => __DIR__ .'/BookingResponseType.php',
        'Bring\ConsignmentResponseType' => __DIR__ .'/ConsignmentResponseType.php',
        'Bring\errors' => __DIR__ .'/errors.php',
        'Bring\ConfirmationResponseType' => __DIR__ .'/ConfirmationResponseType.php',
        'Bring\packages' => __DIR__ .'/packages.php',
        'Bring\ProductSpecificDataResponseType' => __DIR__ .'/ProductSpecificDataResponseType.php',
        'Bring\LinksResponseType' => __DIR__ .'/LinksResponseType.php',
        'Bring\DtoDateAndTimesResponseType' => __DIR__ .'/DtoDateAndTimesResponseType.php',
        'Bring\PackageResponseType' => __DIR__ .'/PackageResponseType.php',
        'Bring\ErrorResponseType' => __DIR__ .'/ErrorResponseType.php',
        'Bring\messages' => __DIR__ .'/messages.php',
        'Bring\MessageResponseType' => __DIR__ .'/MessageResponseType.php',
        'Bring\CustomersRequestType' => __DIR__ .'/CustomersRequestType.php',
        'Bring\CustomersResponseType' => __DIR__ .'/CustomersResponseType.php',
        'Bring\customers' => __DIR__ .'/customers.php',
        'Bring\CustomerResponseType' => __DIR__ .'/CustomerResponseType.php',
        'Bring\products' => __DIR__ .'/products.php',
        'Bring\PickupOrderRequestType' => __DIR__ .'/PickupOrderRequestType.php',
        'Bring\parcelsInternationalInformation' => __DIR__ .'/parcelsInternationalInformation.php',
        'Bring\PickupOrderResponseType' => __DIR__ .'/PickupOrderResponseType.php',
        'Bring\PickupConfirmationType' => __DIR__ .'/PickupConfirmationType.php',
        'Bring\PickupApiErrorResponseType' => __DIR__ .'/PickupApiErrorResponseType.php',
        'Bring\PickupApiMessageResponseType' => __DIR__ .'/PickupApiMessageResponseType.php',
        'Bring\AccountType' => __DIR__ .'/AccountType.php',
        'Bring\MessageTypeRequestType' => __DIR__ .'/MessageTypeRequestType.php',
        'Bring\AdditionalServiceCodeType' => __DIR__ .'/AdditionalServiceCodeType.php',
        'Bring\whoPaysInvoice' => __DIR__ .'/whoPaysInvoice.php',
        'Bring\incotermRule' => __DIR__ .'/incotermRule.php',
        'Bring\NatureOfTransaction' => __DIR__ .'/NatureOfTransaction.php'
    );
    if (!empty($classes[$class])) {
		/** @noinspection PhpIncludeInspection */
		include $classes[$class];
	}
}

spl_autoload_register('autoload_65797fa19198960091bc2c17cfc008ff');

// Do nothing. The rest is just leftovers from the code generation.
{
}
