<?php

namespace Bring;

class BookingService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'cargoInformation' => 'Bring\\cargoInformation',
      'customerInformation' => 'Bring\\customerInformation',
      'parcelsInformation' => 'Bring\\parcelsInformation',
      'pickupAddress' => 'Bring\\pickupAddress',
      'BookingRequestType' => 'Bring\\BookingRequestType',
      'consignments' => 'Bring\\consignments',
      'ConsignmentRequestType' => 'Bring\\ConsignmentRequestType',
      'PartiesRequestType' => 'Bring\\PartiesRequestType',
      'PartyRequestType' => 'Bring\\PartyRequestType',
      'ContactRequestType' => 'Bring\\ContactRequestType',
      'PickupPointRequestType' => 'Bring\\PickupPointRequestType',
      'ProductRequestType' => 'Bring\\ProductRequestType',
      'ServicesRequestType' => 'Bring\\ServicesRequestType',
      'RecipientNotificationRequestType' => 'Bring\\RecipientNotificationRequestType',
      'CashOnDeliveryRequestType' => 'Bring\\CashOnDeliveryRequestType',
      'CashOnDeliveryMessageRequestType' => 'Bring\\CashOnDeliveryMessageRequestType',
      'FlexDeliveryRequestType' => 'Bring\\FlexDeliveryRequestType',
      'DangerousGoodsRequestType' => 'Bring\\DangerousGoodsRequestType',
      'CustomsDeclarationRequestType' => 'Bring\\CustomsDeclarationRequestType',
      'PurchaseOrderRequestType' => 'Bring\\PurchaseOrderRequestType',
      'PackagesRequestType' => 'Bring\\PackagesRequestType',
      'PackageRequestType' => 'Bring\\PackageRequestType',
      'MeasurementsRequestType' => 'Bring\\MeasurementsRequestType',
      'PackageGroupsRequestType' => 'Bring\\PackageGroupsRequestType',
      'PackageGroupRequestType' => 'Bring\\PackageGroupRequestType',
      'BookingResponseType' => 'Bring\\BookingResponseType',
      'ConsignmentResponseType' => 'Bring\\ConsignmentResponseType',
      'errors' => 'Bring\\errors',
      'ConfirmationResponseType' => 'Bring\\ConfirmationResponseType',
      'packages' => 'Bring\\packages',
      'ProductSpecificDataResponseType' => 'Bring\\ProductSpecificDataResponseType',
      'LinksResponseType' => 'Bring\\LinksResponseType',
      'DtoDateAndTimesResponseType' => 'Bring\\DtoDateAndTimesResponseType',
      'PackageResponseType' => 'Bring\\PackageResponseType',
      'ErrorResponseType' => 'Bring\\ErrorResponseType',
      'messages' => 'Bring\\messages',
      'MessageResponseType' => 'Bring\\MessageResponseType',
      'CustomersRequestType' => 'Bring\\CustomersRequestType',
      'CustomersResponseType' => 'Bring\\CustomersResponseType',
      'customers' => 'Bring\\customers',
      'CustomerResponseType' => 'Bring\\CustomerResponseType',
      'products' => 'Bring\\products',
      'PickupOrderRequestType' => 'Bring\\PickupOrderRequestType',
      'parcelsInternationalInformation' => 'Bring\\parcelsInternationalInformation',
      'PickupOrderResponseType' => 'Bring\\PickupOrderResponseType',
      'PickupConfirmationType' => 'Bring\\PickupConfirmationType',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'booking-v1.wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * @param PickupOrderRequestType $pickupOrderRequest
     * @return PickupOrderResponseType
     */
    public function pickupOrder(PickupOrderRequestType $pickupOrderRequest)
    {
      return $this->__soapCall('pickupOrder', array($pickupOrderRequest));
    }

    /**
     * @param BookingRequestType $bookingRequest
     * @return BookingResponseType
     */
    public function booking(BookingRequestType $bookingRequest)
    {
      return $this->__soapCall('booking', array($bookingRequest));
    }

    /**
     * @param CustomersRequestType $customersRequest
     * @return CustomersResponseType
     */
    public function customers(CustomersRequestType $customersRequest)
    {
      return $this->__soapCall('customers', array($customersRequest));
    }

}
