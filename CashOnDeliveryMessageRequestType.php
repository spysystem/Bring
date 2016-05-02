<?php

namespace Bring;

class CashOnDeliveryMessageRequestType
{

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @var MessageTypeRequestType $type
     */
    protected $type = null;

    /**
     * @param string $value
     * @param MessageTypeRequestType $type
     */
    public function __construct($value, $type)
    {
      $this->value = $value;
      $this->type = $type;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Bring\CashOnDeliveryMessageRequestType
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

    /**
     * @return MessageTypeRequestType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param MessageTypeRequestType $type
     * @return \Bring\CashOnDeliveryMessageRequestType
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
