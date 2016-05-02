<?php

namespace Bring;

class PackageResponseType
{

    /**
     * @var string $packageNumber
     */
    protected $packageNumber = null;

    /**
     * @var string $correlationId
     */
    protected $correlationId = null;

    /**
     * @param string $packageNumber
     * @param string $correlationId
     */
    public function __construct($packageNumber, $correlationId)
    {
      $this->packageNumber = $packageNumber;
      $this->correlationId = $correlationId;
    }

    /**
     * @return string
     */
    public function getPackageNumber()
    {
      return $this->packageNumber;
    }

    /**
     * @param string $packageNumber
     * @return \Bring\PackageResponseType
     */
    public function setPackageNumber($packageNumber)
    {
      $this->packageNumber = $packageNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCorrelationId()
    {
      return $this->correlationId;
    }

    /**
     * @param string $correlationId
     * @return \Bring\PackageResponseType
     */
    public function setCorrelationId($correlationId)
    {
      $this->correlationId = $correlationId;
      return $this;
    }

}
