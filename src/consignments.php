<?php
namespace Bring;


/**
 * Class consignments
 */
class consignments
{

	/**
	 * @var ConsignmentResponseType[] $consignment
	 */
	protected $consignment;

	/**
	 * @param ConsignmentResponseType[] $consignment
	 */
	public function __construct(array $consignment)
	{
		$this->consignment = $consignment;
	}

	/**
	 * @return ConsignmentResponseType[]
	 */
	public function getConsignment(): ?array
	{
		return $this->consignment;
	}

	/**
	 * @param ConsignmentResponseType[] $consignment
	 * @return consignments
	 */
	public function setConsignment(array $consignment): consignments
	{
		$this->consignment = $consignment;
		return $this;
	}

}
