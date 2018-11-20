<?php
namespace Bring;


/**
 * Class packages
 */
class packages
{

	/**
	 * @var PackageResponseType $package
	 */
	protected $package;

	/**
	 * @param PackageResponseType $package
	 */
	public function __construct(PackageResponseType $package)
	{
		$this->package = $package;
	}

	/**
	 * @return PackageResponseType
	 */
	public function getPackage(): ?PackageResponseType
	{
		return $this->package;
	}

	/**
	 * @param PackageResponseType $package
	 * @return packages
	 */
	public function setPackage(PackageResponseType $package): packages
	{
		$this->package = $package;
		return $this;
	}

}
