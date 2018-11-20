<?php
namespace Bring;


/**
 * Class parcelsInternationalInformation
 */
class parcelsInternationalInformation
{

	/**
	 * @var int $numberOfPackages
	 */
	protected $numberOfPackages;

	/**
	 * @var int $numberOfPallets
	 */
	protected $numberOfPallets;

	/**
	 * @var int $weightInGrams
	 */
	protected $weightInGrams;

	/**
	 * @param int $numberOfPackages
	 * @param int $numberOfPallets
	 * @param int $weightInGrams
	 */
	public function __construct(int $numberOfPackages, int $numberOfPallets, int $weightInGrams)
	{
		$this->numberOfPackages = $numberOfPackages;
		$this->numberOfPallets = $numberOfPallets;
		$this->weightInGrams = $weightInGrams;
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
	 * @return parcelsInternationalInformation
	 */
	public function setNumberOfPackages(int $numberOfPackages): parcelsInternationalInformation
	{
		$this->numberOfPackages = $numberOfPackages;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getNumberOfPallets(): ?int
	{
		return $this->numberOfPallets;
	}

	/**
	 * @param int $numberOfPallets
	 * @return parcelsInternationalInformation
	 */
	public function setNumberOfPallets(int $numberOfPallets): parcelsInternationalInformation
	{
		$this->numberOfPallets = $numberOfPallets;
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
	 * @return parcelsInternationalInformation
	 */
	public function setWeightInGrams(int $weightInGrams): parcelsInternationalInformation
	{
		$this->weightInGrams = $weightInGrams;
		return $this;
	}

}
