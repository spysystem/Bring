<?php
namespace Bring;


/**
 * Class ConfirmationResponseType
 */
class ConfirmationResponseType
{

	/**
	 * @var string $consignmentNumber
	 */
	protected $consignmentNumber;

	/**
	 * @var null|ProductSpecificDataResponseType $productSpecificData
	 */
	protected $productSpecificData;

	/**
	 * @var LinksResponseType $links
	 */
	protected $links;

	/**
	 * @var DtoDateAndTimesResponseType $dateAndTimes
	 */
	protected $dateAndTimes;

	/**
	 * @var packages $packages
	 */
	protected $packages;

	/**
	 * @param string $consignmentNumber
	 * @param LinksResponseType $links
	 * @param DtoDateAndTimesResponseType $dateAndTimes
	 * @param packages $packages
	 */
	public function __construct(string $consignmentNumber, LinksResponseType $links, DtoDateAndTimesResponseType $dateAndTimes, packages $packages)
	{
		$this->consignmentNumber = $consignmentNumber;
		$this->links = $links;
		$this->dateAndTimes = $dateAndTimes;
		$this->packages = $packages;
	}

	/**
	 * @return string
	 */
	public function getConsignmentNumber(): ?string
	{
		return $this->consignmentNumber;
	}

	/**
	 * @param string $consignmentNumber
	 * @return ConfirmationResponseType
	 */
	public function setConsignmentNumber(string $consignmentNumber): ConfirmationResponseType
	{
		$this->consignmentNumber = $consignmentNumber;
		return $this;
	}

	/**
	 * @return null|ProductSpecificDataResponseType
	 */
	public function getProductSpecificData(): ?ProductSpecificDataResponseType
	{
		return $this->productSpecificData;
	}

	/**
	 * @param null|ProductSpecificDataResponseType $productSpecificData
	 * @return ConfirmationResponseType
	 */
	public function setProductSpecificData(?ProductSpecificDataResponseType $productSpecificData = null): ConfirmationResponseType
	{
		$this->productSpecificData = $productSpecificData;
		return $this;
	}

	/**
	 * @return LinksResponseType
	 */
	public function getLinks(): ?LinksResponseType
	{
		return $this->links;
	}

	/**
	 * @param LinksResponseType $links
	 * @return ConfirmationResponseType
	 */
	public function setLinks(LinksResponseType $links): ConfirmationResponseType
	{
		$this->links = $links;
		return $this;
	}

	/**
	 * @return DtoDateAndTimesResponseType
	 */
	public function getDateAndTimes(): ?DtoDateAndTimesResponseType
	{
		return $this->dateAndTimes;
	}

	/**
	 * @param DtoDateAndTimesResponseType $dateAndTimes
	 * @return ConfirmationResponseType
	 */
	public function setDateAndTimes(DtoDateAndTimesResponseType $dateAndTimes): ConfirmationResponseType
	{
		$this->dateAndTimes = $dateAndTimes;
		return $this;
	}

	/**
	 * @return packages
	 */
	public function getPackages(): ?packages
	{
		return $this->packages;
	}

	/**
	 * @param packages $packages
	 * @return ConfirmationResponseType
	 */
	public function setPackages(packages $packages): ConfirmationResponseType
	{
		$this->packages = $packages;
		return $this;
	}

}
