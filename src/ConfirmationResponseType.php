<?php

namespace Bring;

class ConfirmationResponseType
{

    /**
     * @var string $consignmentNumber
     */
    protected $consignmentNumber = null;

    /**
     * @var ProductSpecificDataResponseType $productSpecificData
     */
    protected $productSpecificData = null;

    /**
     * @var LinksResponseType $links
     */
    protected $links = null;

    /**
     * @var DtoDateAndTimesResponseType $dateAndTimes
     */
    protected $dateAndTimes = null;

    /**
     * @var packages $packages
     */
    protected $packages = null;

    /**
     * @param string $consignmentNumber
     * @param ProductSpecificDataResponseType $productSpecificData
     * @param LinksResponseType $links
     * @param DtoDateAndTimesResponseType $dateAndTimes
     * @param packages $packages
     */
    public function __construct($consignmentNumber, $productSpecificData, $links, $dateAndTimes, $packages)
    {
      $this->consignmentNumber = $consignmentNumber;
      $this->productSpecificData = $productSpecificData;
      $this->links = $links;
      $this->dateAndTimes = $dateAndTimes;
      $this->packages = $packages;
    }

    /**
     * @return string
     */
    public function getConsignmentNumber()
    {
      return $this->consignmentNumber;
    }

    /**
     * @param string $consignmentNumber
     * @return \Bring\ConfirmationResponseType
     */
    public function setConsignmentNumber($consignmentNumber)
    {
      $this->consignmentNumber = $consignmentNumber;
      return $this;
    }

    /**
     * @return ProductSpecificDataResponseType
     */
    public function getProductSpecificData()
    {
      return $this->productSpecificData;
    }

    /**
     * @param ProductSpecificDataResponseType $productSpecificData
     * @return \Bring\ConfirmationResponseType
     */
    public function setProductSpecificData($productSpecificData)
    {
      $this->productSpecificData = $productSpecificData;
      return $this;
    }

    /**
     * @return LinksResponseType
     */
    public function getLinks()
    {
      return $this->links;
    }

    /**
     * @param LinksResponseType $links
     * @return \Bring\ConfirmationResponseType
     */
    public function setLinks($links)
    {
      $this->links = $links;
      return $this;
    }

    /**
     * @return DtoDateAndTimesResponseType
     */
    public function getDateAndTimes()
    {
      return $this->dateAndTimes;
    }

    /**
     * @param DtoDateAndTimesResponseType $dateAndTimes
     * @return \Bring\ConfirmationResponseType
     */
    public function setDateAndTimes($dateAndTimes)
    {
      $this->dateAndTimes = $dateAndTimes;
      return $this;
    }

    /**
     * @return packages
     */
    public function getPackages()
    {
      return $this->packages;
    }

    /**
     * @param packages $packages
     * @return \Bring\ConfirmationResponseType
     */
    public function setPackages($packages)
    {
      $this->packages = $packages;
      return $this;
    }

}
