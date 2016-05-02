<?php

namespace Bring;

class cargoInformation
{

    /**
     * @var int $numberOfPackages
     */
    protected $numberOfPackages = null;

    /**
     * @var int $weightInGrams
     */
    protected $weightInGrams = null;

    /**
     * @var float $volumeInDm3
     */
    protected $volumeInDm3 = null;

    /**
     * @param int $numberOfPackages
     * @param int $weightInGrams
     * @param float $volumeInDm3
     */
    public function __construct($numberOfPackages, $weightInGrams, $volumeInDm3)
    {
      $this->numberOfPackages = $numberOfPackages;
      $this->weightInGrams = $weightInGrams;
      $this->volumeInDm3 = $volumeInDm3;
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
     * @return \Bring\cargoInformation
     */
    public function setNumberOfPackages($numberOfPackages)
    {
      $this->numberOfPackages = $numberOfPackages;
      return $this;
    }

    /**
     * @return int
     */
    public function getWeightInGrams()
    {
      return $this->weightInGrams;
    }

    /**
     * @param int $weightInGrams
     * @return \Bring\cargoInformation
     */
    public function setWeightInGrams($weightInGrams)
    {
      $this->weightInGrams = $weightInGrams;
      return $this;
    }

    /**
     * @return float
     */
    public function getVolumeInDm3()
    {
      return $this->volumeInDm3;
    }

    /**
     * @param float $volumeInDm3
     * @return \Bring\cargoInformation
     */
    public function setVolumeInDm3($volumeInDm3)
    {
      $this->volumeInDm3 = $volumeInDm3;
      return $this;
    }

}
