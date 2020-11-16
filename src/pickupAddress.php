<?php
namespace Bring;


/**
 * Class pickupAddress
 */
class pickupAddress
{

	/**
	 * @var string $street
	 */
	protected $street;

	/**
	 * @var string $postalCode
	 */
	protected $postalCode;

	/**
	 * @var string $email
	 */
	protected $email;

	/**
	 * @var string $phoneNumber
	 */
	protected $phoneNumber;

	/**
	 * @var string $city
	 */
	protected $city;

	/**
	 * @var null|string $contactName
	 */
	protected $contactName;

	/**
	 * @var null|string $messageToDriver
	 */
	protected $messageToDriver;

	/**
	 * @var null|string $deliveryInstructionToDriver
	 */
	protected $deliveryInstructionToDriver;

	/**
	 * @param string $street
	 * @param string $postalCode
	 * @param string $email
	 * @param string $phoneNumber
	 * @param string $city
	 */
	public function __construct(string $street, string $postalCode, string $email, string $phoneNumber, string $city)
	{
		$this->street = $street;
		$this->postalCode = $postalCode;
		$this->email = $email;
		$this->phoneNumber = $phoneNumber;
		$this->city = $city;
	}

	/**
	 * @return string
	 */
	public function getStreet(): ?string
	{
		return $this->street;
	}

	/**
	 * @param string $street
	 * @return pickupAddress
	 */
	public function setStreet(string $street): pickupAddress
	{
		$this->street = $street;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPostalCode(): ?string
	{
		return $this->postalCode;
	}

	/**
	 * @param string $postalCode
	 * @return pickupAddress
	 */
	public function setPostalCode(string $postalCode): pickupAddress
	{
		$this->postalCode = $postalCode;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getEmail(): ?string
	{
		return $this->email;
	}

	/**
	 * @param string $email
	 * @return pickupAddress
	 */
	public function setEmail(string $email): pickupAddress
	{
		$this->email = $email;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPhoneNumber(): ?string
	{
		return $this->phoneNumber;
	}

	/**
	 * @param string $phoneNumber
	 * @return pickupAddress
	 */
	public function setPhoneNumber(string $phoneNumber): pickupAddress
	{
		$this->phoneNumber = $phoneNumber;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCity(): ?string
	{
		return $this->city;
	}

	/**
	 * @param string $city
	 * @return pickupAddress
	 */
	public function setCity(string $city): pickupAddress
	{
		$this->city = $city;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getContactName(): ?string
	{
		return $this->contactName;
	}

	/**
	 * @param null|string $contactName
	 * @return pickupAddress
	 */
	public function setContactName(?string $contactName = null): pickupAddress
	{
		$this->contactName = $contactName;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getMessageToDriver(): ?string
	{
		return $this->messageToDriver;
	}

	/**
	 * @param null|string $messageToDriver
	 * @return pickupAddress
	 */
	public function setMessageToDriver(?string $messageToDriver = null): pickupAddress
	{
		$this->messageToDriver = $messageToDriver;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getDeliveryInstructionToDriver(): ?string
	{
		return $this->deliveryInstructionToDriver;
	}

	/**
	 * @param null|string $deliveryInstructionToDriver
	 * @return pickupAddress
	 */
	public function setDeliveryInstructionToDriver(?string $deliveryInstructionToDriver = null): pickupAddress
	{
		$this->deliveryInstructionToDriver = $deliveryInstructionToDriver;
		return $this;
	}

}
