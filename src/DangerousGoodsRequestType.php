<?php
namespace Bring;


/**
 * Class DangerousGoodsRequestType
 */
class DangerousGoodsRequestType
{

	/**
	 * @var null|string $containerId
	 */
	protected $containerId;

	/**
	 * @var int $weightInGrams
	 */
	protected $weightInGrams;

	/**
	 * @var string $unNumber
	 */
	protected $unNumber;

	/**
	 * @var string $commodity
	 */
	protected $commodity;

	/**
	 * @var null|string $packingGroup
	 */
	protected $packingGroup;

	/**
	 * @var string $dangerClass
	 */
	protected $dangerClass;

	/**
	 * @var null|string $tunnelRestrictionCode
	 */
	protected $tunnelRestrictionCode;

	/**
	 * @var null|string $safetyMarkCode
	 */
	protected $safetyMarkCode;

	/**
	 * @var null|int $factor
	 */
	protected $factor;

	/**
	 * @param int $weightInGrams
	 * @param string $unNumber
	 * @param string $commodity
	 * @param string $dangerClass
	 */
	public function __construct(int $weightInGrams, string $unNumber, string $commodity, string $dangerClass)
	{
		$this->weightInGrams = $weightInGrams;
		$this->unNumber = $unNumber;
		$this->commodity = $commodity;
		$this->dangerClass = $dangerClass;
	}

	/**
	 * @return null|string
	 */
	public function getContainerId(): ?string
	{
		return $this->containerId;
	}

	/**
	 * @param null|string $containerId
	 * @return DangerousGoodsRequestType
	 */
	public function setContainerId(?string $containerId = null): DangerousGoodsRequestType
	{
		$this->containerId = $containerId;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getWeightInGrams(): ?int
	{
		return $this->weightInGrams;
	}

	/**
	 * @param int $weightInGrams
	 * @return DangerousGoodsRequestType
	 */
	public function setWeightInGrams(int $weightInGrams): DangerousGoodsRequestType
	{
		$this->weightInGrams = $weightInGrams;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getUnNumber(): ?string
	{
		return $this->unNumber;
	}

	/**
	 * @param string $unNumber
	 * @return DangerousGoodsRequestType
	 */
	public function setUnNumber(string $unNumber): DangerousGoodsRequestType
	{
		$this->unNumber = $unNumber;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCommodity(): ?string
	{
		return $this->commodity;
	}

	/**
	 * @param string $commodity
	 * @return DangerousGoodsRequestType
	 */
	public function setCommodity(string $commodity): DangerousGoodsRequestType
	{
		$this->commodity = $commodity;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getPackingGroup(): ?string
	{
		return $this->packingGroup;
	}

	/**
	 * @param null|string $packingGroup
	 * @return DangerousGoodsRequestType
	 */
	public function setPackingGroup(?string $packingGroup = null): DangerousGoodsRequestType
	{
		$this->packingGroup = $packingGroup;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDangerClass(): ?string
	{
		return $this->dangerClass;
	}

	/**
	 * @param string $dangerClass
	 * @return DangerousGoodsRequestType
	 */
	public function setDangerClass(string $dangerClass): DangerousGoodsRequestType
	{
		$this->dangerClass = $dangerClass;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getTunnelRestrictionCode(): ?string
	{
		return $this->tunnelRestrictionCode;
	}

	/**
	 * @param null|string $tunnelRestrictionCode
	 * @return DangerousGoodsRequestType
	 */
	public function setTunnelRestrictionCode(?string $tunnelRestrictionCode = null): DangerousGoodsRequestType
	{
		$this->tunnelRestrictionCode = $tunnelRestrictionCode;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getSafetyMarkCode(): ?string
	{
		return $this->safetyMarkCode;
	}

	/**
	 * @param null|string $safetyMarkCode
	 * @return DangerousGoodsRequestType
	 */
	public function setSafetyMarkCode(?string $safetyMarkCode = null): DangerousGoodsRequestType
	{
		$this->safetyMarkCode = $safetyMarkCode;
		return $this;
	}

	/**
	 * @return null|int
	 */
	public function getFactor(): ?int
	{
		return $this->factor;
	}

	/**
	 * @param null|int $factor
	 * @return DangerousGoodsRequestType
	 */
	public function setFactor(?int $factor = null): DangerousGoodsRequestType
	{
		$this->factor = $factor;
		return $this;
	}

}
