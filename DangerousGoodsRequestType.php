<?php

namespace Bring;

class DangerousGoodsRequestType
{

    /**
     * @var string $containerId
     */
    protected $containerId = null;

    /**
     * @var int $weightInGrams
     */
    protected $weightInGrams = null;

    /**
     * @var string $unNumber
     */
    protected $unNumber = null;

    /**
     * @var string $commodity
     */
    protected $commodity = null;

    /**
     * @var string $packingGroup
     */
    protected $packingGroup = null;

    /**
     * @var string $dangerClass
     */
    protected $dangerClass = null;

    /**
     * @var string $tunnelRestrictionCode
     */
    protected $tunnelRestrictionCode = null;

    /**
     * @var string $safetyMarkCode
     */
    protected $safetyMarkCode = null;

    /**
     * @var int $factor
     */
    protected $factor = null;

    /**
     * @param string $containerId
     * @param int $weightInGrams
     * @param string $unNumber
     * @param string $commodity
     * @param string $packingGroup
     * @param string $dangerClass
     * @param string $tunnelRestrictionCode
     * @param string $safetyMarkCode
     * @param int $factor
     */
    public function __construct($containerId, $weightInGrams, $unNumber, $commodity, $packingGroup, $dangerClass, $tunnelRestrictionCode, $safetyMarkCode, $factor)
    {
      $this->containerId = $containerId;
      $this->weightInGrams = $weightInGrams;
      $this->unNumber = $unNumber;
      $this->commodity = $commodity;
      $this->packingGroup = $packingGroup;
      $this->dangerClass = $dangerClass;
      $this->tunnelRestrictionCode = $tunnelRestrictionCode;
      $this->safetyMarkCode = $safetyMarkCode;
      $this->factor = $factor;
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
     * @return \Bring\DangerousGoodsRequestType
     */
    public function setContainerId($containerId)
    {
      $this->containerId = $containerId;
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
     * @return \Bring\DangerousGoodsRequestType
     */
    public function setWeightInGrams($weightInGrams)
    {
      $this->weightInGrams = $weightInGrams;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnNumber()
    {
      return $this->unNumber;
    }

    /**
     * @param string $unNumber
     * @return \Bring\DangerousGoodsRequestType
     */
    public function setUnNumber($unNumber)
    {
      $this->unNumber = $unNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCommodity()
    {
      return $this->commodity;
    }

    /**
     * @param string $commodity
     * @return \Bring\DangerousGoodsRequestType
     */
    public function setCommodity($commodity)
    {
      $this->commodity = $commodity;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackingGroup()
    {
      return $this->packingGroup;
    }

    /**
     * @param string $packingGroup
     * @return \Bring\DangerousGoodsRequestType
     */
    public function setPackingGroup($packingGroup)
    {
      $this->packingGroup = $packingGroup;
      return $this;
    }

    /**
     * @return string
     */
    public function getDangerClass()
    {
      return $this->dangerClass;
    }

    /**
     * @param string $dangerClass
     * @return \Bring\DangerousGoodsRequestType
     */
    public function setDangerClass($dangerClass)
    {
      $this->dangerClass = $dangerClass;
      return $this;
    }

    /**
     * @return string
     */
    public function getTunnelRestrictionCode()
    {
      return $this->tunnelRestrictionCode;
    }

    /**
     * @param string $tunnelRestrictionCode
     * @return \Bring\DangerousGoodsRequestType
     */
    public function setTunnelRestrictionCode($tunnelRestrictionCode)
    {
      $this->tunnelRestrictionCode = $tunnelRestrictionCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSafetyMarkCode()
    {
      return $this->safetyMarkCode;
    }

    /**
     * @param string $safetyMarkCode
     * @return \Bring\DangerousGoodsRequestType
     */
    public function setSafetyMarkCode($safetyMarkCode)
    {
      $this->safetyMarkCode = $safetyMarkCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getFactor()
    {
      return $this->factor;
    }

    /**
     * @param int $factor
     * @return \Bring\DangerousGoodsRequestType
     */
    public function setFactor($factor)
    {
      $this->factor = $factor;
      return $this;
    }

}
