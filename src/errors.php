<?php
namespace Bring;


/**
 * Class errors
 */
class errors
{

	/**
	 * @var null|PickupApiErrorResponseType[]|PickupApiErrorResponseType $error
	 */
	protected $error;

	
	public function __construct()
	{
	
	}

	/**
	 * @return null|PickupApiErrorResponseType[]|PickupApiErrorResponseType
	 */
	public function getError()
	{
		return $this->error;
	}

	/**
	 * @param null|PickupApiErrorResponseType[]|PickupApiErrorResponseType $error
	 * @return errors
	 */
	public function setError($error = null): errors
	{
		$this->error = $error;
		return $this;
	}

}
