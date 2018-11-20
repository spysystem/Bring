<?php
namespace Bring;


/**
 * Class PartyRequestType
 */
class PartyRequestType
{

	/**
	 * @var string $name
	 */
	protected $name;

	/**
	 * @var string $addressLine
	 */
	protected $addressLine;

	/**
	 * @var null|string $addressLine2
	 */
	protected $addressLine2;

	/**
	 * @var null|string $postalCode
	 */
	protected $postalCode;

	/**
	 * @var string $city
	 */
	protected $city;

	/**
	 * @var string $countryCode
	 */
	protected $countryCode;

	/**
	 * @var null|string $reference
	 */
	protected $reference;

	/**
	 * @var null|string $additionalAddressInfo
	 */
	protected $additionalAddressInfo;

	/**
	 * @var null|string $vatNumber
	 */
	protected $vatNumber;

	/**
	 * @var null|ContactRequestType $contact
	 */
	protected $contact;

	/**
	 * @param string $name
	 * @param string $addressLine
	 * @param string $city
	 * @param string $countryCode
	 */
	public function __construct(string $name, string $addressLine, string $city, string $countryCode)
	{
		$this->name = $name;
		$this->addressLine = $addressLine;
		$this->city = $city;
		$this->countryCode = $countryCode;
	}

	/**
	 * @return string
	 */
	public function getName(): ?string
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 * @return PartyRequestType
	 */
	public function setName(string $name): PartyRequestType
	{
		$this->name = $name;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getAddressLine(): ?string
	{
		return $this->addressLine;
	}

	/**
	 * @param string $addressLine
	 * @return PartyRequestType
	 */
	public function setAddressLine(string $addressLine): PartyRequestType
	{
		$this->addressLine = $addressLine;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getAddressLine2(): ?string
	{
		return $this->addressLine2;
	}

	/**
	 * @param null|string $addressLine2
	 * @return PartyRequestType
	 */
	public function setAddressLine2(?string $addressLine2 = null): PartyRequestType
	{
		$this->addressLine2 = $addressLine2;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getPostalCode(): ?string
	{
		return $this->postalCode;
	}

	/**
	 * @param null|string $postalCode
	 * @return PartyRequestType
	 */
	public function setPostalCode(?string $postalCode = null): PartyRequestType
	{
		$this->postalCode = $postalCode;
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
	 * @return PartyRequestType
	 */
	public function setCity(string $city): PartyRequestType
	{
		$this->city = $city;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCountryCode(): ?string
	{
		return $this->countryCode;
	}

	/**
	 * @param string $countryCode
	 * @return PartyRequestType
	 */
	public function setCountryCode(string $countryCode): PartyRequestType
	{
		$this->countryCode = $countryCode;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getReference(): ?string
	{
		return $this->reference;
	}

	/**
	 * @param null|string $reference
	 * @return PartyRequestType
	 */
	public function setReference(?string $reference = null): PartyRequestType
	{
		$this->reference = $reference;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getAdditionalAddressInfo(): ?string
	{
		return $this->additionalAddressInfo;
	}

	/**
	 * @param null|string $additionalAddressInfo
	 * @return PartyRequestType
	 */
	public function setAdditionalAddressInfo(?string $additionalAddressInfo = null): PartyRequestType
	{
		$this->additionalAddressInfo = $additionalAddressInfo;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getVatNumber(): ?string
	{
		return $this->vatNumber;
	}

	/**
	 * @param null|string $vatNumber
	 * @return PartyRequestType
	 */
	public function setVatNumber(?string $vatNumber = null): PartyRequestType
	{
		$this->vatNumber = $vatNumber;
		return $this;
	}

	/**
	 * @return null|ContactRequestType
	 */
	public function getContact(): ?ContactRequestType
	{
		return $this->contact;
	}

	/**
	 * @param null|ContactRequestType $contact
	 * @return PartyRequestType
	 */
	public function setContact(?ContactRequestType $contact = null): PartyRequestType
	{
		$this->contact = $contact;
		return $this;
	}

}
