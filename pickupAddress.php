<?php

namespace Bring;

class pickupAddress
{

    /**
     * @var string $street
     */
    protected $street = null;

    /**
     * @var string $postalCode
     */
    protected $postalCode = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $phoneNumber
     */
    protected $phoneNumber = null;

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @var string $messageToDriver
     */
    protected $messageToDriver = null;

    /**
     * @param string $street
     * @param string $postalCode
     * @param string $email
     * @param string $phoneNumber
     * @param string $city
     * @param string $messageToDriver
     */
    public function __construct($street, $postalCode, $email, $phoneNumber, $city, $messageToDriver)
    {
      $this->street = $street;
      $this->postalCode = $postalCode;
      $this->email = $email;
      $this->phoneNumber = $phoneNumber;
      $this->city = $city;
      $this->messageToDriver = $messageToDriver;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
      return $this->street;
    }

    /**
     * @param string $street
     * @return \Bring\pickupAddress
     */
    public function setStreet($street)
    {
      $this->street = $street;
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
     * @return \Bring\pickupAddress
     */
    public function setPostalCode($postalCode)
    {
      $this->postalCode = $postalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param string $email
     * @return \Bring\pickupAddress
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
      return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     * @return \Bring\pickupAddress
     */
    public function setPhoneNumber($phoneNumber)
    {
      $this->phoneNumber = $phoneNumber;
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
     * @return \Bring\pickupAddress
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessageToDriver()
    {
      return $this->messageToDriver;
    }

    /**
     * @param string $messageToDriver
     * @return \Bring\pickupAddress
     */
    public function setMessageToDriver($messageToDriver)
    {
      $this->messageToDriver = $messageToDriver;
      return $this;
    }

}
