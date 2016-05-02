<?php

namespace Bring;

class PackageRequestType
{

    /**
     * @var float $weightInKg
     */
    protected $weightInKg = null;

    /**
     * @var string $goodsDescription
     */
    protected $goodsDescription = null;

    /**
     * @var MeasurementsRequestType $dimensions
     */
    protected $dimensions = null;

    /**
     * @var string $containerId
     */
    protected $containerId = null;

    /**
     * @var string $packageType
     */
    protected $packageType = null;

    /**
     * @var int $numberOfItems
     */
    protected $numberOfItems = null;

    /**
     * @var string $correlationId
     */
    protected $correlationId = null;

    /**
     * @param float $weightInKg
     * @param string $goodsDescription
     * @param MeasurementsRequestType $dimensions
     * @param string $containerId
     * @param string $packageType
     * @param int $numberOfItems
     * @param string $correlationId
     */
    public function __construct($weightInKg, $goodsDescription, $dimensions, $containerId, $packageType, $numberOfItems, $correlationId)
    {
      $this->weightInKg = $weightInKg;
      $this->goodsDescription = $goodsDescription;
      $this->dimensions = $dimensions;
      $this->containerId = $containerId;
      $this->packageType = $packageType;
      $this->numberOfItems = $numberOfItems;
      $this->correlationId = $correlationId;
    }

    /**
     * @return float
     */
    public function getWeightInKg()
    {
      return $this->weightInKg;
    }

    /**
     * @param float $weightInKg
     * @return \Bring\PackageRequestType
     */
    public function setWeightInKg($weightInKg)
    {
      $this->weightInKg = $weightInKg;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsDescription()
    {
      return $this->goodsDescription;
    }

    /**
     * @param string $goodsDescription
     * @return \Bring\PackageRequestType
     */
    public function setGoodsDescription($goodsDescription)
    {
      $this->goodsDescription = $goodsDescription;
      return $this;
    }

    /**
     * @return MeasurementsRequestType
     */
    public function getDimensions()
    {
      return $this->dimensions;
    }

    /**
     * @param MeasurementsRequestType $dimensions
     * @return \Bring\PackageRequestType
     */
    public function setDimensions($dimensions)
    {
      $this->dimensions = $dimensions;
      return $this;
    }

    /**
     * @return string
     */
    public function getContainerId()
    {
      return $this->containerId;
    }

    /**
     * @param string $containerId
     * @return \Bring\PackageRequestType
     */
    public function setContainerId($containerId)
    {
      $this->containerId = $containerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackageType()
    {
      return $this->packageType;
    }

    /**
     * @param string $packageType
     * @return \Bring\PackageRequestType
     */
    public function setPackageType($packageType)
    {
      $this->packageType = $packageType;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfItems()
    {
      return $this->numberOfItems;
    }

    /**
     * @param int $numberOfItems
     * @return \Bring\PackageRequestType
     */
    public function setNumberOfItems($numberOfItems)
    {
      $this->numberOfItems = $numberOfItems;
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
     * @return \Bring\PackageRequestType
     */
    public function setCorrelationId($correlationId)
    {
      $this->correlationId = $correlationId;
      return $this;
    }

}
