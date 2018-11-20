<?php
namespace Bring;


/**
 * Class messages
 */
class messages
{

	/**
	 * @var MessageResponseType[] $message
	 */
	protected $message;

	/**
	 * @param MessageResponseType[] $message
	 */
	public function __construct(array $message)
	{
		$this->message = $message;
	}

	/**
	 * @return MessageResponseType[]
	 */
	public function getMessage(): ?array
	{
		return $this->message;
	}

	/**
	 * @param MessageResponseType[] $message
	 * @return messages
	 */
	public function setMessage(array $message): messages
	{
		$this->message = $message;
		return $this;
	}

}
