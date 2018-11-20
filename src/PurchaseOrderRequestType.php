<?php
namespace Bring;


/**
 * Class PurchaseOrderRequestType
 */
class PurchaseOrderRequestType
{

	/**
	 * @var string[] $purchaseOrderNumber
	 */
	protected $purchaseOrderNumber;

	/**
	 * @param string[] $purchaseOrderNumber
	 */
	public function __construct(array $purchaseOrderNumber)
	{
		$this->purchaseOrderNumber = $purchaseOrderNumber;
	}

	/**
	 * @return string[]
	 */
	public function getPurchaseOrderNumber(): ?array
	{
		return $this->purchaseOrderNumber;
	}

	/**
	 * @param string[] $purchaseOrderNumber
	 * @return PurchaseOrderRequestType
	 */
	public function setPurchaseOrderNumber(array $purchaseOrderNumber): PurchaseOrderRequestType
	{
		$this->purchaseOrderNumber = $purchaseOrderNumber;
		return $this;
	}

}
