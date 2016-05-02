<?php

namespace Bring;

class FlexDeliveryRequestType
{

    /**
     * @var string $message
     */
    protected $message = null;

    /**
     * @param string $message
     */
    public function __construct($message)
    {
      $this->message = $message;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param string $message
     * @return \Bring\FlexDeliveryRequestType
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

}
