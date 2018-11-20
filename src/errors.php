<?php
namespace Bring;


/**
 * Class errors
 */
class errors
{

	/**
	 * @var null|ErrorResponseType[] $error
	 */
	protected $error;

	
	public function __construct()
	{
	
	}

	/**
	 * @return null|ErrorResponseType[]
	 */
	public function getError(): ?array
	{
		return $this->error;
	}

	/**
	 * @param null|ErrorResponseType[] $error
	 * @return errors
	 */
	public function setError(?array $error = null): errors
	{
		$this->error = $error;
		return $this;
	}

}
