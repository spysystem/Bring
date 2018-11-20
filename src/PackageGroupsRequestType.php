<?php
namespace Bring;


/**
 * Class PackageGroupsRequestType
 */
class PackageGroupsRequestType
{

	/**
	 * @var PackageGroupRequestType[] $packageGroup
	 */
	protected $packageGroup;

	/**
	 * @param PackageGroupRequestType[] $packageGroup
	 */
	public function __construct(array $packageGroup)
	{
		$this->packageGroup = $packageGroup;
	}

	/**
	 * @return PackageGroupRequestType[]
	 */
	public function getPackageGroup(): ?array
	{
		return $this->packageGroup;
	}

	/**
	 * @param PackageGroupRequestType[] $packageGroup
	 * @return PackageGroupsRequestType
	 */
	public function setPackageGroup(array $packageGroup): PackageGroupsRequestType
	{
		$this->packageGroup = $packageGroup;
		return $this;
	}

}
