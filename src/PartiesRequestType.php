<?php

namespace Bring;

class PartiesRequestType
{

    /**
     * @var PartyRequestType $sender
     */
    protected $sender = null;

    /**
     * @var PartyRequestType $recipient
     */
    protected $recipient = null;

    /**
     * @var PickupPointRequestType $pickupPoint
     */
    protected $pickupPoint = null;

    /**
     * @param PartyRequestType $sender
     * @param PartyRequestType $recipient
     * @param PickupPointRequestType $pickupPoint
     */
    public function __construct($sender, $recipient, $pickupPoint)
    {
      $this->sender = $sender;
      $this->recipient = $recipient;
      $this->pickupPoint = $pickupPoint;
    }

    /**
     * @return PartyRequestType
     */
    public function getSender()
    {
      return $this->sender;
    }

    /**
     * @param PartyRequestType $sender
     * @return \Bring\PartiesRequestType
     */
    public function setSender($sender)
    {
      $this->sender = $sender;
      return $this;
    }

    /**
     * @return PartyRequestType
     */
    public function getRecipient()
    {
      return $this->recipient;
    }

    /**
     * @param PartyRequestType $recipient
     * @return \Bring\PartiesRequestType
     */
    public function setRecipient($recipient)
    {
      $this->recipient = $recipient;
      return $this;
    }

    /**
     * @return PickupPointRequestType
     */
    public function getPickupPoint()
    {
      return $this->pickupPoint;
    }

    /**
     * @param PickupPointRequestType $pickupPoint
     * @return \Bring\PartiesRequestType
     */
    public function setPickupPoint($pickupPoint)
    {
      $this->pickupPoint = $pickupPoint;
      return $this;
    }

}
