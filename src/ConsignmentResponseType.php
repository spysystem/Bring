<?php
namespace Bring;


/**
 * Class ConsignmentResponseType
 */
class ConsignmentResponseType
{

	/**
	 * @var null|ConfirmationResponseType $confirmation
	 */
	protected $confirmation;

	/**
	 * @var null|errors $errors
	 */
	protected $errors;

	/**
	 * @var string $correlationId
	 */
	protected $correlationId;

	/**
	 * @param string $correlationId
	 */
	public function __construct(string $correlationId)
	{
		$this->correlationId = $correlationId;
	}

	/**
	 * @return null|ConfirmationResponseType
	 */
	public function getConfirmation(): ?ConfirmationResponseType
	{
		return $this->confirmation;
	}

	/**
	 * @param null|ConfirmationResponseType $confirmation
	 * @return ConsignmentResponseType
	 */
	public function setConfirmation(?ConfirmationResponseType $confirmation = null): ConsignmentResponseType
	{
		$this->confirmation = $confirmation;
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
	 * @return ConsignmentResponseType
	 */
	public function setErrors(?errors $errors = null): ConsignmentResponseType
	{
		$this->errors = $errors;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCorrelationId(): ?string
	{
		return $this->correlationId;
	}

	/**
	 * @param string $correlationId
	 * @return ConsignmentResponseType
	 */
	public function setCorrelationId(string $correlationId): ConsignmentResponseType
	{
		$this->correlationId = $correlationId;
		return $this;
	}

}
