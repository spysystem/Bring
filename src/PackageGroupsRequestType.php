<?php

namespace Bring;

class PackageGroupsRequestType
{

    /**
     * @var PackageGroupRequestType[] $packageGroup
     */
    protected $packageGroup = null;

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
    public function getPackageGroup()
    {
      return $this->packageGroup;
    }

    /**
     * @param PackageGroupRequestType[] $packageGroup
     * @return \Bring\PackageGroupsRequestType
     */
    public function setPackageGroup(array $packageGroup)
    {
      $this->packageGroup = $packageGroup;
      return $this;
    }

}
