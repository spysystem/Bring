<?php
namespace Bring;


/**
 * Class PackagesRequestType
 */
class PackagesRequestType
{

	/**
	 * @var PackageRequestType[] $package
	 */
	protected $package;

	/**
	 * @param PackageRequestType[] $package
	 */
	public function __construct(array $package)
	{
		$this->package = $package;
	}

	/**
	 * @return PackageRequestType[]
	 */
	public function getPackage(): ?array
	{
		return $this->package;
	}

	/**
	 * @param PackageRequestType[] $package
	 * @return PackagesRequestType
	 */
	public function setPackage(array $package): PackagesRequestType
	{
		$this->package = $package;
		return $this;
	}

}
