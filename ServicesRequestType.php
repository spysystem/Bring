<?php

namespace Bring;

class ServicesRequestType
{

    /**
     * @var RecipientNotificationRequestType $recipientNotification
     */
    protected $recipientNotification = null;

    /**
     * @var string $quickPackEnvelope
     */
    protected $quickPackEnvelope = null;

    /**
     * @var CashOnDeliveryRequestType $cashOnDelivery
     */
    protected $cashOnDelivery = null;

    /**
     * @var string $deliveryOption
     */
    protected $deliveryOption = null;

    /**
     * @var FlexDeliveryRequestType $flexDelivery
     */
    protected $flexDelivery = null;

    /**
     * @var string $nonFreeze
     */
    protected $nonFreeze = null;

    /**
     * @var string $customsClearance
     */
    protected $customsClearance = null;

    /**
     * @var DangerousGoodsRequestType $dangerousGoods
     */
    protected $dangerousGoods = null;

    /**
     * @var string $express
     */
    protected $express = null;

    /**
     * @var string $eveDelivery
     */
    protected $eveDelivery = null;

    /**
     * @param RecipientNotificationRequestType $recipientNotification
     * @param string $quickPackEnvelope
     * @param CashOnDeliveryRequestType $cashOnDelivery
     * @param string $deliveryOption
     * @param FlexDeliveryRequestType $flexDelivery
     * @param string $nonFreeze
     * @param string $customsClearance
     * @param DangerousGoodsRequestType $dangerousGoods
     * @param string $express
     * @param string $eveDelivery
     */
    public function __construct($recipientNotification, $quickPackEnvelope, $cashOnDelivery, $deliveryOption, $flexDelivery, $nonFreeze, $customsClearance, $dangerousGoods, $express, $eveDelivery)
    {
      $this->recipientNotification = $recipientNotification;
      $this->quickPackEnvelope = $quickPackEnvelope;
      $this->cashOnDelivery = $cashOnDelivery;
      $this->deliveryOption = $deliveryOption;
      $this->flexDelivery = $flexDelivery;
      $this->nonFreeze = $nonFreeze;
      $this->customsClearance = $customsClearance;
      $this->dangerousGoods = $dangerousGoods;
      $this->express = $express;
      $this->eveDelivery = $eveDelivery;
    }

    /**
     * @return RecipientNotificationRequestType
     */
    public function getRecipientNotification()
    {
      return $this->recipientNotification;
    }

    /**
     * @param RecipientNotificationRequestType $recipientNotification
     * @return \Bring\ServicesRequestType
     */
    public function setRecipientNotification($recipientNotification)
    {
      $this->recipientNotification = $recipientNotification;
      return $this;
    }

    /**
     * @return string
     */
    public function getQuickPackEnvelope()
    {
      return $this->quickPackEnvelope;
    }

    /**
     * @param string $quickPackEnvelope
     * @return \Bring\ServicesRequestType
     */
    public function setQuickPackEnvelope($quickPackEnvelope)
    {
      $this->quickPackEnvelope = $quickPackEnvelope;
      return $this;
    }

    /**
     * @return CashOnDeliveryRequestType
     */
    public function getCashOnDelivery()
    {
      return $this->cashOnDelivery;
    }

    /**
     * @param CashOnDeliveryRequestType $cashOnDelivery
     * @return \Bring\ServicesRequestType
     */
    public function setCashOnDelivery($cashOnDelivery)
    {
      $this->cashOnDelivery = $cashOnDelivery;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryOption()
    {
      return $this->deliveryOption;
    }

    /**
     * @param string $deliveryOption
     * @return \Bring\ServicesRequestType
     */
    public function setDeliveryOption($deliveryOption)
    {
      $this->deliveryOption = $deliveryOption;
      return $this;
    }

    /**
     * @return FlexDeliveryRequestType
     */
    public function getFlexDelivery()
    {
      return $this->flexDelivery;
    }

    /**
     * @param FlexDeliveryRequestType $flexDelivery
     * @return \Bring\ServicesRequestType
     */
    public function setFlexDelivery($flexDelivery)
    {
      $this->flexDelivery = $flexDelivery;
      return $this;
    }

    /**
     * @return string
     */
    public function getNonFreeze()
    {
      return $this->nonFreeze;
    }

    /**
     * @param string $nonFreeze
     * @return \Bring\ServicesRequestType
     */
    public function setNonFreeze($nonFreeze)
    {
      $this->nonFreeze = $nonFreeze;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomsClearance()
    {
      return $this->customsClearance;
    }

    /**
     * @param string $customsClearance
     * @return \Bring\ServicesRequestType
     */
    public function setCustomsClearance($customsClearance)
    {
      $this->customsClearance = $customsClearance;
      return $this;
    }

    /**
     * @return DangerousGoodsRequestType
     */
    public function getDangerousGoods()
    {
      return $this->dangerousGoods;
    }

    /**
     * @param DangerousGoodsRequestType $dangerousGoods
     * @return \Bring\ServicesRequestType
     */
    public function setDangerousGoods($dangerousGoods)
    {
      $this->dangerousGoods = $dangerousGoods;
      return $this;
    }

    /**
     * @return string
     */
    public function getExpress()
    {
      return $this->express;
    }

    /**
     * @param string $express
     * @return \Bring\ServicesRequestType
     */
    public function setExpress($express)
    {
      $this->express = $express;
      return $this;
    }

    /**
     * @return string
     */
    public function getEveDelivery()
    {
      return $this->eveDelivery;
    }

    /**
     * @param string $eveDelivery
     * @return \Bring\ServicesRequestType
     */
    public function setEveDelivery($eveDelivery)
    {
      $this->eveDelivery = $eveDelivery;
      return $this;
    }

}
