<?php

namespace Bring;

class PickupPointRequestType
{

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $countryCode
     */
    protected $countryCode = null;

    /**
     * @param string $id
     * @param string $countryCode
     */
    public function __construct($id, $countryCode)
    {
      $this->id = $id;
      $this->countryCode = $countryCode;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \Bring\PickupPointRequestType
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \Bring\PickupPointRequestType
     */
    public function setCountryCode($countryCode)
    {
      $this->countryCode = $countryCode;
      return $this;
    }

}
