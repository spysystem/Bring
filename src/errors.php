<?php
namespace Bring;


/**
 * Class errors
 */
class errors
{

	/**
	 * @var null|ErrorResponseType[]|ErrorResponseType $error
	 */
	protected $error;

	
	public function __construct()
	{
	
	}

	/**
	 * @return null|ErrorResponseType[]|ErrorResponseType
	 */
	public function getError()
	{
		return $this->error;
	}

	/**
	 * @param null|ErrorResponseType[]|ErrorResponseType $error
	 * @return errors
	 */
	public function setError($error = null): errors
	{
		$this->error = $error;
		return $this;
	}

}
