<?php
namespace Bring;

use DateTime;
use Exception;

/**
 * Class DtoDateAndTimesResponseType
 */
class DtoDateAndTimesResponseType
{

	/**
	 * @var null|DateTime $earliestPickup
	 */
	protected $earliestPickup;

	/**
	 * @var null|DateTime $expectedDelivery
	 */
	protected $expectedDelivery;

	
	public function __construct()
	{
	
	}

	/**
	 * @return null|DateTime
	 */
	public function getEarliestPickup(): ?DateTime
	{
		if ($this->earliestPickup === null)
		{
			return null;
		}
		try
		{
			return new DateTime($this->earliestPickup);
		}
		catch (Exception $oException)
		{
			return null;
		}
	}

	/**
	 * @param null|DateTime $earliestPickup
	 * @return DtoDateAndTimesResponseType
	 */
	public function setEarliestPickup(?DateTime $earliestPickup = null): DtoDateAndTimesResponseType
	{
		if ($earliestPickup === null)
		{
			$this->earliestPickup = null;
		}
		else
		{
			$this->earliestPickup = $earliestPickup->format(DateTime::ATOM);
		}
		return $this;
	}

	/**
	 * @return null|DateTime
	 */
	public function getExpectedDelivery(): ?DateTime
	{
		if ($this->expectedDelivery === null)
		{
			return null;
		}
		try
		{
			return new DateTime($this->expectedDelivery);
		}
		catch (Exception $oException)
		{
			return null;
		}
	}

	/**
	 * @param null|DateTime $expectedDelivery
	 * @return DtoDateAndTimesResponseType
	 */
	public function setExpectedDelivery(?DateTime $expectedDelivery = null): DtoDateAndTimesResponseType
	{
		if ($expectedDelivery === null)
		{
			$this->expectedDelivery = null;
		}
		else
		{
			$this->expectedDelivery = $expectedDelivery->format(DateTime::ATOM);
		}
		return $this;
	}

}
