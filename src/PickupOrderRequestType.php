<?php
namespace Bring;


/**
 * Class PickupOrderRequestType
 */
class PickupOrderRequestType
{
	/**
	 * @var null|string $service
	 */
	protected $service;

	/**
	 * @var customerInformation $customerInformation
	 */
	protected $customerInformation;

	/**
	 * @var pickupAddress $pickupAddress
	 */
	protected $pickupAddress;

	/**
	 * @var string $pickupDate
	 */
	protected $pickupDate;

	/**
	 * @var null|string $pickupIsReadyAtTime
	 */
	protected $pickupIsReadyAtTime;

	/**
	 * @var parcelsInformation $parcelsInformation
	 */
	protected $parcelsInformation;

	/**
	 * @var string $countryCode
	 */
	protected $countryCode;

	/**
	 * @var cargoInformation $cargoInformation
	 */
	protected $cargoInformation;

	/**
	 * @var null|parcelsInternationalInformation $parcelsInternationalInformation
	 */
	protected $parcelsInternationalInformation;

	/**
	 * @var pickupDetails $pickupDetails
	 */
	protected $pickupDetails;

	/**
	 * @var bool $testIndicator
	 */
	protected $testIndicator;

	/**
	 * @param customerInformation $customerInformation
	 * @param pickupAddress $pickupAddress
	 * @param string $pickupDate
	 * @param parcelsInformation $parcelsInformation
	 * @param string $countryCode
	 * @param cargoInformation $cargoInformation
	 * @param pickupDetails $pickupDetails
	 * @param bool $testIndicator
	 */
	public function __construct(customerInformation $customerInformation, pickupAddress $pickupAddress, string $pickupDate, parcelsInformation $parcelsInformation, string $countryCode, cargoInformation $cargoInformation, pickupDetails $pickupDetails, bool $testIndicator)
	{
		$this->customerInformation = $customerInformation;
		$this->pickupAddress = $pickupAddress;
		$this->pickupDate = $pickupDate;
		$this->parcelsInformation = $parcelsInformation;
		$this->countryCode = $countryCode;
		$this->cargoInformation = $cargoInformation;
		$this->pickupDetails = $pickupDetails;
		$this->testIndicator = $testIndicator;
	}

	/**
	 * @return null|string
	 */
	public function getService(): ?string
	{
		return $this->service;
	}

	/**
	 * @param null|string $service
	 * @return PickupOrderRequestType
	 */
	public function setService(?string $service = null): PickupOrderRequestType
	{
		$this->service = $service;
		return $this;
	}

	/**
	 * @return customerInformation
	 */
	public function getCustomerInformation(): ?customerInformation
	{
		return $this->customerInformation;
	}

	/**
	 * @param customerInformation $customerInformation
	 * @return PickupOrderRequestType
	 */
	public function setCustomerInformation(customerInformation $customerInformation): PickupOrderRequestType
	{
		$this->customerInformation = $customerInformation;
		return $this;
	}

	/**
	 * @return pickupAddress
	 */
	public function getPickupAddress(): ?pickupAddress
	{
		return $this->pickupAddress;
	}

	/**
	 * @param pickupAddress $pickupAddress
	 * @return PickupOrderRequestType
	 */
	public function setPickupAddress(pickupAddress $pickupAddress): PickupOrderRequestType
	{
		$this->pickupAddress = $pickupAddress;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPickupDate(): ?string
	{
		return $this->pickupDate;
	}

	/**
	 * @param string $pickupDate
	 * @return PickupOrderRequestType
	 */
	public function setPickupDate(string $pickupDate): PickupOrderRequestType
	{
		$this->pickupDate = $pickupDate;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getPickupIsReadyAtTime(): ?string
	{
		return $this->pickupIsReadyAtTime;
	}

	/**
	 * @param null|string $pickupIsReadyAtTime
	 * @return PickupOrderRequestType
	 */
	public function setPickupIsReadyAtTime(?string $pickupIsReadyAtTime = null): PickupOrderRequestType
	{
		$this->pickupIsReadyAtTime = $pickupIsReadyAtTime;
		return $this;
	}

	/**
	 * @return parcelsInformation
	 */
	public function getParcelsInformation(): ?parcelsInformation
	{
		return $this->parcelsInformation;
	}

	/**
	 * @param parcelsInformation $parcelsInformation
	 * @return PickupOrderRequestType
	 */
	public function setParcelsInformation(parcelsInformation $parcelsInformation): PickupOrderRequestType
	{
		$this->parcelsInformation = $parcelsInformation;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCountryCode(): ?string
	{
		return $this->countryCode;
	}

	/**
	 * @param string $countryCode
	 * @return PickupOrderRequestType
	 */
	public function setCountryCode(string $countryCode): PickupOrderRequestType
	{
		$this->countryCode = $countryCode;
		return $this;
	}

	/**
	 * @return cargoInformation
	 */
	public function getCargoInformation(): ?cargoInformation
	{
		return $this->cargoInformation;
	}

	/**
	 * @param cargoInformation $cargoInformation
	 * @return PickupOrderRequestType
	 */
	public function setCargoInformation(cargoInformation $cargoInformation): PickupOrderRequestType
	{
		$this->cargoInformation = $cargoInformation;
		return $this;
	}

	/**
	 * @return null|parcelsInternationalInformation
	 */
	public function getParcelsInternationalInformation(): ?parcelsInternationalInformation
	{
		return $this->parcelsInternationalInformation;
	}

	/**
	 * @param null|parcelsInternationalInformation $parcelsInternationalInformation
	 * @return PickupOrderRequestType
	 */
	public function setParcelsInternationalInformation(?parcelsInternationalInformation $parcelsInternationalInformation = null): PickupOrderRequestType
	{
		$this->parcelsInternationalInformation = $parcelsInternationalInformation;
		return $this;
	}

	/**
	 * @return pickupDetails
	 */
	public function getPickupDetails(): ?pickupDetails
	{
		return $this->pickupDetails;
	}

	/**
	 * @param pickupDetails $pickupDetails
	 * @return PickupOrderRequestType
	 */
	public function setPickupDetails(pickupDetails $pickupDetails): PickupOrderRequestType
	{
		$this->pickupDetails = $pickupDetails;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function getTestIndicator(): ?bool
	{
		return $this->testIndicator;
	}

	/**
	 * @param bool $testIndicator
	 * @return PickupOrderRequestType
	 */
	public function setTestIndicator(bool $testIndicator): PickupOrderRequestType
	{
		$this->testIndicator = $testIndicator;
		return $this;
	}

}
