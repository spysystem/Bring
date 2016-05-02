<?php

namespace Bring;

class parcelsInternationalInformation
{

    /**
     * @var int $numberOfPackages
     */
    protected $numberOfPackages = null;

    /**
     * @var int $numberOfPallets
     */
    protected $numberOfPallets = null;

    /**
     * @var int $weightInGrams
     */
    protected $weightInGrams = null;

    /**
     * @param int $numberOfPackages
     * @param int $numberOfPallets
     * @param int $weightInGrams
     */
    public function __construct($numberOfPackages, $numberOfPallets, $weightInGrams)
    {
      $this->numberOfPackages = $numberOfPackages;
      $this->numberOfPallets = $numberOfPallets;
      $this->weightInGrams = $weightInGrams;
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
     * @return \Bring\parcelsInternationalInformation
     */
    public function setNumberOfPackages($numberOfPackages)
    {
      $this->numberOfPackages = $numberOfPackages;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfPallets()
    {
      return $this->numberOfPallets;
    }

    /**
     * @param int $numberOfPallets
     * @return \Bring\parcelsInternationalInformation
     */
    public function setNumberOfPallets($numberOfPallets)
    {
      $this->numberOfPallets = $numberOfPallets;
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
     * @return \Bring\parcelsInternationalInformation
     */
    public function setWeightInGrams($weightInGrams)
    {
      $this->weightInGrams = $weightInGrams;
      return $this;
    }

}
