<?php
namespace Bring;


/**
 * Class FlexDeliveryRequestType
 */
class FlexDeliveryRequestType
{

	/**
	 * @var null|string $message
	 */
	protected $message;

	
	public function __construct()
	{
	
	}

	/**
	 * @return null|string
	 */
	public function getMessage(): ?string
	{
		return $this->message;
	}

	/**
	 * @param null|string $message
	 * @return FlexDeliveryRequestType
	 */
	public function setMessage(?string $message = null): FlexDeliveryRequestType
	{
		$this->message = $message;
		return $this;
	}

}
