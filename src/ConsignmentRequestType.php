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
	 * @var null|DateTime $customerSpecifiedDeliveryDateTime
	 */
	protected $customerSpecifiedDeliveryDateTime;

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
	 * @var null|PackagesRequestType $packages
	 */
	protected $packages;

	/**
	 * @var null|PackageGroupsRequestType $packageGroups
	 */
	protected $packageGroups;

	/**
	 * @var null|bool $generateQrCodes
	 */
	protected $generateQrCodes;

	/**
	 * @var string $correlationId
	 */
	protected $correlationId;

	/**
	 * @param DateTime $shippingDateTime
	 * @param PartiesRequestType $parties
	 * @param ProductRequestType $product
	 * @param string $correlationId
	 */
	public function __construct(DateTime $shippingDateTime, PartiesRequestType $parties, ProductRequestType $product, string $correlationId)
	{
		$this->shippingDateTime = $shippingDateTime->format(DateTime::ATOM);
		$this->parties = $parties;
		$this->product = $product;
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
	 * @return null|DateTime
	 */
	public function getCustomerSpecifiedDeliveryDateTime(): ?DateTime
	{
		if ($this->customerSpecifiedDeliveryDateTime === null)
		{
			return null;
		}
		try
		{
			return new DateTime($this->customerSpecifiedDeliveryDateTime);
		}
		catch (Exception $oException)
		{
			return null;
		}
	}

	/**
	 * @param null|DateTime $customerSpecifiedDeliveryDateTime
	 * @return ConsignmentRequestType
	 */
	public function setCustomerSpecifiedDeliveryDateTime(?DateTime $customerSpecifiedDeliveryDateTime = null): ConsignmentRequestType
	{
		if ($customerSpecifiedDeliveryDateTime === null)
		{
			$this->customerSpecifiedDeliveryDateTime = null;
		}
		else
		{
			$this->customerSpecifiedDeliveryDateTime = $customerSpecifiedDeliveryDateTime->format(DateTime::ATOM);
		}
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
	 * @return null|PackagesRequestType
	 */
	public function getPackages(): ?PackagesRequestType
	{
		return $this->packages;
	}

	/**
	 * @param null|PackagesRequestType $packages
	 * @return ConsignmentRequestType
	 */
	public function setPackages(?PackagesRequestType $packages = null): ConsignmentRequestType
	{
		$this->packages = $packages;
		return $this;
	}

	/**
	 * @return null|PackageGroupsRequestType
	 */
	public function getPackageGroups(): ?PackageGroupsRequestType
	{
		return $this->packageGroups;
	}

	/**
	 * @param null|PackageGroupsRequestType $packageGroups
	 * @return ConsignmentRequestType
	 */
	public function setPackageGroups(?PackageGroupsRequestType $packageGroups = null): ConsignmentRequestType
	{
		$this->packageGroups = $packageGroups;
		return $this;
	}

	/**
	 * @return null|bool
	 */
	public function getGenerateQrCodes(): ?bool
	{
		return $this->generateQrCodes;
	}

	/**
	 * @param null|bool $generateQrCodes
	 * @return ConsignmentRequestType
	 */
	public function setGenerateQrCodes(?bool $generateQrCodes = null): ConsignmentRequestType
	{
		$this->generateQrCodes = $generateQrCodes;
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
