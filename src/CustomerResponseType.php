<?php
namespace Bring;


/**
 * Class CustomerResponseType
 */
class CustomerResponseType
{

	/**
	 * @var string $name
	 */
	protected $name;

	/**
	 * @var string $customerNumber
	 */
	protected $customerNumber;

	/**
	 * @var string $countryCode
	 */
	protected $countryCode;

	/**
	 * @var products $products
	 */
	protected $products;

	/**
	 * @param string $name
	 * @param string $customerNumber
	 * @param string $countryCode
	 * @param products $products
	 */
	public function __construct(string $name, string $customerNumber, string $countryCode, products $products)
	{
		$this->name = $name;
		$this->customerNumber = $customerNumber;
		$this->countryCode = $countryCode;
		$this->products = $products;
	}

	/**
	 * @return string
	 */
	public function getName(): ?string
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 * @return CustomerResponseType
	 */
	public function setName(string $name): CustomerResponseType
	{
		$this->name = $name;
		return $this;
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
	 * @return CustomerResponseType
	 */
	public function setCustomerNumber(string $customerNumber): CustomerResponseType
	{
		$this->customerNumber = $customerNumber;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCountryCode(): ?string
	{
		return $this->countryCode;
	}

	/**
	 * @param string $countryCode
	 * @return CustomerResponseType
	 */
	public function setCountryCode(string $countryCode): CustomerResponseType
	{
		$this->countryCode = $countryCode;
		return $this;
	}

	/**
	 * @return products
	 */
	public function getProducts(): ?products
	{
		return $this->products;
	}

	/**
	 * @param products $products
	 * @return CustomerResponseType
	 */
	public function setProducts(products $products): CustomerResponseType
	{
		$this->products = $products;
		return $this;
	}

}
