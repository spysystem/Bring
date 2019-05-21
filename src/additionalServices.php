<?php
namespace Bring;

/**
 * Class additionalServices
 */
class additionalServices
{
	/**
	 * @var null|AdditionalServiceRequestType[] $additionalService
	 */
	protected $additionalService;

	
	public function __construct()
	{
	
	}

	/**
	 * @return null|AdditionalServiceRequestType[]
	 */
	public function getAdditionalService(): ?array
	{
		return $this->additionalService;
	}

	/**
	 * @param null|AdditionalServiceRequestType[] $additionalService
	 * @return additionalServices
	 */
	public function setAdditionalService(?array $additionalService = null): additionalServices
	{
		$this->additionalService = $additionalService;
		return $this;
	}

}
