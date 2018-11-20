<?php
namespace Bring;


/**
 * Class customerInformation
 */
class customerInformation
{

	/**
	 * @var string $customerNumber
	 */
	protected $customerNumber;

	/**
	 * @var string $companyName
	 */
	protected $companyName;

	/**
	 * @param string $customerNumber
	 * @param string $companyName
	 */
	public function __construct(string $customerNumber, string $companyName)
	{
		$this->customerNumber = $customerNumber;
		$this->companyName = $companyName;
	}

	/**
	 * @return string
	 */
	public function getCustomerNumber(): ?string
	{
		return $this->customerNumber;
	}

	/**
	 * @param string $customerNumber
	 * @return customerInformation
	 */
	public function setCustomerNumber(string $customerNumber): customerInformation
	{
		$this->customerNumber = $customerNumber;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCompanyName(): ?string
	{
		return $this->companyName;
	}

	/**
	 * @param string $companyName
	 * @return customerInformation
	 */
	public function setCompanyName(string $companyName): customerInformation
	{
		$this->companyName = $companyName;
		return $this;
	}

}
