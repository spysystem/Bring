<?php
namespace Bring;


/**
 * Class ServicesRequestType
 */
class ServicesRequestType
{

	/**
	 * @var null|RecipientNotificationRequestType $recipientNotification
	 */
	protected $recipientNotification;

	/**
	 * @var null|string $quickPackEnvelope
	 */
	protected $quickPackEnvelope;

	/**
	 * @var null|CashOnDeliveryRequestType $cashOnDelivery
	 */
	protected $cashOnDelivery;

	/**
	 * @var null|string $deliveryOption
	 */
	protected $deliveryOption;

	/**
	 * @var null|FlexDeliveryRequestType $flexDelivery
	 */
	protected $flexDelivery;

	/**
	 * @var null|DeliveryIndoorsRequestType $deliveryIndoors
	 */
	protected $deliveryIndoors;

	/**
	 * @var null|string $phoneNotification
	 */
	protected $phoneNotification;

	/**
	 * @var null|string $nonFreeze
	 */
	protected $nonFreeze;

	/**
	 * @var null|DangerousGoodsRequestType $dangerousGoods
	 */
	protected $dangerousGoods;

	/**
	 * @var null|string $express
	 */
	protected $express;

	/**
	 * @var null|string $advisering
	 */
	protected $advisering;

	/**
	 * @var null|string $simpleDelivery
	 */
	protected $simpleDelivery;

	/**
	 * @var null|string $insurance
	 */
	protected $insurance;

	/**
	 * @var null|string $saturdayDelivery
	 */
	protected $saturdayDelivery;

	/**
	 * @var null|string $letterNotification
	 */
	protected $letterNotification;

	/**
	 * @var null|string $eveningDelivery
	 */
	protected $eveningDelivery;

	
	public function __construct()
	{
	
	}

	/**
	 * @return null|RecipientNotificationRequestType
	 */
	public function getRecipientNotification(): ?RecipientNotificationRequestType
	{
		return $this->recipientNotification;
	}

	/**
	 * @param null|RecipientNotificationRequestType $recipientNotification
	 * @return ServicesRequestType
	 */
	public function setRecipientNotification(?RecipientNotificationRequestType $recipientNotification = null): ServicesRequestType
	{
		$this->recipientNotification = $recipientNotification;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getQuickPackEnvelope(): ?string
	{
		return $this->quickPackEnvelope;
	}

	/**
	 * @param null|string $quickPackEnvelope
	 * @return ServicesRequestType
	 */
	public function setQuickPackEnvelope(?string $quickPackEnvelope = null): ServicesRequestType
	{
		$this->quickPackEnvelope = $quickPackEnvelope;
		return $this;
	}

	/**
	 * @return null|CashOnDeliveryRequestType
	 */
	public function getCashOnDelivery(): ?CashOnDeliveryRequestType
	{
		return $this->cashOnDelivery;
	}

	/**
	 * @param null|CashOnDeliveryRequestType $cashOnDelivery
	 * @return ServicesRequestType
	 */
	public function setCashOnDelivery(?CashOnDeliveryRequestType $cashOnDelivery = null): ServicesRequestType
	{
		$this->cashOnDelivery = $cashOnDelivery;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getDeliveryOption(): ?string
	{
		return $this->deliveryOption;
	}

	/**
	 * @param null|string $deliveryOption
	 * @return ServicesRequestType
	 */
	public function setDeliveryOption(?string $deliveryOption = null): ServicesRequestType
	{
		$this->deliveryOption = $deliveryOption;
		return $this;
	}

	/**
	 * @return null|FlexDeliveryRequestType
	 */
	public function getFlexDelivery(): ?FlexDeliveryRequestType
	{
		return $this->flexDelivery;
	}

	/**
	 * @param null|FlexDeliveryRequestType $flexDelivery
	 * @return ServicesRequestType
	 */
	public function setFlexDelivery(?FlexDeliveryRequestType $flexDelivery = null): ServicesRequestType
	{
		$this->flexDelivery = $flexDelivery;
		return $this;
	}

	/**
	 * @return null|DeliveryIndoorsRequestType
	 */
	public function getDeliveryIndoors(): ?DeliveryIndoorsRequestType
	{
		return $this->deliveryIndoors;
	}

	/**
	 * @param null|DeliveryIndoorsRequestType $deliveryIndoors
	 * @return ServicesRequestType
	 */
	public function setDeliveryIndoors(?DeliveryIndoorsRequestType $deliveryIndoors = null): ServicesRequestType
	{
		$this->deliveryIndoors = $deliveryIndoors;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getPhoneNotification(): ?string
	{
		return $this->phoneNotification;
	}

	/**
	 * @param null|string $phoneNotification
	 * @return ServicesRequestType
	 */
	public function setPhoneNotification(?string $phoneNotification = null): ServicesRequestType
	{
		$this->phoneNotification = $phoneNotification;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getNonFreeze(): ?string
	{
		return $this->nonFreeze;
	}

	/**
	 * @param null|string $nonFreeze
	 * @return ServicesRequestType
	 */
	public function setNonFreeze(?string $nonFreeze = null): ServicesRequestType
	{
		$this->nonFreeze = $nonFreeze;
		return $this;
	}

	/**
	 * @return null|DangerousGoodsRequestType
	 */
	public function getDangerousGoods(): ?DangerousGoodsRequestType
	{
		return $this->dangerousGoods;
	}

	/**
	 * @param null|DangerousGoodsRequestType $dangerousGoods
	 * @return ServicesRequestType
	 */
	public function setDangerousGoods(?DangerousGoodsRequestType $dangerousGoods = null): ServicesRequestType
	{
		$this->dangerousGoods = $dangerousGoods;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getExpress(): ?string
	{
		return $this->express;
	}

	/**
	 * @param null|string $express
	 * @return ServicesRequestType
	 */
	public function setExpress(?string $express = null): ServicesRequestType
	{
		$this->express = $express;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getAdvisering(): ?string
	{
		return $this->advisering;
	}

	/**
	 * @param null|string $advisering
	 * @return ServicesRequestType
	 */
	public function setAdvisering(?string $advisering = null): ServicesRequestType
	{
		$this->advisering = $advisering;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getSimpleDelivery(): ?string
	{
		return $this->simpleDelivery;
	}

	/**
	 * @param null|string $simpleDelivery
	 * @return ServicesRequestType
	 */
	public function setSimpleDelivery(?string $simpleDelivery = null): ServicesRequestType
	{
		$this->simpleDelivery = $simpleDelivery;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getInsurance(): ?string
	{
		return $this->insurance;
	}

	/**
	 * @param null|string $insurance
	 * @return ServicesRequestType
	 */
	public function setInsurance(?string $insurance = null): ServicesRequestType
	{
		$this->insurance = $insurance;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getSaturdayDelivery(): ?string
	{
		return $this->saturdayDelivery;
	}

	/**
	 * @param null|string $saturdayDelivery
	 * @return ServicesRequestType
	 */
	public function setSaturdayDelivery(?string $saturdayDelivery = null): ServicesRequestType
	{
		$this->saturdayDelivery = $saturdayDelivery;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getLetterNotification(): ?string
	{
		return $this->letterNotification;
	}

	/**
	 * @param null|string $letterNotification
	 * @return ServicesRequestType
	 */
	public function setLetterNotification(?string $letterNotification = null): ServicesRequestType
	{
		$this->letterNotification = $letterNotification;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getEveningDelivery(): ?string
	{
		return $this->eveningDelivery;
	}

	/**
	 * @param null|string $eveningDelivery
	 * @return ServicesRequestType
	 */
	public function setEveningDelivery(?string $eveningDelivery = null): ServicesRequestType
	{
		$this->eveningDelivery = $eveningDelivery;
		return $this;
	}

}
