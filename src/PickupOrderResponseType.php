<?php

namespace Bring;

class PickupOrderResponseType
{

    /**
     * @var PickupConfirmationType $pickupConfirmation
     */
    protected $pickupConfirmation = null;

    /**
     * @var errors $errors
     */
    protected $errors = null;

    /**
     * @param PickupConfirmationType $pickupConfirmation
     * @param errors $errors
     */
    public function __construct($pickupConfirmation, $errors)
    {
      $this->pickupConfirmation = $pickupConfirmation;
      $this->errors = $errors;
    }

    /**
     * @return PickupConfirmationType
     */
    public function getPickupConfirmation()
    {
      return $this->pickupConfirmation;
    }

    /**
     * @param PickupConfirmationType $pickupConfirmation
     * @return \Bring\PickupOrderResponseType
     */
    public function setPickupConfirmation($pickupConfirmation)
    {
      $this->pickupConfirmation = $pickupConfirmation;
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
     * @return \Bring\PickupOrderResponseType
     */
    public function setErrors($errors)
    {
      $this->errors = $errors;
      return $this;
    }

}
