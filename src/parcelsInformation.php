<?php
namespace Bring;


/**
 * Class parcelsInformation
 */
class parcelsInformation
{

	/**
	 * @var int $numberOfPackages
	 */
	protected $numberOfPackages;

	/**
	 * @var int $numberOfPostContainers
	 */
	protected $numberOfPostContainers;

	/**
	 * @var int $numberOfPallets
	 */
	protected $numberOfPallets;

	/**
	 * @param int $numberOfPackages
	 * @param int $numberOfPostContainers
	 * @param int $numberOfPallets
	 */
	public function __construct(int $numberOfPackages, int $numberOfPostContainers, int $numberOfPallets)
	{
		$this->numberOfPackages = $numberOfPackages;
		$this->numberOfPostContainers = $numberOfPostContainers;
		$this->numberOfPallets = $numberOfPallets;
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
	 * @return parcelsInformation
	 */
	public function setNumberOfPackages(int $numberOfPackages): parcelsInformation
	{
		$this->numberOfPackages = $numberOfPackages;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getNumberOfPostContainers(): ?int
	{
		return $this->numberOfPostContainers;
	}

	/**
	 * @param int $numberOfPostContainers
	 * @return parcelsInformation
	 */
	public function setNumberOfPostContainers(int $numberOfPostContainers): parcelsInformation
	{
		$this->numberOfPostContainers = $numberOfPostContainers;
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
	 * @return parcelsInformation
	 */
	public function setNumberOfPallets(int $numberOfPallets): parcelsInformation
	{
		$this->numberOfPallets = $numberOfPallets;
		return $this;
	}

}
