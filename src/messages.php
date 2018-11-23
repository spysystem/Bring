<?php
namespace Bring;


/**
 * Class messages
 */
class messages
{

	/**
	 * @var MessageResponseType[]|MessageResponseType|null $message
	 */
	protected $message;

	/**
	 * @param MessageResponseType[]|MessageResponseType|null $message
	 */
	public function __construct($message)
	{
		$this->message = $message;
	}

	/**
	 * @return MessageResponseType[]|MessageResponseType|null
	 */
	public function getMessage()
	{
		return $this->message;
	}

	/**
	 * @param MessageResponseType[]|MessageResponseType|null $message
	 * @return messages
	 */
	public function setMessage($message): messages
	{
		$this->message = $message;
		return $this;
	}

}
