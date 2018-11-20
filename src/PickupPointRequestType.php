<?php
namespace Bring;


/**
 * Class PickupPointRequestType
 */
class PickupPointRequestType
{

	/**
	 * @var string $id
	 */
	protected $id;

	/**
	 * @var string $countryCode
	 */
	protected $countryCode;

	/**
	 * @param string $id
	 * @param string $countryCode
	 */
	public function __construct(string $id, string $countryCode)
	{
		$this->id = $id;
		$this->countryCode = $countryCode;
	}

	/**
	 * @return string
	 */
	public function getId(): ?string
	{
		return $this->id;
	}

	/**
	 * @param string $id
	 * @return PickupPointRequestType
	 */
	public function setId(string $id): PickupPointRequestType
	{
		$this->id = $id;
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
	 * @return PickupPointRequestType
	 */
	public function setCountryCode(string $countryCode): PickupPointRequestType
	{
		$this->countryCode = $countryCode;
		return $this;
	}

}
