<?php

namespace Bring;

class messages
{

    /**
     * @var MessageResponseType[] $message
     */
    protected $message = null;

    /**
     * @param MessageResponseType[] $message
     */
    public function __construct($message)
    {
      $this->message = $message;
    }

    /**
     * @return MessageResponseType[]
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param MessageResponseType[] $message
     * @return \Bring\messages
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

}
