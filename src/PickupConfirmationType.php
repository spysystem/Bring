<?php

namespace Bring;

class PickupConfirmationType
{

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var \DateTime $earliestPickupDate
     */
    protected $earliestPickupDate = null;

    /**
     * @var \DateTime $latestPickupDate
     */
    protected $latestPickupDate = null;

    /**
     * @param string $status
     * @param \DateTime $earliestPickupDate
     * @param \DateTime $latestPickupDate
     */
    public function __construct($status, \DateTime $earliestPickupDate, \DateTime $latestPickupDate)
    {
      $this->status = $status;
      $this->earliestPickupDate = $earliestPickupDate->format(\DateTime::ATOM);
      $this->latestPickupDate = $latestPickupDate->format(\DateTime::ATOM);
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Bring\PickupConfirmationType
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEarliestPickupDate()
    {
      if ($this->earliestPickupDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->earliestPickupDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $earliestPickupDate
     * @return \Bring\PickupConfirmationType
     */
    public function setEarliestPickupDate(\DateTime $earliestPickupDate)
    {
      $this->earliestPickupDate = $earliestPickupDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLatestPickupDate()
    {
      if ($this->latestPickupDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->latestPickupDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $latestPickupDate
     * @return \Bring\PickupConfirmationType
     */
    public function setLatestPickupDate(\DateTime $latestPickupDate)
    {
      $this->latestPickupDate = $latestPickupDate->format(\DateTime::ATOM);
      return $this;
    }

}
