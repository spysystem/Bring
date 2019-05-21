<?php
namespace Bring;

/**
 * Class AdditionalServiceRequestType
 */
class AdditionalServiceRequestType
{

	/**
	 * @var string|AdditionalServiceCodeType $id
	 */
	protected $id;

	/**
	 * @var null|string $email
	 */
	protected $email;

	/**
	 * @var null|string $mobile
	 */
	protected $mobile;

	/**
	 * @var null|string $message
	 */
	protected $message;

	/**
	 * @var null|string $accountNumber
	 */
	protected $accountNumber;

	/**
	 * @var null|string|AccountType $accountType
	 */
	protected $accountType;

	/**
	 * @var null|float $amount
	 */
	protected $amount;

	/**
	 * @var null|string $currencyCode
	 */
	protected $currencyCode;

	/**
	 * @var null|CashOnDeliveryMessageRequestType $codMessage
	 */
	protected $codMessage;

	/**
	 * @var null|string $containerId
	 */
	protected $containerId;

	/**
	 * @var null|int $weightInGrams
	 */
	protected $weightInGrams;

	/**
	 * @var null|string $unNumber
	 */
	protected $unNumber;

	/**
	 * @var null|string $commodity
	 */
	protected $commodity;

	/**
	 * @var null|string $packingGroup
	 */
	protected $packingGroup;

	/**
	 * @var null|string $dangerClass
	 */
	protected $dangerClass;

	/**
	 * @var null|string $tunnelRestrictionCode
	 */
	protected $tunnelRestrictionCode;

	/**
	 * @var null|string $safetyMarkCode
	 */
	protected $safetyMarkCode;

	/**
	 * @var null|int $factor
	 */
	protected $factor;

	/**
	 * @param string|AdditionalServiceCodeType $id
	 */
	public function __construct($id)
	{
		$this->id = $id;
	}

	/**
	 * @return string|AdditionalServiceCodeType
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param string|AdditionalServiceCodeType $id
	 * @return AdditionalServiceRequestType
	 */
	public function setId($id): AdditionalServiceRequestType
	{
		$this->id = $id;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getEmail(): ?string
	{
		return $this->email;
	}

	/**
	 * @param null|string $email
	 * @return AdditionalServiceRequestType
	 */
	public function setEmail(?string $email = null): AdditionalServiceRequestType
	{
		$this->email = $email;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getMobile(): ?string
	{
		return $this->mobile;
	}

	/**
	 * @param null|string $mobile
	 * @return AdditionalServiceRequestType
	 */
	public function setMobile(?string $mobile = null): AdditionalServiceRequestType
	{
		$this->mobile = $mobile;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getMessage(): ?string
	{
		return $this->message;
	}

	/**
	 * @param null|string $message
	 * @return AdditionalServiceRequestType
	 */
	public function setMessage(?string $message = null): AdditionalServiceRequestType
	{
		$this->message = $message;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getAccountNumber(): ?string
	{
		return $this->accountNumber;
	}

	/**
	 * @param null|string $accountNumber
	 * @return AdditionalServiceRequestType
	 */
	public function setAccountNumber(?string $accountNumber = null): AdditionalServiceRequestType
	{
		$this->accountNumber = $accountNumber;
		return $this;
	}

	/**
	 * @return null|string|AccountType
	 */
	public function getAccountType()
	{
		return $this->accountType;
	}

	/**
	 * @param null|string|AccountType $accountType
	 * @return AdditionalServiceRequestType
	 */
	public function setAccountType($accountType): AdditionalServiceRequestType
	{
		$this->accountType = $accountType;
		return $this;
	}

	/**
	 * @return null|float
	 */
	public function getAmount(): ?float
	{
		return $this->amount;
	}

	/**
	 * @param null|float $amount
	 * @return AdditionalServiceRequestType
	 */
	public function setAmount(?float $amount = null): AdditionalServiceRequestType
	{
		$this->amount = $amount;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getCurrencyCode(): ?string
	{
		return $this->currencyCode;
	}

	/**
	 * @param null|string $currencyCode
	 * @return AdditionalServiceRequestType
	 */
	public function setCurrencyCode(?string $currencyCode = null): AdditionalServiceRequestType
	{
		$this->currencyCode = $currencyCode;
		return $this;
	}

	/**
	 * @return null|CashOnDeliveryMessageRequestType
	 */
	public function getCodMessage(): ?CashOnDeliveryMessageRequestType
	{
		return $this->codMessage;
	}

	/**
	 * @param null|CashOnDeliveryMessageRequestType $codMessage
	 * @return AdditionalServiceRequestType
	 */
	public function setCodMessage(?CashOnDeliveryMessageRequestType $codMessage = null): AdditionalServiceRequestType
	{
		$this->codMessage = $codMessage;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getContainerId(): ?string
	{
		return $this->containerId;
	}

	/**
	 * @param null|string $containerId
	 * @return AdditionalServiceRequestType
	 */
	public function setContainerId(?string $containerId = null): AdditionalServiceRequestType
	{
		$this->containerId = $containerId;
		return $this;
	}

	/**
	 * @return null|int
	 */
	public function getWeightInGrams(): ?int
	{
		return $this->weightInGrams;
	}

	/**
	 * @param null|int $weightInGrams
	 * @return AdditionalServiceRequestType
	 */
	public function setWeightInGrams(?int $weightInGrams = null): AdditionalServiceRequestType
	{
		$this->weightInGrams = $weightInGrams;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getUnNumber(): ?string
	{
		return $this->unNumber;
	}

	/**
	 * @param null|string $unNumber
	 * @return AdditionalServiceRequestType
	 */
	public function setUnNumber(?string $unNumber = null): AdditionalServiceRequestType
	{
		$this->unNumber = $unNumber;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getCommodity(): ?string
	{
		return $this->commodity;
	}

	/**
	 * @param null|string $commodity
	 * @return AdditionalServiceRequestType
	 */
	public function setCommodity(?string $commodity = null): AdditionalServiceRequestType
	{
		$this->commodity = $commodity;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getPackingGroup(): ?string
	{
		return $this->packingGroup;
	}

	/**
	 * @param null|string $packingGroup
	 * @return AdditionalServiceRequestType
	 */
	public function setPackingGroup(?string $packingGroup = null): AdditionalServiceRequestType
	{
		$this->packingGroup = $packingGroup;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getDangerClass(): ?string
	{
		return $this->dangerClass;
	}

	/**
	 * @param null|string $dangerClass
	 * @return AdditionalServiceRequestType
	 */
	public function setDangerClass(?string $dangerClass = null): AdditionalServiceRequestType
	{
		$this->dangerClass = $dangerClass;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getTunnelRestrictionCode(): ?string
	{
		return $this->tunnelRestrictionCode;
	}

	/**
	 * @param null|string $tunnelRestrictionCode
	 * @return AdditionalServiceRequestType
	 */
	public function setTunnelRestrictionCode(?string $tunnelRestrictionCode = null): AdditionalServiceRequestType
	{
		$this->tunnelRestrictionCode = $tunnelRestrictionCode;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getSafetyMarkCode(): ?string
	{
		return $this->safetyMarkCode;
	}

	/**
	 * @param null|string $safetyMarkCode
	 * @return AdditionalServiceRequestType
	 */
	public function setSafetyMarkCode(?string $safetyMarkCode = null): AdditionalServiceRequestType
	{
		$this->safetyMarkCode = $safetyMarkCode;
		return $this;
	}

	/**
	 * @return null|int
	 */
	public function getFactor(): ?int
	{
		return $this->factor;
	}

	/**
	 * @param null|int $factor
	 * @return AdditionalServiceRequestType
	 */
	public function setFactor(?int $factor = null): AdditionalServiceRequestType
	{
		$this->factor = $factor;
		return $this;
	}

}
