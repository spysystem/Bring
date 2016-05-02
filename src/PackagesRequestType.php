<?php

namespace Bring;

class PackagesRequestType
{

    /**
     * @var PackageRequestType[] $package
     */
    protected $package = null;

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
    public function getPackage()
    {
      return $this->package;
    }

    /**
     * @param PackageRequestType[] $package
     * @return \Bring\PackagesRequestType
     */
    public function setPackage(array $package)
    {
      $this->package = $package;
      return $this;
    }

}
