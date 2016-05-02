<?php

namespace Bring;

class packages
{

    /**
     * @var PackageResponseType[] $package
     */
    protected $package = null;

    /**
     * @param PackageResponseType[] $package
     */
    public function __construct(array $package)
    {
      $this->package = $package;
    }

    /**
     * @return PackageResponseType[]
     */
    public function getPackage()
    {
      return $this->package;
    }

    /**
     * @param PackageResponseType[] $package
     * @return \Bring\packages
     */
    public function setPackage(array $package)
    {
      $this->package = $package;
      return $this;
    }

}
