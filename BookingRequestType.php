<?php

namespace Bring;

class BookingRequestType
{

    /**
     * @var int $schemaVersion
     */
    protected $schemaVersion = null;

    /**
     * @var consignments $consignments
     */
    protected $consignments = null;

    /**
     * @var boolean $testIndicator
     */
    protected $testIndicator = null;

    /**
     * @param int $schemaVersion
     * @param consignments $consignments
     * @param boolean $testIndicator
     */
    public function __construct($schemaVersion, $consignments, $testIndicator)
    {
      $this->schemaVersion = $schemaVersion;
      $this->consignments = $consignments;
      $this->testIndicator = $testIndicator;
    }

    /**
     * @return int
     */
    public function getSchemaVersion()
    {
      return $this->schemaVersion;
    }

    /**
     * @param int $schemaVersion
     * @return \Bring\BookingRequestType
     */
    public function setSchemaVersion($schemaVersion)
    {
      $this->schemaVersion = $schemaVersion;
      return $this;
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
     * @return \Bring\BookingRequestType
     */
    public function setConsignments($consignments)
    {
      $this->consignments = $consignments;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTestIndicator()
    {
      return $this->testIndicator;
    }

    /**
     * @param boolean $testIndicator
     * @return \Bring\BookingRequestType
     */
    public function setTestIndicator($testIndicator)
    {
      $this->testIndicator = $testIndicator;
      return $this;
    }

}
