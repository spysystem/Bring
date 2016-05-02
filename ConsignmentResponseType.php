<?php

namespace Bring;

class ConsignmentResponseType
{

    /**
     * @var ConfirmationResponseType $confirmation
     */
    protected $confirmation = null;

    /**
     * @var errors $errors
     */
    protected $errors = null;

    /**
     * @var string $correlationId
     */
    protected $correlationId = null;

    /**
     * @param ConfirmationResponseType $confirmation
     * @param errors $errors
     * @param string $correlationId
     */
    public function __construct($confirmation, $errors, $correlationId)
    {
      $this->confirmation = $confirmation;
      $this->errors = $errors;
      $this->correlationId = $correlationId;
    }

    /**
     * @return ConfirmationResponseType
     */
    public function getConfirmation()
    {
      return $this->confirmation;
    }

    /**
     * @param ConfirmationResponseType $confirmation
     * @return \Bring\ConsignmentResponseType
     */
    public function setConfirmation($confirmation)
    {
      $this->confirmation = $confirmation;
      return $this;
    }

    /**
     * @return errors
     */
    public function getErrors()
    {
      return $this->errors;
    }

    /**
     * @param errors $errors
     * @return \Bring\ConsignmentResponseType
     */
    public function setErrors($errors)
    {
      $this->errors = $errors;
      return $this;
    }

    /**
     * @return string
     */
    public function getCorrelationId()
    {
      return $this->correlationId;
    }

    /**
     * @param string $correlationId
     * @return \Bring\ConsignmentResponseType
     */
    public function setCorrelationId($correlationId)
    {
      $this->correlationId = $correlationId;
      return $this;
    }

}
