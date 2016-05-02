<?php

namespace Bring;

class ErrorResponseType
{

    /**
     * @var string $uniqueId
     */
    protected $uniqueId = null;

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var messages $messages
     */
    protected $messages = null;

    /**
     * @var string $consignmentCorrelationId
     */
    protected $consignmentCorrelationId = null;

    /**
     * @var string $packageCorrelationId
     */
    protected $packageCorrelationId = null;

    /**
     * @param string $uniqueId
     * @param string $code
     * @param messages $messages
     * @param string $consignmentCorrelationId
     * @param string $packageCorrelationId
     */
    public function __construct($uniqueId, $code, $messages, $consignmentCorrelationId, $packageCorrelationId)
    {
      $this->uniqueId = $uniqueId;
      $this->code = $code;
      $this->messages = $messages;
      $this->consignmentCorrelationId = $consignmentCorrelationId;
      $this->packageCorrelationId = $packageCorrelationId;
    }

    /**
     * @return string
     */
    public function getUniqueId()
    {
      return $this->uniqueId;
    }

    /**
     * @param string $uniqueId
     * @return \Bring\ErrorResponseType
     */
    public function setUniqueId($uniqueId)
    {
      $this->uniqueId = $uniqueId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return \Bring\ErrorResponseType
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return messages
     */
    public function getMessages()
    {
      return $this->messages;
    }

    /**
     * @param messages $messages
     * @return \Bring\ErrorResponseType
     */
    public function setMessages($messages)
    {
      $this->messages = $messages;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsignmentCorrelationId()
    {
      return $this->consignmentCorrelationId;
    }

    /**
     * @param string $consignmentCorrelationId
     * @return \Bring\ErrorResponseType
     */
    public function setConsignmentCorrelationId($consignmentCorrelationId)
    {
      $this->consignmentCorrelationId = $consignmentCorrelationId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackageCorrelationId()
    {
      return $this->packageCorrelationId;
    }

    /**
     * @param string $packageCorrelationId
     * @return \Bring\ErrorResponseType
     */
    public function setPackageCorrelationId($packageCorrelationId)
    {
      $this->packageCorrelationId = $packageCorrelationId;
      return $this;
    }

}
