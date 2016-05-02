<?php

namespace Bring;

class BookingResponseType
{

    /**
     * @var consignments $consignments
     */
    protected $consignments = null;

    /**
     * @param consignments $consignments
     */
    public function __construct($consignments)
    {
      $this->consignments = $consignments;
    }

    /**
     * @return consignments
     */
    public function getConsignments()
    {
      return $this->consignments;
    }

    /**
     * @param consignments $consignments
     * @return \Bring\BookingResponseType
     */
    public function setConsignments($consignments)
    {
      $this->consignments = $consignments;
      return $this;
    }

}
