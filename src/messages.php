<?php
namespace Bring;


/**
 * Class messages
 */
class messages
{

	/**
	 * @var PickupApiMessageResponseType[]|PickupApiMessageResponseType|null $message
	 */
	protected $message;

	/**
	 * @param PickupApiMessageResponseType[]|PickupApiMessageResponseType|null $message
	 */
	public function __construct($message)
	{
		$this->message = $message;
	}

	/**
	 * @return PickupApiMessageResponseType[]|PickupApiMessageResponseType|null
	 */
	public function getMessage()
	{
		return $this->message;
	}

	/**
	 * @param PickupApiMessageResponseType[]|PickupApiMessageResponseType|null $message
	 * @return messages
	 */
	public function setMessage($message): messages
	{
		$this->message = $message;
		return $this;
	}

}
