<?php

namespace Bring;

class parcelsInformation
{

    /**
     * @var int $numberOfPackages
     */
    protected $numberOfPackages = null;

    /**
     * @var int $numberOfPostContainers
     */
    protected $numberOfPostContainers = null;

    /**
     * @var int $numberOfPallets
     */
    protected $numberOfPallets = null;

    /**
     * @param int $numberOfPackages
     * @param int $numberOfPostContainers
     * @param int $numberOfPallets
     */
    public function __construct($numberOfPackages, $numberOfPostContainers, $numberOfPallets)
    {
      $this->numberOfPackages = $numberOfPackages;
      $this->numberOfPostContainers = $numberOfPostContainers;
      $this->numberOfPallets = $numberOfPallets;
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
     * @return \Bring\parcelsInformation
     */
    public function setNumberOfPackages($numberOfPackages)
    {
      $this->numberOfPackages = $numberOfPackages;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfPostContainers()
    {
      return $this->numberOfPostContainers;
    }

    /**
     * @param int $numberOfPostContainers
     * @return \Bring\parcelsInformation
     */
    public function setNumberOfPostContainers($numberOfPostContainers)
    {
      $this->numberOfPostContainers = $numberOfPostContainers;
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
     * @return \Bring\parcelsInformation
     */
    public function setNumberOfPallets($numberOfPallets)
    {
      $this->numberOfPallets = $numberOfPallets;
      return $this;
    }

}
