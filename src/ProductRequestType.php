<?php

namespace Bring;

class ProductRequestType
{

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $customerNumber
     */
    protected $customerNumber = null;

    /**
     * @var ServicesRequestType $services
     */
    protected $services = null;

    /**
     * @var CustomsDeclarationRequestType $customsDeclaration
     */
    protected $customsDeclaration = null;

    /**
     * @param string $id
     * @param string $customerNumber
     * @param ServicesRequestType $services
     * @param CustomsDeclarationRequestType $customsDeclaration
     */
    public function __construct($id, $customerNumber, $services, $customsDeclaration)
    {
      $this->id = $id;
      $this->customerNumber = $customerNumber;
      $this->services = $services;
      $this->customsDeclaration = $customsDeclaration;
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
     * @return \Bring\ProductRequestType
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerNumber()
    {
      return $this->customerNumber;
    }

    /**
     * @param string $customerNumber
     * @return \Bring\ProductRequestType
     */
    public function setCustomerNumber($customerNumber)
    {
      $this->customerNumber = $customerNumber;
      return $this;
    }

    /**
     * @return ServicesRequestType
     */
    public function getServices()
    {
      return $this->services;
    }

    /**
     * @param ServicesRequestType $services
     * @return \Bring\ProductRequestType
     */
    public function setServices($services)
    {
      $this->services = $services;
      return $this;
    }

    /**
     * @return CustomsDeclarationRequestType
     */
    public function getCustomsDeclaration()
    {
      return $this->customsDeclaration;
    }

    /**
     * @param CustomsDeclarationRequestType $customsDeclaration
     * @return \Bring\ProductRequestType
     */
    public function setCustomsDeclaration($customsDeclaration)
    {
      $this->customsDeclaration = $customsDeclaration;
      return $this;
    }

}
