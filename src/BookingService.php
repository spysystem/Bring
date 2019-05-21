<?php
namespace Bring;

use Exception;
use SoapClient;
use SoapFault;

/**
 * Class BookingService
 *
 * @package Bring
 */
class BookingService extends SoapClient
{
	public const WsdlUrl = 'https://api.bring.com/booking/api/ws/booking-v1.wsdl';


	/**
	 * @var array $arrClassMap The defined classes
	 */
	private static $arrClassMap = [
		'cargoInformation'					=> cargoInformation::class,
		'customerInformation'				=> customerInformation::class,
		'parcelsInformation'				=> parcelsInformation::class,
		'pickupAddress'						=> pickupAddress::class,
		'pickupDetails'						=> pickupDetails::class,
		'BookingRequestType'				=> BookingRequestType::class,
		'consignments'						=> consignments::class,
		'ConsignmentRequestType'			=> ConsignmentRequestType::class,
		'PartiesRequestType'				=> PartiesRequestType::class,
		'PartyRequestType'					=> PartyRequestType::class,
		'ContactRequestType'				=> ContactRequestType::class,
		'PickupPointRequestType'			=> PickupPointRequestType::class,
		'ProductRequestType'				=> ProductRequestType::class,
		'additionalServices'				=> additionalServices::class,
		'ediCustomsDeclarations'			=> ediCustomsDeclarations::class,
		'ServicesRequestType'				=> ServicesRequestType::class,
		'RecipientNotificationRequestType'	=> RecipientNotificationRequestType::class,
		'CashOnDeliveryRequestType'			=> CashOnDeliveryRequestType::class,
		'CashOnDeliveryMessageRequestType'	=> CashOnDeliveryMessageRequestType::class,
		'FlexDeliveryRequestType'			=> FlexDeliveryRequestType::class,
		'DeliveryIndoorsRequestType'		=> DeliveryIndoorsRequestType::class,
		'DangerousGoodsRequestType'			=> DangerousGoodsRequestType::class,
		'AdditionalServiceRequestType'		=> AdditionalServiceRequestType::class,
		'CustomsDeclarationRequestType'		=> CustomsDeclarationRequestType::class,
		'PurchaseOrderRequestType'			=> PurchaseOrderRequestType::class,
		'PackagesRequestType'				=> PackagesRequestType::class,
		'PackageRequestType'				=> PackageRequestType::class,
		'MeasurementsRequestType'			=> MeasurementsRequestType::class,
		'PackageGroupsRequestType'			=> PackageGroupsRequestType::class,
		'PackageGroupRequestType'			=> PackageGroupRequestType::class,
		'EDICustomsDeclarationRequestType'	=> EDICustomsDeclarationRequestType::class,
		'BookingResponseType'				=> BookingResponseType::class,
		'ConsignmentResponseType'			=> ConsignmentResponseType::class,
		'errors'							=> errors::class,
		'ConfirmationResponseType'			=> ConfirmationResponseType::class,
		'packages'							=> packages::class,
		'ProductSpecificDataResponseType'	=> ProductSpecificDataResponseType::class,
		'LinksResponseType'					=> LinksResponseType::class,
		'DtoDateAndTimesResponseType'		=> DtoDateAndTimesResponseType::class,
		'PackageResponseType'				=> PackageResponseType::class,
		'ErrorResponseType'					=> ErrorResponseType::class,
		'messages'							=> messages::class,
		'MessageResponseType'				=> MessageResponseType::class,
		'CustomersRequestType'				=> CustomersRequestType::class,
		'CustomersResponseType'				=> CustomersResponseType::class,
		'customers'							=> customers::class,
		'CustomerResponseType'				=> CustomerResponseType::class,
		'products'							=> products::class,
		'PickupOrderRequestType'			=> PickupOrderRequestType::class,
		'parcelsInternationalInformation'	=> parcelsInternationalInformation::class,
		'PickupOrderResponseType'			=> PickupOrderResponseType::class,
		'PickupConfirmationType'			=> PickupConfirmationType::class,
		'PickupApiErrorResponseType'		=> PickupApiErrorResponseType::class,
		'PickupApiMessageResponseType'		=> PickupApiMessageResponseType::class,
	];

	/**
	 * @var string $request Last request made
	 */
	private  $request = '';

	/**
	 * @param string $strURL URL or path for WSDL file
	 * @throws Exception
	 * @return BookingService
	 */
	public static function CreateService(string $strURL = self::WsdlUrl): BookingService
	{
		return new static([
			'trace'			=> true,
			'exceptions'	=> true,
			'soap_version'	=> 2,
			'encoding'		=> 'UTF-8',
			'features'		=> 1,
		], $strURL);
	}

	/**
	 * @param string $strWsdl The wsdl file to use
	 * @param array $arrOptions A array of config values
	 * @throws Exception
	 */
	public function __construct(array $arrOptions = [], string $strWsdl = self::WsdlUrl)
	{
		if ($strWsdl === '')
		{
			throw new Exception('Missing WSDL!');
		}
		foreach (self::$arrClassMap as $strKey => $mValue)
		{
			if (!isset($arrOptions['classmap'][$strKey]))
			{
				$arrOptions['classmap'][$strKey]	= $mValue;
			}
		}
		parent::__construct($strWsdl, $arrOptions);
	}

	/**
	 * @param string $request
	 * @param string $location
	 * @param string $action
	 * @param int $version
	 * @param int $one_way
	 * @return string|null
	 */
	public function __doRequest($request, $location, $action, $version, $one_way = 0): ?string
	{
		$this->request	= $request;
		
		return parent::__doRequest($request, $location, $action, $version, $one_way);
	}

	/**
	 * @return string
	 */
	public function __getLastRequest(): string
	{
			return $this->request ?? '';
	}

	/**
	 * @param PickupOrderRequestType $pickupOrderRequest
	 * @throws SoapFault
	 * @return PickupOrderResponseType|null
	 */
	public function pickupOrder(PickupOrderRequestType $pickupOrderRequest): ?PickupOrderResponseType
	{
		return $this->__soapCall('pickupOrder', [$pickupOrderRequest]);
	}

	/**
	 * @param BookingRequestType $bookingRequest
	 * @throws SoapFault
	 * @return BookingResponseType|null
	 */
	public function booking(BookingRequestType $bookingRequest): ?BookingResponseType
	{
		return $this->__soapCall('booking', [$bookingRequest]);
	}

	/**
	 * @param CustomersRequestType $customersRequest
	 * @throws SoapFault
	 * @return CustomersResponseType|null
	 */
	public function customers(CustomersRequestType $customersRequest): ?CustomersResponseType
	{
		return $this->__soapCall('customers', [$customersRequest]);
	}

}
