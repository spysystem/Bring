<?php

namespace Bring;

class CustomerResponseType
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $customerNumber
     */
    protected $customerNumber = null;

    /**
     * @var string $countryCode
     */
    protected $countryCode = null;

    /**
     * @var products $products
     */
    protected $products = null;

    /**
     * @param string $name
     * @param string $customerNumber
     * @param string $countryCode
     * @param products $products
     */
    public function __construct($name, $customerNumber, $countryCode, $products)
    {
      $this->name = $name;
      $this->customerNumber = $customerNumber;
      $this->countryCode = $countryCode;
      $this->products = $products;
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
     * @return \Bring\CustomerResponseType
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \Bring\CustomerResponseType
     */
    public function setCustomerNumber($customerNumber)
    {
      $this->customerNumber = $customerNumber;
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
     * @return \Bring\CustomerResponseType
     */
    public function setCountryCode($countryCode)
    {
      $this->countryCode = $countryCode;
      return $this;
    }

    /**
     * @return products
     */
    public function getProducts()
    {
      return $this->products;
    }

    /**
     * @param products $products
     * @return \Bring\CustomerResponseType
     */
    public function setProducts($products)
    {
      $this->products = $products;
      return $this;
    }

}
