<?php
namespace Bring;


/**
 * Class packages
 */
class packages
{

	/**
	 * @var PackageResponseType|PackageResponseType[] $package
	 */
	protected $package;

	/**
	 * @param PackageResponseType|PackageResponseType[] $package
	 */
	public function __construct($package)
	{
		$this->package = $package;
	}

	/**
	 * @return PackageResponseType|PackageResponseType[]
	 */
	public function getPackage()
	{
		return $this->package;
	}

	/**
	 * @param PackageResponseType|PackageResponseType[] $package
	 * @return packages
	 */
	public function setPackage($package): packages
	{
		$this->package = $package;
		return $this;
	}

}
