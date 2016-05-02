<?php

namespace Bring;

class LinksResponseType
{

    /**
     * @var string $labels
     */
    protected $labels = null;

    /**
     * @var string $waybill
     */
    protected $waybill = null;

    /**
     * @var string $tracking
     */
    protected $tracking = null;

    /**
     * @param string $labels
     * @param string $waybill
     * @param string $tracking
     */
    public function __construct($labels, $waybill, $tracking)
    {
      $this->labels = $labels;
      $this->waybill = $waybill;
      $this->tracking = $tracking;
    }

    /**
     * @return string
     */
    public function getLabels()
    {
      return $this->labels;
    }

    /**
     * @param string $labels
     * @return \Bring\LinksResponseType
     */
    public function setLabels($labels)
    {
      $this->labels = $labels;
      return $this;
    }

    /**
     * @return string
     */
    public function getWaybill()
    {
      return $this->waybill;
    }

    /**
     * @param string $waybill
     * @return \Bring\LinksResponseType
     */
    public function setWaybill($waybill)
    {
      $this->waybill = $waybill;
      return $this;
    }

    /**
     * @return string
     */
    public function getTracking()
    {
      return $this->tracking;
    }

    /**
     * @param string $tracking
     * @return \Bring\LinksResponseType
     */
    public function setTracking($tracking)
    {
      $this->tracking = $tracking;
      return $this;
    }

}
