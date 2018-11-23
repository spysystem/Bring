<?php
namespace Bring;


/**
 * Class consignments
 */
class consignments
{

	/**
	 * @var ConsignmentResponseType[]|ConsignmentRequestType|null $consignment
	 */
	protected $consignment;

	/**
	 * @param ConsignmentResponseType[]|ConsignmentRequestType|null $consignment
	 */
	public function __construct($consignment)
	{
		$this->consignment = $consignment;
	}

	/**
	 * @return ConsignmentResponseType[]|ConsignmentRequestType|null
	 */
	public function getConsignment()
	{
		return $this->consignment;
	}

	/**
	 * @param ConsignmentResponseType[]|ConsignmentRequestType|null $consignment
	 * @return consignments
	 */
	public function setConsignment($consignment): consignments
	{
		$this->consignment = $consignment;
		return $this;
	}

}
