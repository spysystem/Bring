<?php
namespace Bring;


/**
 * Class ProductSpecificDataResponseType
 */
class ProductSpecificDataResponseType
{

	/**
	 * @var null|string $upsShipmentNumber
	 */
	protected $upsShipmentNumber;

	/**
	 * @var null|string $upsTrackingNumber
	 */
	protected $upsTrackingNumber;

	
	public function __construct()
	{
	
	}

	/**
	 * @return null|string
	 */
	public function getUpsShipmentNumber(): ?string
	{
		return $this->upsShipmentNumber;
	}

	/**
	 * @param null|string $upsShipmentNumber
	 * @return ProductSpecificDataResponseType
	 */
	public function setUpsShipmentNumber(?string $upsShipmentNumber = null): ProductSpecificDataResponseType
	{
		$this->upsShipmentNumber = $upsShipmentNumber;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getUpsTrackingNumber(): ?string
	{
		return $this->upsTrackingNumber;
	}

	/**
	 * @param null|string $upsTrackingNumber
	 * @return ProductSpecificDataResponseType
	 */
	public function setUpsTrackingNumber(?string $upsTrackingNumber = null): ProductSpecificDataResponseType
	{
		$this->upsTrackingNumber = $upsTrackingNumber;
		return $this;
	}

}
