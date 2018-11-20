<?php
namespace Bring;


/**
 * Class CustomersResponseType
 */
class CustomersResponseType
{

	/**
	 * @var customers $customers
	 */
	protected $customers;

	/**
	 * @param customers $customers
	 */
	public function __construct(customers $customers)
	{
		$this->customers = $customers;
	}

	/**
	 * @return customers
	 */
	public function getCustomers(): ?customers
	{
		return $this->customers;
	}

	/**
	 * @param customers $customers
	 * @return CustomersResponseType
	 */
	public function setCustomers(customers $customers): CustomersResponseType
	{
		$this->customers = $customers;
		return $this;
	}

}
