<?php
namespace Bring;


/**
 * Class PackageResponseType
 */
class PackageResponseType
{

	/**
	 * @var string $packageNumber
	 */
	protected $packageNumber;

	/**
	 * @var string $correlationId
	 */
	protected $correlationId;

	/**
	 * @param string $packageNumber
	 * @param string $correlationId
	 */
	public function __construct(string $packageNumber, string $correlationId)
	{
		$this->packageNumber = $packageNumber;
		$this->correlationId = $correlationId;
	}

	/**
	 * @return string
	 */
	public function getPackageNumber(): ?string
	{
		return $this->packageNumber;
	}

	/**
	 * @param string $packageNumber
	 * @return PackageResponseType
	 */
	public function setPackageNumber(string $packageNumber): PackageResponseType
	{
		$this->packageNumber = $packageNumber;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCorrelationId(): ?string
	{
		return $this->correlationId;
	}

	/**
	 * @param string $correlationId
	 * @return PackageResponseType
	 */
	public function setCorrelationId(string $correlationId): PackageResponseType
	{
		$this->correlationId = $correlationId;
		return $this;
	}

}
