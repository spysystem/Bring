<?php

namespace Bring;

class CashOnDeliveryRequestType
{

    /**
     * @var string $accountNumber
     */
    protected $accountNumber = null;

    /**
     * @var AccountType $accountType
     */
    protected $accountType = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var string $currencyCode
     */
    protected $currencyCode = null;

    /**
     * @var CashOnDeliveryMessageRequestType $message
     */
    protected $message = null;

    /**
     * @param string $accountNumber
     * @param AccountType $accountType
     * @param float $amount
     * @param string $currencyCode
     * @param CashOnDeliveryMessageRequestType $message
     */
    public function __construct($accountNumber, $accountType, $amount, $currencyCode, $message)
    {
      $this->accountNumber = $accountNumber;
      $this->accountType = $accountType;
      $this->amount = $amount;
      $this->currencyCode = $currencyCode;
      $this->message = $message;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
      return $this->accountNumber;
    }

    /**
     * @param string $accountNumber
     * @return \Bring\CashOnDeliveryRequestType
     */
    public function setAccountNumber($accountNumber)
    {
      $this->accountNumber = $accountNumber;
      return $this;
    }

    /**
     * @return AccountType
     */
    public function getAccountType()
    {
      return $this->accountType;
    }

    /**
     * @param AccountType $accountType
     * @return \Bring\CashOnDeliveryRequestType
     */
    public function setAccountType($accountType)
    {
      $this->accountType = $accountType;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param float $amount
     * @return \Bring\CashOnDeliveryRequestType
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     * @return \Bring\CashOnDeliveryRequestType
     */
    public function setCurrencyCode($currencyCode)
    {
      $this->currencyCode = $currencyCode;
      return $this;
    }

    /**
     * @return CashOnDeliveryMessageRequestType
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param CashOnDeliveryMessageRequestType $message
     * @return \Bring\CashOnDeliveryRequestType
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

}
