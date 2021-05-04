<?php
namespace Bring;


/**
 * Class ReturnProductRequestType
 */
class ReturnProductRequestType
{

	/**
	 * @var string $id
	 */
	protected $id;

	/**
	 * @var null|additionalServices $additionalServices
	 */
	protected $additionalServices;

	/**
	 * @param string $id
	 */
	public function __construct(string $id)
	{
		$this->id = $id;
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
	 * @return ReturnProductRequestType
	 */
	public function setId(string $id): ReturnProductRequestType
	{
		$this->id = $id;
		return $this;
	}

	/**
	 * @return null|additionalServices
	 */
	public function getAdditionalServices(): ?additionalServices
	{
		return $this->additionalServices;
	}

	/**
	 * @param null|additionalServices $additionalServices
	 * @return ReturnProductRequestType
	 */
	public function setAdditionalServices(?additionalServices $additionalServices = null): ReturnProductRequestType
	{
		$this->additionalServices = $additionalServices;
		return $this;
	}

}
