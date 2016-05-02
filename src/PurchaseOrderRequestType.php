<?php

namespace Bring;

class PurchaseOrderRequestType
{

    /**
     * @var string[] $purchaseOrderNumber
     */
    protected $purchaseOrderNumber = null;

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
    public function getPurchaseOrderNumber()
    {
      return $this->purchaseOrderNumber;
    }

    /**
     * @param string[] $purchaseOrderNumber
     * @return \Bring\PurchaseOrderRequestType
     */
    public function setPurchaseOrderNumber(array $purchaseOrderNumber)
    {
      $this->purchaseOrderNumber = $purchaseOrderNumber;
      return $this;
    }

}
