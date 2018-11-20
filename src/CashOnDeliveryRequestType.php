<?php
namespace Bring;


/**
 * Class CashOnDeliveryRequestType
 */
class CashOnDeliveryRequestType
{

	/**
	 * @var string $accountNumber
	 */
	protected $accountNumber;

	/**
	 * @var null|string|AccountType $accountType
	 */
	protected $accountType;

	/**
	 * @var float $amount
	 */
	protected $amount;

	/**
	 * @var string $currencyCode
	 */
	protected $currencyCode;

	/**
	 * @var null|CashOnDeliveryMessageRequestType $message
	 */
	protected $message;

	/**
	 * @param string $accountNumber
	 * @param float $amount
	 * @param string $currencyCode
	 */
	public function __construct(string $accountNumber, float $amount, string $currencyCode)
	{
		$this->accountNumber = $accountNumber;
		$this->amount = $amount;
		$this->currencyCode = $currencyCode;
	}

	/**
	 * @return string
	 */
	public function getAccountNumber(): ?string
	{
		return $this->accountNumber;
	}

	/**
	 * @param string $accountNumber
	 * @return CashOnDeliveryRequestType
	 */
	public function setAccountNumber(string $accountNumber): CashOnDeliveryRequestType
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
	 * @return CashOnDeliveryRequestType
	 */
	public function setAccountType($accountType): CashOnDeliveryRequestType
	{
		$this->accountType = $accountType;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getAmount(): ?float
	{
		return $this->amount;
	}

	/**
	 * @param float $amount
	 * @return CashOnDeliveryRequestType
	 */
	public function setAmount(float $amount): CashOnDeliveryRequestType
	{
		$this->amount = $amount;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCurrencyCode(): ?string
	{
		return $this->currencyCode;
	}

	/**
	 * @param string $currencyCode
	 * @return CashOnDeliveryRequestType
	 */
	public function setCurrencyCode(string $currencyCode): CashOnDeliveryRequestType
	{
		$this->currencyCode = $currencyCode;
		return $this;
	}

	/**
	 * @return null|CashOnDeliveryMessageRequestType
	 */
	public function getMessage(): ?CashOnDeliveryMessageRequestType
	{
		return $this->message;
	}

	/**
	 * @param null|CashOnDeliveryMessageRequestType $message
	 * @return CashOnDeliveryRequestType
	 */
	public function setMessage(?CashOnDeliveryMessageRequestType $message = null): CashOnDeliveryRequestType
	{
		$this->message = $message;
		return $this;
	}

}
