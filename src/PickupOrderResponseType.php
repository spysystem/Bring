<?php
namespace Bring;


/**
 * Class PickupOrderResponseType
 */
class PickupOrderResponseType
{

	/**
	 * @var PickupConfirmationType $pickupConfirmation
	 */
	protected $pickupConfirmation;

	/**
	 * @var null|errors $errors
	 */
	protected $errors;

	/**
	 * @param PickupConfirmationType $pickupConfirmation
	 */
	public function __construct(PickupConfirmationType $pickupConfirmation)
	{
		$this->pickupConfirmation = $pickupConfirmation;
	}

	/**
	 * @return PickupConfirmationType
	 */
	public function getPickupConfirmation(): ?PickupConfirmationType
	{
		return $this->pickupConfirmation;
	}

	/**
	 * @param PickupConfirmationType $pickupConfirmation
	 * @return PickupOrderResponseType
	 */
	public function setPickupConfirmation(PickupConfirmationType $pickupConfirmation): PickupOrderResponseType
	{
		$this->pickupConfirmation = $pickupConfirmation;
		return $this;
	}

	/**
	 * @return null|errors
	 */
	public function getErrors(): ?errors
	{
		return $this->errors;
	}

	/**
	 * @param null|errors $errors
	 * @return PickupOrderResponseType
	 */
	public function setErrors(?errors $errors = null): PickupOrderResponseType
	{
		$this->errors = $errors;
		return $this;
	}

}
