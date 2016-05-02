<?php

namespace Bring;

class CustomersResponseType
{

    /**
     * @var customers $customers
     */
    protected $customers = null;

    /**
     * @param customers $customers
     */
    public function __construct($customers)
    {
      $this->customers = $customers;
    }

    /**
     * @return customers
     */
    public function getCustomers()
    {
      return $this->customers;
    }

    /**
     * @param customers $customers
     * @return \Bring\CustomersResponseType
     */
    public function setCustomers($customers)
    {
      $this->customers = $customers;
      return $this;
    }

}
