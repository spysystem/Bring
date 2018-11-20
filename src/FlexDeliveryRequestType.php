<?php
namespace Bring;


/**
 * Class FlexDeliveryRequestType
 */
class FlexDeliveryRequestType
{

	/**
	 * @var string $message
	 */
	protected $message;

	/**
	 * @param string $message
	 */
	public function __construct(string $message)
	{
		$this->message = $message;
	}

	/**
	 * @return string
	 */
	public function getMessage(): ?string
	{
		return $this->message;
	}

	/**
	 * @param string $message
	 * @return FlexDeliveryRequestType
	 */
	public function setMessage(string $message): FlexDeliveryRequestType
	{
		$this->message = $message;
		return $this;
	}

}
