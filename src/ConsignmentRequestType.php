<?php
namespace Bring;

use DateTime;
use Exception;

/**
 * Class ConsignmentRequestType
 */
class ConsignmentRequestType
{

	/**
	 * @var DateTime $shippingDateTime
	 */
	protected $shippingDateTime;

	/**
	 * @var PartiesRequestType $parties
	 */
	protected $parties;

	/**
	 * @var ProductRequestType $product
	 */
	protected $product;

	/**
	 * @var null|PurchaseOrderRequestType $purchaseOrder
	 */
	protected $purchaseOrder;

	/**
	 * @var PackagesRequestType $packages
	 */
	protected $packages;

	/**
	 * @var PackageGroupsRequestType $packageGroups
	 */
	protected $packageGroups;

	/**
	 * @var string $correlationId
	 */
	protected $correlationId;

	/**
	 * @param DateTime $shippingDateTime
	 * @param PartiesRequestType $parties
	 * @param ProductRequestType $product
	 * @param PackagesRequestType $packages
	 * @param PackageGroupsRequestType $packageGroups
	 * @param string $correlationId
	 */
	public function __construct(DateTime $shippingDateTime, PartiesRequestType $parties, ProductRequestType $product, PackagesRequestType $packages, PackageGroupsRequestType $packageGroups, string $correlationId)
	{
		$this->shippingDateTime = $shippingDateTime->format(DateTime::ATOM);
		$this->parties = $parties;
		$this->product = $product;
		$this->packages = $packages;
		$this->packageGroups = $packageGroups;
		$this->correlationId = $correlationId;
	}

	/**
	 * @return DateTime
	 */
	public function getShippingDateTime(): ?DateTime
	{
		if ($this->shippingDateTime === null)
		{
			return null;
		}
		try
		{
			return new DateTime($this->shippingDateTime);
		}
		catch (Exception $oException)
		{
			return null;
		}
	}

	/**
	 * @param DateTime $shippingDateTime
	 * @return ConsignmentRequestType
	 */
	public function setShippingDateTime(DateTime $shippingDateTime): ConsignmentRequestType
	{
		$this->shippingDateTime = $shippingDateTime->format(DateTime::ATOM);
		return $this;
	}

	/**
	 * @return PartiesRequestType
	 */
	public function getParties(): ?PartiesRequestType
	{
		return $this->parties;
	}

	/**
	 * @param PartiesRequestType $parties
	 * @return ConsignmentRequestType
	 */
	public function setParties(PartiesRequestType $parties): ConsignmentRequestType
	{
		$this->parties = $parties;
		return $this;
	}

	/**
	 * @return ProductRequestType
	 */
	public function getProduct(): ?ProductRequestType
	{
		return $this->product;
	}

	/**
	 * @param ProductRequestType $product
	 * @return ConsignmentRequestType
	 */
	public function setProduct(ProductRequestType $product): ConsignmentRequestType
	{
		$this->product = $product;
		return $this;
	}

	/**
	 * @return null|PurchaseOrderRequestType
	 */
	public function getPurchaseOrder(): ?PurchaseOrderRequestType
	{
		return $this->purchaseOrder;
	}

	/**
	 * @param null|PurchaseOrderRequestType $purchaseOrder
	 * @return ConsignmentRequestType
	 */
	public function setPurchaseOrder(?PurchaseOrderRequestType $purchaseOrder = null): ConsignmentRequestType
	{
		$this->purchaseOrder = $purchaseOrder;
		return $this;
	}

	/**
	 * @return PackagesRequestType
	 */
	public function getPackages(): ?PackagesRequestType
	{
		return $this->packages;
	}

	/**
	 * @param PackagesRequestType $packages
	 * @return ConsignmentRequestType
	 */
	public function setPackages(PackagesRequestType $packages): ConsignmentRequestType
	{
		$this->packages = $packages;
		return $this;
	}

	/**
	 * @return PackageGroupsRequestType
	 */
	public function getPackageGroups(): ?PackageGroupsRequestType
	{
		return $this->packageGroups;
	}

	/**
	 * @param PackageGroupsRequestType $packageGroups
	 * @return ConsignmentRequestType
	 */
	public function setPackageGroups(PackageGroupsRequestType $packageGroups): ConsignmentRequestType
	{
		$this->packageGroups = $packageGroups;
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
	 * @return ConsignmentRequestType
	 */
	public function setCorrelationId(string $correlationId): ConsignmentRequestType
	{
		$this->correlationId = $correlationId;
		return $this;
	}

}
