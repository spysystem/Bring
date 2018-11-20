<?php
namespace Bring;


/**
 * Class BookingResponseType
 */
class BookingResponseType
{

	/**
	 * @var consignments $consignments
	 */
	protected $consignments;

	/**
	 * @param consignments $consignments
	 */
	public function __construct(consignments $consignments)
	{
		$this->consignments = $consignments;
	}

	/**
	 * @return consignments
	 */
	public function getConsignments(): ?consignments
	{
		return $this->consignments;
	}

	/**
	 * @param consignments $consignments
	 * @return BookingResponseType
	 */
	public function setConsignments(consignments $consignments): BookingResponseType
	{
		$this->consignments = $consignments;
		return $this;
	}

}
