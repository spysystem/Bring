<?php

namespace Bring;

class ProductSpecificDataResponseType
{

    /**
     * @var string $upsShipmentNumber
     */
    protected $upsShipmentNumber = null;

    /**
     * @var string $upsTrackingNumber
     */
    protected $upsTrackingNumber = null;

    /**
     * @param string $upsShipmentNumber
     * @param string $upsTrackingNumber
     */
    public function __construct($upsShipmentNumber, $upsTrackingNumber)
    {
      $this->upsShipmentNumber = $upsShipmentNumber;
      $this->upsTrackingNumber = $upsTrackingNumber;
    }

    /**
     * @return string
     */
    public function getUpsShipmentNumber()
    {
      return $this->upsShipmentNumber;
    }

    /**
     * @param string $upsShipmentNumber
     * @return \Bring\ProductSpecificDataResponseType
     */
    public function setUpsShipmentNumber($upsShipmentNumber)
    {
      $this->upsShipmentNumber = $upsShipmentNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getUpsTrackingNumber()
    {
      return $this->upsTrackingNumber;
    }

    /**
     * @param string $upsTrackingNumber
     * @return \Bring\ProductSpecificDataResponseType
     */
    public function setUpsTrackingNumber($upsTrackingNumber)
    {
      $this->upsTrackingNumber = $upsTrackingNumber;
      return $this;
    }

}
