<?php
namespace Bring;


/**
 * Class PackageRequestType
 */
class PackageRequestType
{

	/**
	 * @var float $weightInKg
	 */
	protected $weightInKg;

	/**
	 * @var null|string $goodsDescription
	 */
	protected $goodsDescription;

	/**
	 * @var null|float $volumeInDm3
	 */
	protected $volumeInDm3;

	/**
	 * @var null|MeasurementsRequestType $dimensions
	 */
	protected $dimensions;

	/**
	 * @var null|string $containerId
	 */
	protected $containerId;

	/**
	 * @var null|string $packageType
	 */
	protected $packageType;

	/**
	 * @var null|int $numberOfItems
	 */
	protected $numberOfItems;

	/**
	 * @var null|bool $isStackable
	 */
	protected $isStackable;

	/**
	 * @var null|int $numberOfPallets
	 */
	protected $numberOfPallets;

	/**
	 * @var null|float $loadMeters
	 */
	protected $loadMeters;

	/**
	 * @var string $correlationId
	 */
	protected $correlationId;

	/**
	 * @param float $weightInKg
	 * @param string $correlationId
	 */
	public function __construct(float $weightInKg, string $correlationId)
	{
		$this->weightInKg = $weightInKg;
		$this->correlationId = $correlationId;
	}

	/**
	 * @return float
	 */
	public function getWeightInKg(): ?float
	{
		return $this->weightInKg;
	}

	/**
	 * @param float $weightInKg
	 * @return PackageRequestType
	 */
	public function setWeightInKg(float $weightInKg): PackageRequestType
	{
		$this->weightInKg = $weightInKg;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getGoodsDescription(): ?string
	{
		return $this->goodsDescription;
	}

	/**
	 * @param null|string $goodsDescription
	 * @return PackageRequestType
	 */
	public function setGoodsDescription(?string $goodsDescription = null): PackageRequestType
	{
		$this->goodsDescription = $goodsDescription;
		return $this;
	}

	/**
	 * @return null|float
	 */
	public function getVolumeInDm3(): ?float
	{
		return $this->volumeInDm3;
	}

	/**
	 * @param null|float $volumeInDm3
	 * @return PackageRequestType
	 */
	public function setVolumeInDm3(?float $volumeInDm3 = null): PackageRequestType
	{
		$this->volumeInDm3 = $volumeInDm3;
		return $this;
	}

	/**
	 * @return null|MeasurementsRequestType
	 */
	public function getDimensions(): ?MeasurementsRequestType
	{
		return $this->dimensions;
	}

	/**
	 * @param null|MeasurementsRequestType $dimensions
	 * @return PackageRequestType
	 */
	public function setDimensions(?MeasurementsRequestType $dimensions = null): PackageRequestType
	{
		$this->dimensions = $dimensions;
		return $this;
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
	 * @return PackageRequestType
	 */
	public function setContainerId(?string $containerId = null): PackageRequestType
	{
		$this->containerId = $containerId;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getPackageType(): ?string
	{
		return $this->packageType;
	}

	/**
	 * @param null|string $packageType
	 * @return PackageRequestType
	 */
	public function setPackageType(?string $packageType = null): PackageRequestType
	{
		$this->packageType = $packageType;
		return $this;
	}

	/**
	 * @return null|int
	 */
	public function getNumberOfItems(): ?int
	{
		return $this->numberOfItems;
	}

	/**
	 * @param null|int $numberOfItems
	 * @return PackageRequestType
	 */
	public function setNumberOfItems(?int $numberOfItems = null): PackageRequestType
	{
		$this->numberOfItems = $numberOfItems;
		return $this;
	}

	/**
	 * @return null|bool
	 */
	public function getIsStackable(): ?bool
	{
		return $this->isStackable;
	}

	/**
	 * @param null|bool $isStackable
	 * @return PackageRequestType
	 */
	public function setIsStackable(?bool $isStackable = null): PackageRequestType
	{
		$this->isStackable = $isStackable;
		return $this;
	}

	/**
	 * @return null|int
	 */
	public function getNumberOfPallets(): ?int
	{
		return $this->numberOfPallets;
	}

	/**
	 * @param null|int $numberOfPallets
	 * @return PackageRequestType
	 */
	public function setNumberOfPallets(?int $numberOfPallets = null): PackageRequestType
	{
		$this->numberOfPallets = $numberOfPallets;
		return $this;
	}

	/**
	 * @return null|float
	 */
	public function getLoadMeters(): ?float
	{
		return $this->loadMeters;
	}

	/**
	 * @param null|float $loadMeters
	 * @return PackageRequestType
	 */
	public function setLoadMeters(?float $loadMeters = null): PackageRequestType
	{
		$this->loadMeters = $loadMeters;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCorrelationId(): ?string
	{
		return $this->correlationId;
	}

	/**
	 * @param string $correlationId
	 * @return PackageRequestType
	 */
	public function setCorrelationId(string $correlationId): PackageRequestType
	{
		$this->correlationId = $correlationId;
		return $this;
	}

}
