<?php

namespace Bring;

class customerInformation
{

    /**
     * @var string $customerNumber
     */
    protected $customerNumber = null;

    /**
     * @var string $companyName
     */
    protected $companyName = null;

    /**
     * @param string $customerNumber
     * @param string $companyName
     */
    public function __construct($customerNumber, $companyName)
    {
      $this->customerNumber = $customerNumber;
      $this->companyName = $companyName;
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
     * @return \Bring\customerInformation
     */
    public function setCustomerNumber($customerNumber)
    {
      $this->customerNumber = $customerNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
      return $this->companyName;
    }

    /**
     * @param string $companyName
     * @return \Bring\customerInformation
     */
    public function setCompanyName($companyName)
    {
      $this->companyName = $companyName;
      return $this;
    }

}
