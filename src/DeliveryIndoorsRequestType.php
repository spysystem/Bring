<?php
namespace Bring;


/**
 * Class DeliveryIndoorsRequestType
 */
class DeliveryIndoorsRequestType
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
	 * @return DeliveryIndoorsRequestType
	 */
	public function setMessage(string $message): DeliveryIndoorsRequestType
	{
		$this->message = $message;
		return $this;
	}

}
