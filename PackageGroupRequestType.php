<?php

namespace Bring;

class PackageGroupRequestType
{

    /**
     * @var float $totalWeightInKg
     */
    protected $totalWeightInKg = null;

    /**
     * @var string $goodsDescription
     */
    protected $goodsDescription = null;

    /**
     * @var MeasurementsRequestType $totalDimensions
     */
    protected $totalDimensions = null;

    /**
     * @var int $numberOfPackages
     */
    protected $numberOfPackages = null;

    /**
     * @var string $correlationId
     */
    protected $correlationId = null;

    /**
     * @param float $totalWeightInKg
     * @param string $goodsDescription
     * @param MeasurementsRequestType $totalDimensions
     * @param int $numberOfPackages
     * @param string $correlationId
     */
    public function __construct($totalWeightInKg, $goodsDescription, $totalDimensions, $numberOfPackages, $correlationId)
    {
      $this->totalWeightInKg = $totalWeightInKg;
      $this->goodsDescription = $goodsDescription;
      $this->totalDimensions = $totalDimensions;
      $this->numberOfPackages = $numberOfPackages;
      $this->correlationId = $correlationId;
    }

    /**
     * @return float
     */
    public function getTotalWeightInKg()
    {
      return $this->totalWeightInKg;
    }

    /**
     * @param float $totalWeightInKg
     * @return \Bring\PackageGroupRequestType
     */
    public function setTotalWeightInKg($totalWeightInKg)
    {
      $this->totalWeightInKg = $totalWeightInKg;
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
     * @return \Bring\PackageGroupRequestType
     */
    public function setGoodsDescription($goodsDescription)
    {
      $this->goodsDescription = $goodsDescription;
      return $this;
    }

    /**
     * @return MeasurementsRequestType
     */
    public function getTotalDimensions()
    {
      return $this->totalDimensions;
    }

    /**
     * @param MeasurementsRequestType $totalDimensions
     * @return \Bring\PackageGroupRequestType
     */
    public function setTotalDimensions($totalDimensions)
    {
      $this->totalDimensions = $totalDimensions;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfPackages()
    {
      return $this->numberOfPackages;
    }

    /**
     * @param int $numberOfPackages
     * @return \Bring\PackageGroupRequestType
     */
    public function setNumberOfPackages($numberOfPackages)
    {
      $this->numberOfPackages = $numberOfPackages;
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
     * @return \Bring\PackageGroupRequestType
     */
    public function setCorrelationId($correlationId)
    {
      $this->correlationId = $correlationId;
      return $this;
    }

}
