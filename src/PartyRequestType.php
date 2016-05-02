<?php

namespace Bring;

class PartyRequestType
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $addressLine
     */
    protected $addressLine = null;

    /**
     * @var string $addressLine2
     */
    protected $addressLine2 = null;

    /**
     * @var string $postalCode
     */
    protected $postalCode = null;

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @var string $countryCode
     */
    protected $countryCode = null;

    /**
     * @var string $reference
     */
    protected $reference = null;

    /**
     * @var string $additionalAddressInfo
     */
    protected $additionalAddressInfo = null;

    /**
     * @var ContactRequestType $contact
     */
    protected $contact = null;

    /**
     * @param string $name
     * @param string $addressLine
     * @param string $addressLine2
     * @param string $postalCode
     * @param string $city
     * @param string $countryCode
     * @param string $reference
     * @param string $additionalAddressInfo
     * @param ContactRequestType $contact
     */
    public function __construct($name, $addressLine, $addressLine2, $postalCode, $city, $countryCode, $reference, $additionalAddressInfo, $contact)
    {
      $this->name = $name;
      $this->addressLine = $addressLine;
      $this->addressLine2 = $addressLine2;
      $this->postalCode = $postalCode;
      $this->city = $city;
      $this->countryCode = $countryCode;
      $this->reference = $reference;
      $this->additionalAddressInfo = $additionalAddressInfo;
      $this->contact = $contact;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Bring\PartyRequestType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddressLine()
    {
      return $this->addressLine;
    }

    /**
     * @param string $addressLine
     * @return \Bring\PartyRequestType
     */
    public function setAddressLine($addressLine)
    {
      $this->addressLine = $addressLine;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddressLine2()
    {
      return $this->addressLine2;
    }

    /**
     * @param string $addressLine2
     * @return \Bring\PartyRequestType
     */
    public function setAddressLine2($addressLine2)
    {
      $this->addressLine2 = $addressLine2;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->postalCode;
    }

    /**
     * @param string $postalCode
     * @return \Bring\PartyRequestType
     */
    public function setPostalCode($postalCode)
    {
      $this->postalCode = $postalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->city;
    }

    /**
     * @param string $city
     * @return \Bring\PartyRequestType
     */
    public function setCity($city)
    {
      $this->city = $city;
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
     * @return \Bring\PartyRequestType
     */
    public function setCountryCode($countryCode)
    {
      $this->countryCode = $countryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
      return $this->reference;
    }

    /**
     * @param string $reference
     * @return \Bring\PartyRequestType
     */
    public function setReference($reference)
    {
      $this->reference = $reference;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalAddressInfo()
    {
      return $this->additionalAddressInfo;
    }

    /**
     * @param string $additionalAddressInfo
     * @return \Bring\PartyRequestType
     */
    public function setAdditionalAddressInfo($additionalAddressInfo)
    {
      $this->additionalAddressInfo = $additionalAddressInfo;
      return $this;
    }

    /**
     * @return ContactRequestType
     */
    public function getContact()
    {
      return $this->contact;
    }

    /**
     * @param ContactRequestType $contact
     * @return \Bring\PartyRequestType
     */
    public function setContact($contact)
    {
      $this->contact = $contact;
      return $this;
    }

}
