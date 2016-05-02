<?php

namespace Bring;

class MeasurementsRequestType
{

    /**
     * @var int $heightInCm
     */
    protected $heightInCm = null;

    /**
     * @var int $widthInCm
     */
    protected $widthInCm = null;

    /**
     * @var int $lengthInCm
     */
    protected $lengthInCm = null;

    /**
     * @param int $heightInCm
     * @param int $widthInCm
     * @param int $lengthInCm
     */
    public function __construct($heightInCm, $widthInCm, $lengthInCm)
    {
      $this->heightInCm = $heightInCm;
      $this->widthInCm = $widthInCm;
      $this->lengthInCm = $lengthInCm;
    }

    /**
     * @return int
     */
    public function getHeightInCm()
    {
      return $this->heightInCm;
    }

    /**
     * @param int $heightInCm
     * @return \Bring\MeasurementsRequestType
     */
    public function setHeightInCm($heightInCm)
    {
      $this->heightInCm = $heightInCm;
      return $this;
    }

    /**
     * @return int
     */
    public function getWidthInCm()
    {
      return $this->widthInCm;
    }

    /**
     * @param int $widthInCm
     * @return \Bring\MeasurementsRequestType
     */
    public function setWidthInCm($widthInCm)
    {
      $this->widthInCm = $widthInCm;
      return $this;
    }

    /**
     * @return int
     */
    public function getLengthInCm()
    {
      return $this->lengthInCm;
    }

    /**
     * @param int $lengthInCm
     * @return \Bring\MeasurementsRequestType
     */
    public function setLengthInCm($lengthInCm)
    {
      $this->lengthInCm = $lengthInCm;
      return $this;
    }

}
