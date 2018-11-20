<?php
namespace Bring;


/**
 * Class RecipientNotificationRequestType
 */
class RecipientNotificationRequestType
{

	/**
	 * @var null|string $email
	 */
	protected $email;

	/**
	 * @var null|string $mobile
	 */
	protected $mobile;

	
	public function __construct()
	{
	
	}

	/**
	 * @return null|string
	 */
	public function getEmail(): ?string
	{
		return $this->email;
	}

	/**
	 * @param null|string $email
	 * @return RecipientNotificationRequestType
	 */
	public function setEmail(?string $email = null): RecipientNotificationRequestType
	{
		$this->email = $email;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getMobile(): ?string
	{
		return $this->mobile;
	}

	/**
	 * @param null|string $mobile
	 * @return RecipientNotificationRequestType
	 */
	public function setMobile(?string $mobile = null): RecipientNotificationRequestType
	{
		$this->mobile = $mobile;
		return $this;
	}

}
