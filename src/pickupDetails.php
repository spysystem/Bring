<?php
namespace Bring;

/**
 * Class pickupDetails
 */
class pickupDetails
{
	/**
	 * @var int $numberOfPackages
	 */
	protected $numberOfPackages;

	/**
	 * @var null|int $numberOfPostContainers
	 */
	protected $numberOfPostContainers;

	/**
	 * @var null|int $numberOfPallets
	 */
	protected $numberOfPallets;

	/**
	 * @var null|int $weightInGrams
	 */
	protected $weightInGrams;

	/**
	 * @var null|float $volumeInDm3
	 */
	protected $volumeInDm3;

	/**
	 * @param int $numberOfPackages
	 */
	public function __construct(int $numberOfPackages)
	{
		$this->numberOfPackages = $numberOfPackages;
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
	 * @return pickupDetails
	 */
	public function setNumberOfPackages(int $numberOfPackages): pickupDetails
	{
		$this->numberOfPackages = $numberOfPackages;
		return $this;
	}

	/**
	 * @return null|int
	 */
	public function getNumberOfPostContainers(): ?int
	{
		return $this->numberOfPostContainers;
	}

	/**
	 * @param null|int $numberOfPostContainers
	 * @return pickupDetails
	 */
	public function setNumberOfPostContainers(?int $numberOfPostContainers = null): pickupDetails
	{
		$this->numberOfPostContainers = $numberOfPostContainers;
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
	 * @return pickupDetails
	 */
	public function setNumberOfPallets(?int $numberOfPallets = null): pickupDetails
	{
		$this->numberOfPallets = $numberOfPallets;
		return $this;
	}

	/**
	 * @return null|int
	 */
	public function getWeightInGrams(): ?int
	{
		return $this->weightInGrams;
	}

	/**
	 * @param null|int $weightInGrams
	 * @return pickupDetails
	 */
	public function setWeightInGrams(?int $weightInGrams = null): pickupDetails
	{
		$this->weightInGrams = $weightInGrams;
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
	 * @return pickupDetails
	 */
	public function setVolumeInDm3(?float $volumeInDm3 = null): pickupDetails
	{
		$this->volumeInDm3 = $volumeInDm3;
		return $this;
	}

}
