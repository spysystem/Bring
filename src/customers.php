<?php
namespace Bring;


/**
 * Class customers
 */
class customers
{

	/**
	 * @var CustomerResponseType[] $customer
	 */
	protected $customer;

	/**
	 * @param CustomerResponseType[] $customer
	 */
	public function __construct(array $customer)
	{
		$this->customer = $customer;
	}

	/**
	 * @return CustomerResponseType[]
	 */
	public function getCustomer(): ?array
	{
		return $this->customer;
	}

	/**
	 * @param CustomerResponseType[] $customer
	 * @return customers
	 */
	public function setCustomer(array $customer): customers
	{
		$this->customer = $customer;
		return $this;
	}

}
