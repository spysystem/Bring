<?php
namespace Bring;


/**
 * Class cargoInformation
 */
class cargoInformation
{

	/**
	 * @var int $numberOfPackages
	 */
	protected $numberOfPackages;

	/**
	 * @var int $weightInGrams
	 */
	protected $weightInGrams;

	/**
	 * @var float $volumeInDm3
	 */
	protected $volumeInDm3;

	/**
	 * @param int $numberOfPackages
	 * @param int $weightInGrams
	 * @param float $volumeInDm3
	 */
	public function __construct(int $numberOfPackages, int $weightInGrams, float $volumeInDm3)
	{
		$this->numberOfPackages = $numberOfPackages;
		$this->weightInGrams = $weightInGrams;
		$this->volumeInDm3 = $volumeInDm3;
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
	 * @return cargoInformation
	 */
	public function setNumberOfPackages(int $numberOfPackages): cargoInformation
	{
		$this->numberOfPackages = $numberOfPackages;
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
	 * @return cargoInformation
	 */
	public function setWeightInGrams(int $weightInGrams): cargoInformation
	{
		$this->weightInGrams = $weightInGrams;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getVolumeInDm3(): ?float
	{
		return $this->volumeInDm3;
	}

	/**
	 * @param float $volumeInDm3
	 * @return cargoInformation
	 */
	public function setVolumeInDm3(float $volumeInDm3): cargoInformation
	{
		$this->volumeInDm3 = $volumeInDm3;
		return $this;
	}

}
