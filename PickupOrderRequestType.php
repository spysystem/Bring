<?php

namespace Bring;

class PickupOrderRequestType
{

    /**
     * @var customerInformation $customerInformation
     */
    protected $customerInformation = null;

    /**
     * @var pickupAddress $pickupAddress
     */
    protected $pickupAddress = null;

    /**
     * @var date $pickupDate
     */
    protected $pickupDate = null;

    /**
     * @var time $pickupIsReadyAtTime
     */
    protected $pickupIsReadyAtTime = null;

    /**
     * @var parcelsInformation $parcelsInformation
     */
    protected $parcelsInformation = null;

    /**
     * @var string $countryCode
     */
    protected $countryCode = null;

    /**
     * @var cargoInformation $cargoInformation
     */
    protected $cargoInformation = null;

    /**
     * @var parcelsInternationalInformation $parcelsInternationalInformation
     */
    protected $parcelsInternationalInformation = null;

    /**
     * @var boolean $testIndicator
     */
    protected $testIndicator = null;

    /**
     * @param customerInformation $customerInformation
     * @param pickupAddress $pickupAddress
     * @param date $pickupDate
     * @param time $pickupIsReadyAtTime
     * @param parcelsInformation $parcelsInformation
     * @param string $countryCode
     * @param cargoInformation $cargoInformation
     * @param parcelsInternationalInformation $parcelsInternationalInformation
     * @param boolean $testIndicator
     */
    public function __construct($customerInformation, $pickupAddress, $pickupDate, $pickupIsReadyAtTime, $parcelsInformation, $countryCode, $cargoInformation, $parcelsInternationalInformation, $testIndicator)
    {
      $this->customerInformation = $customerInformation;
      $this->pickupAddress = $pickupAddress;
      $this->pickupDate = $pickupDate;
      $this->pickupIsReadyAtTime = $pickupIsReadyAtTime;
      $this->parcelsInformation = $parcelsInformation;
      $this->countryCode = $countryCode;
      $this->cargoInformation = $cargoInformation;
      $this->parcelsInternationalInformation = $parcelsInternationalInformation;
      $this->testIndicator = $testIndicator;
    }

    /**
     * @return customerInformation
     */
    public function getCustomerInformation()
    {
      return $this->customerInformation;
    }

    /**
     * @param customerInformation $customerInformation
     * @return \Bring\PickupOrderRequestType
     */
    public function setCustomerInformation($customerInformation)
    {
      $this->customerInformation = $customerInformation;
      return $this;
    }

    /**
     * @return pickupAddress
     */
    public function getPickupAddress()
    {
      return $this->pickupAddress;
    }

    /**
     * @param pickupAddress $pickupAddress
     * @return \Bring\PickupOrderRequestType
     */
    public function setPickupAddress($pickupAddress)
    {
      $this->pickupAddress = $pickupAddress;
      return $this;
    }

    /**
     * @return date
     */
    public function getPickupDate()
    {
      return $this->pickupDate;
    }

    /**
     * @param date $pickupDate
     * @return \Bring\PickupOrderRequestType
     */
    public function setPickupDate($pickupDate)
    {
      $this->pickupDate = $pickupDate;
      return $this;
    }

    /**
     * @return time
     */
    public function getPickupIsReadyAtTime()
    {
      return $this->pickupIsReadyAtTime;
    }

    /**
     * @param time $pickupIsReadyAtTime
     * @return \Bring\PickupOrderRequestType
     */
    public function setPickupIsReadyAtTime($pickupIsReadyAtTime)
    {
      $this->pickupIsReadyAtTime = $pickupIsReadyAtTime;
      return $this;
    }

    /**
     * @return parcelsInformation
     */
    public function getParcelsInformation()
    {
      return $this->parcelsInformation;
    }

    /**
     * @param parcelsInformation $parcelsInformation
     * @return \Bring\PickupOrderRequestType
     */
    public function setParcelsInformation($parcelsInformation)
    {
      $this->parcelsInformation = $parcelsInformation;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return \Bring\PickupOrderRequestType
     */
    public function setCountryCode($countryCode)
    {
      $this->countryCode = $countryCode;
      return $this;
    }

    /**
     * @return cargoInformation
     */
    public function getCargoInformation()
    {
      return $this->cargoInformation;
    }

    /**
     * @param cargoInformation $cargoInformation
     * @return \Bring\PickupOrderRequestType
     */
    public function setCargoInformation($cargoInformation)
    {
      $this->cargoInformation = $cargoInformation;
      return $this;
    }

    /**
     * @return parcelsInternationalInformation
     */
    public function getParcelsInternationalInformation()
    {
      return $this->parcelsInternationalInformation;
    }

    /**
     * @param parcelsInternationalInformation $parcelsInternationalInformation
     * @return \Bring\PickupOrderRequestType
     */
    public function setParcelsInternationalInformation($parcelsInternationalInformation)
    {
      $this->parcelsInternationalInformation = $parcelsInternationalInformation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTestIndicator()
    {
      return $this->testIndicator;
    }

    /**
     * @param boolean $testIndicator
     * @return \Bring\PickupOrderRequestType
     */
    public function setTestIndicator($testIndicator)
    {
      $this->testIndicator = $testIndicator;
      return $this;
    }

}
