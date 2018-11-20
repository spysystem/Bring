<?php
namespace Bring;


/**
 * Class ContactRequestType
 */
class ContactRequestType
{

	/**
	 * @var null|string $name
	 */
	protected $name;

	/**
	 * @var null|string $email
	 */
	protected $email;

	/**
	 * @var null|string $phoneNumber
	 */
	protected $phoneNumber;

	
	public function __construct()
	{
	
	}

	/**
	 * @return null|string
	 */
	public function getName(): ?string
	{
		return $this->name;
	}

	/**
	 * @param null|string $name
	 * @return ContactRequestType
	 */
	public function setName(?string $name = null): ContactRequestType
	{
		$this->name = $name;
		return $this;
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
	 * @return ContactRequestType
	 */
	public function setEmail(?string $email = null): ContactRequestType
	{
		$this->email = $email;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getPhoneNumber(): ?string
	{
		return $this->phoneNumber;
	}

	/**
	 * @param null|string $phoneNumber
	 * @return ContactRequestType
	 */
	public function setPhoneNumber(?string $phoneNumber = null): ContactRequestType
	{
		$this->phoneNumber = $phoneNumber;
		return $this;
	}

}
