<?php

namespace Bring;

class consignments
{

    /**
     * @var ConsignmentRequestType[] $consignment
     */
    protected $consignment = null;

    /**
     * @param ConsignmentRequestType[] $consignment
     */
    public function __construct(array $consignment)
    {
      $this->consignment = $consignment;
    }

    /**
     * @return ConsignmentRequestType[]
     */
    public function getConsignment()
    {
      return $this->consignment;
    }

    /**
     * @param ConsignmentRequestType[] $consignment
     * @return \Bring\consignments
     */
    public function setConsignment(array $consignment)
    {
      $this->consignment = $consignment;
      return $this;
    }

}
