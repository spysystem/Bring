<?php

namespace Bring;

class customers
{

    /**
     * @var CustomerResponseType $customer
     */
    protected $customer = null;

    /**
     * @param CustomerResponseType $customer
     */
    public function __construct($customer)
    {
      $this->customer = $customer;
    }

    /**
     * @return CustomerResponseType
     */
    public function getCustomer()
    {
      return $this->customer;
    }

    /**
     * @param CustomerResponseType $customer
     * @return \Bring\customers
     */
    public function setCustomer($customer)
    {
      $this->customer = $customer;
      return $this;
    }

}
