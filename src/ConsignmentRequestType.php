<?php

namespace Bring;

class ConsignmentRequestType
{

    /**
     * @var \DateTime $shippingDateTime
     */
    protected $shippingDateTime = null;

    /**
     * @var PartiesRequestType $parties
     */
    protected $parties = null;

    /**
     * @var ProductRequestType $product
     */
    protected $product = null;

    /**
     * @var PurchaseOrderRequestType $purchaseOrder
     */
    protected $purchaseOrder = null;

    /**
     * @var PackagesRequestType $packages
     */
    protected $packages = null;

    /**
     * @var PackageGroupsRequestType $packageGroups
     */
    protected $packageGroups = null;

    /**
     * @var string $correlationId
     */
    protected $correlationId = null;

    /**
     * @param \DateTime $shippingDateTime
     * @param PartiesRequestType $parties
     * @param ProductRequestType $product
     * @param PurchaseOrderRequestType $purchaseOrder
     * @param PackagesRequestType $packages
     * @param PackageGroupsRequestType $packageGroups
     * @param string $correlationId
     */
    public function __construct(\DateTime $shippingDateTime, $parties, $product, $purchaseOrder, $packages, $packageGroups, $correlationId)
    {
      $this->shippingDateTime = $shippingDateTime->format(\DateTime::ATOM);
      $this->parties = $parties;
      $this->product = $product;
      $this->purchaseOrder = $purchaseOrder;
      $this->packages = $packages;
      $this->packageGroups = $packageGroups;
      $this->correlationId = $correlationId;
    }

    /**
     * @return \DateTime
     */
    public function getShippingDateTime()
    {
      if ($this->shippingDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->shippingDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $shippingDateTime
     * @return \Bring\ConsignmentRequestType
     */
    public function setShippingDateTime(\DateTime $shippingDateTime)
    {
      $this->shippingDateTime = $shippingDateTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return PartiesRequestType
     */
    public function getParties()
    {
      return $this->parties;
    }

    /**
     * @param PartiesRequestType $parties
     * @return \Bring\ConsignmentRequestType
     */
    public function setParties($parties)
    {
      $this->parties = $parties;
      return $this;
    }

    /**
     * @return ProductRequestType
     */
    public function getProduct()
    {
      return $this->product;
    }

    /**
     * @param ProductRequestType $product
     * @return \Bring\ConsignmentRequestType
     */
    public function setProduct($product)
    {
      $this->product = $product;
      return $this;
    }

    /**
     * @return PurchaseOrderRequestType
     */
    public function getPurchaseOrder()
    {
      return $this->purchaseOrder;
    }

    /**
     * @param PurchaseOrderRequestType $purchaseOrder
     * @return \Bring\ConsignmentRequestType
     */
    public function setPurchaseOrder($purchaseOrder)
    {
      $this->purchaseOrder = $purchaseOrder;
      return $this;
    }

    /**
     * @return PackagesRequestType
     */
    public function getPackages()
    {
      return $this->packages;
    }

    /**
     * @param PackagesRequestType $packages
     * @return \Bring\ConsignmentRequestType
     */
    public function setPackages($packages)
    {
      $this->packages = $packages;
      return $this;
    }

    /**
     * @return PackageGroupsRequestType
     */
    public function getPackageGroups()
    {
      return $this->packageGroups;
    }

    /**
     * @param PackageGroupsRequestType $packageGroups
     * @return \Bring\ConsignmentRequestType
     */
    public function setPackageGroups($packageGroups)
    {
      $this->packageGroups = $packageGroups;
      return $this;
    }

    /**
     * @return string
     */
    public function getCorrelationId()
    {
      return $this->correlationId;
    }

    /**
     * @param string $correlationId
     * @return \Bring\ConsignmentRequestType
     */
    public function setCorrelationId($correlationId)
    {
      $this->correlationId = $correlationId;
      return $this;
    }

}
