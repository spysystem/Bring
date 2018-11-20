<?php
namespace Bring;


/**
 * Class ErrorResponseType
 */
class ErrorResponseType
{

	/**
	 * @var string $uniqueId
	 */
	protected $uniqueId;

	/**
	 * @var string $code
	 */
	protected $code;

	/**
	 * @var messages $messages
	 */
	protected $messages;

	/**
	 * @var string $consignmentCorrelationId
	 */
	protected $consignmentCorrelationId;

	/**
	 * @var string $packageCorrelationId
	 */
	protected $packageCorrelationId;

	/**
	 * @param string $uniqueId
	 * @param string $code
	 * @param messages $messages
	 * @param string $consignmentCorrelationId
	 * @param string $packageCorrelationId
	 */
	public function __construct(string $uniqueId, string $code, messages $messages, string $consignmentCorrelationId, string $packageCorrelationId)
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
	public function getUniqueId(): ?string
	{
		return $this->uniqueId;
	}

	/**
	 * @param string $uniqueId
	 * @return ErrorResponseType
	 */
	public function setUniqueId(string $uniqueId): ErrorResponseType
	{
		$this->uniqueId = $uniqueId;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCode(): ?string
	{
		return $this->code;
	}

	/**
	 * @param string $code
	 * @return ErrorResponseType
	 */
	public function setCode(string $code): ErrorResponseType
	{
		$this->code = $code;
		return $this;
	}

	/**
	 * @return messages
	 */
	public function getMessages(): ?messages
	{
		return $this->messages;
	}

	/**
	 * @param messages $messages
	 * @return ErrorResponseType
	 */
	public function setMessages(messages $messages): ErrorResponseType
	{
		$this->messages = $messages;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getConsignmentCorrelationId(): ?string
	{
		return $this->consignmentCorrelationId;
	}

	/**
	 * @param string $consignmentCorrelationId
	 * @return ErrorResponseType
	 */
	public function setConsignmentCorrelationId(string $consignmentCorrelationId): ErrorResponseType
	{
		$this->consignmentCorrelationId = $consignmentCorrelationId;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPackageCorrelationId(): ?string
	{
		return $this->packageCorrelationId;
	}

	/**
	 * @param string $packageCorrelationId
	 * @return ErrorResponseType
	 */
	public function setPackageCorrelationId(string $packageCorrelationId): ErrorResponseType
	{
		$this->packageCorrelationId = $packageCorrelationId;
		return $this;
	}

}
