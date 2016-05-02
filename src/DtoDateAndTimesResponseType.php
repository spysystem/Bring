<?php

namespace Bring;

class DtoDateAndTimesResponseType
{

    /**
     * @var \DateTime $earliestPickup
     */
    protected $earliestPickup = null;

    /**
     * @var \DateTime $expectedDelivery
     */
    protected $expectedDelivery = null;

    /**
     * @param \DateTime $earliestPickup
     * @param \DateTime $expectedDelivery
     */
    public function __construct(\DateTime $earliestPickup, \DateTime $expectedDelivery)
    {
      $this->earliestPickup = $earliestPickup->format(\DateTime::ATOM);
      $this->expectedDelivery = $expectedDelivery->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getEarliestPickup()
    {
      if ($this->earliestPickup == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->earliestPickup);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $earliestPickup
     * @return \Bring\DtoDateAndTimesResponseType
     */
    public function setEarliestPickup(\DateTime $earliestPickup)
    {
      $this->earliestPickup = $earliestPickup->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpectedDelivery()
    {
      if ($this->expectedDelivery == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->expectedDelivery);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $expectedDelivery
     * @return \Bring\DtoDateAndTimesResponseType
     */
    public function setExpectedDelivery(\DateTime $expectedDelivery)
    {
      $this->expectedDelivery = $expectedDelivery->format(\DateTime::ATOM);
      return $this;
    }

}
