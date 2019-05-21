<?php
namespace Bring;

use DateTime;
use Exception;

/**
 * Class PickupConfirmationType
 */
class PickupConfirmationType
{

	/**
	 * @var string $status
	 */
	protected $status;

	/**
	 * @var DateTime $earliestPickupDate
	 */
	protected $earliestPickupDate;

	/**
	 * @var null|DateTime $latestPickupDate
	 */
	protected $latestPickupDate;

	/**
	 * @var null|string $url
	 */
	protected $url;

	/**
	 * @param string $status
	 * @param DateTime $earliestPickupDate
	 */
	public function __construct(string $status, DateTime $earliestPickupDate)
	{
		$this->status = $status;
		$this->earliestPickupDate = $earliestPickupDate->format(DateTime::ATOM);
	}

	/**
	 * @return string
	 */
	public function getStatus(): ?string
	{
		return $this->status;
	}

	/**
	 * @param string $status
	 * @return PickupConfirmationType
	 */
	public function setStatus(string $status): PickupConfirmationType
	{
		$this->status = $status;
		return $this;
	}

	/**
	 * @return DateTime
	 */
	public function getEarliestPickupDate(): ?DateTime
	{
		if ($this->earliestPickupDate === null)
		{
			return null;
		}
		try
		{
			return new DateTime($this->earliestPickupDate);
		}
		catch (Exception $oException)
		{
			return null;
		}
	}

	/**
	 * @param DateTime $earliestPickupDate
	 * @return PickupConfirmationType
	 */
	public function setEarliestPickupDate(DateTime $earliestPickupDate): PickupConfirmationType
	{
		$this->earliestPickupDate = $earliestPickupDate->format(DateTime::ATOM);
		return $this;
	}

	/**
	 * @return null|DateTime
	 */
	public function getLatestPickupDate(): ?DateTime
	{
		if ($this->latestPickupDate === null)
		{
			return null;
		}
		try
		{
			return new DateTime($this->latestPickupDate);
		}
		catch (Exception $oException)
		{
			return null;
		}
	}

	/**
	 * @param null|DateTime $latestPickupDate
	 * @return PickupConfirmationType
	 */
	public function setLatestPickupDate(?DateTime $latestPickupDate = null): PickupConfirmationType
	{
		if ($latestPickupDate === null)
		{
			$this->latestPickupDate = null;
		}
		else
		{
			$this->latestPickupDate = $latestPickupDate->format(DateTime::ATOM);
		}
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getUrl(): ?string
	{
		return $this->url;
	}

	/**
	 * @param null|string $url
	 * @return PickupConfirmationType
	 */
	public function setUrl(?string $url = null): PickupConfirmationType
	{
		$this->url = $url;
		return $this;
	}

}
