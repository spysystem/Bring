<?php
namespace Bring;


/**
 * Class PackageGroupRequestType
 */
class PackageGroupRequestType
{

	/**
	 * @var float $totalWeightInKg
	 */
	protected $totalWeightInKg;

	/**
	 * @var null|string $goodsDescription
	 */
	protected $goodsDescription;

	/**
	 * @var null|float $volumeInDm3
	 */
	protected $volumeInDm3;

	/**
	 * @var null|MeasurementsRequestType $totalDimensions
	 */
	protected $totalDimensions;

	/**
	 * @var int $numberOfPackages
	 */
	protected $numberOfPackages;

	/**
	 * @var string $correlationId
	 */
	protected $correlationId;

	/**
	 * @param float $totalWeightInKg
	 * @param int $numberOfPackages
	 * @param string $correlationId
	 */
	public function __construct(float $totalWeightInKg, int $numberOfPackages, string $correlationId)
	{
		$this->totalWeightInKg = $totalWeightInKg;
		$this->numberOfPackages = $numberOfPackages;
		$this->correlationId = $correlationId;
	}

	/**
	 * @return float
	 */
	public function getTotalWeightInKg(): ?float
	{
		return $this->totalWeightInKg;
	}

	/**
	 * @param float $totalWeightInKg
	 * @return PackageGroupRequestType
	 */
	public function setTotalWeightInKg(float $totalWeightInKg): PackageGroupRequestType
	{
		$this->totalWeightInKg = $totalWeightInKg;
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
	 * @return PackageGroupRequestType
	 */
	public function setGoodsDescription(?string $goodsDescription = null): PackageGroupRequestType
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
	 * @return PackageGroupRequestType
	 */
	public function setVolumeInDm3(?float $volumeInDm3 = null): PackageGroupRequestType
	{
		$this->volumeInDm3 = $volumeInDm3;
		return $this;
	}

	/**
	 * @return null|MeasurementsRequestType
	 */
	public function getTotalDimensions(): ?MeasurementsRequestType
	{
		return $this->totalDimensions;
	}

	/**
	 * @param null|MeasurementsRequestType $totalDimensions
	 * @return PackageGroupRequestType
	 */
	public function setTotalDimensions(?MeasurementsRequestType $totalDimensions = null): PackageGroupRequestType
	{
		$this->totalDimensions = $totalDimensions;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getNumberOfPackages(): ?int
	{
		return $this->numberOfPackages;
	}

	/**
	 * @param int $numberOfPackages
	 * @return PackageGroupRequestType
	 */
	public function setNumberOfPackages(int $numberOfPackages): PackageGroupRequestType
	{
		$this->numberOfPackages = $numberOfPackages;
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
	 * @return PackageGroupRequestType
	 */
	public function setCorrelationId(string $correlationId): PackageGroupRequestType
	{
		$this->correlationId = $correlationId;
		return $this;
	}

}
