<?php
namespace Bring;


/**
 * Class ProductRequestType
 */
class ProductRequestType
{

	/**
	 * @var string $id
	 */
	protected $id;

	/**
	 * @var string $customerNumber
	 */
	protected $customerNumber;

	/**
	 * @var null|ServicesRequestType $services
	 */
	protected $services;

	/**
	 * @var null|additionalServices $additionalServices
	 */
	protected $additionalServices;

	/**
	 * @var null|CustomsDeclarationRequestType $customsDeclaration
	 */
	protected $customsDeclaration;

	/**
	 * @var null|string $messageForRecipient
	 */
	protected $messageForRecipient;

	/**
	 * @var null|string|whoPaysInvoice $whoPaysInvoice
	 */
	protected $whoPaysInvoice;

	/**
	 * @var null|string|incotermRule $incotermRule
	 */
	protected $incotermRule;

	/**
	 * @var null|ediCustomsDeclarations $ediCustomsDeclarations
	 */
	protected $ediCustomsDeclarations;

	/**
	 * @param string $id
	 * @param string $customerNumber
	 */
	public function __construct(string $id, string $customerNumber)
	{
		$this->id = $id;
		$this->customerNumber = $customerNumber;
	}

	/**
	 * @return string
	 */
	public function getId(): ?string
	{
		return $this->id;
	}

	/**
	 * @param string $id
	 * @return ProductRequestType
	 */
	public function setId(string $id): ProductRequestType
	{
		$this->id = $id;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCustomerNumber(): ?string
	{
		return $this->customerNumber;
	}

	/**
	 * @param string $customerNumber
	 * @return ProductRequestType
	 */
	public function setCustomerNumber(string $customerNumber): ProductRequestType
	{
		$this->customerNumber = $customerNumber;
		return $this;
	}

	/**
	 * @return null|ServicesRequestType
	 */
	public function getServices(): ?ServicesRequestType
	{
		return $this->services;
	}

	/**
	 * @param null|ServicesRequestType $services
	 * @return ProductRequestType
	 */
	public function setServices(?ServicesRequestType $services = null): ProductRequestType
	{
		$this->services = $services;
		return $this;
	}

	/**
	 * @return null|additionalServices
	 */
	public function getAdditionalServices(): ?additionalServices
	{
		return $this->additionalServices;
	}

	/**
	 * @param null|additionalServices $additionalServices
	 * @return ProductRequestType
	 */
	public function setAdditionalServices(?additionalServices $additionalServices = null): ProductRequestType
	{
		$this->additionalServices = $additionalServices;
		return $this;
	}

	/**
	 * @return null|CustomsDeclarationRequestType
	 */
	public function getCustomsDeclaration(): ?CustomsDeclarationRequestType
	{
		return $this->customsDeclaration;
	}

	/**
	 * @param null|CustomsDeclarationRequestType $customsDeclaration
	 * @return ProductRequestType
	 */
	public function setCustomsDeclaration(?CustomsDeclarationRequestType $customsDeclaration = null): ProductRequestType
	{
		$this->customsDeclaration = $customsDeclaration;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getMessageForRecipient(): ?string
	{
		return $this->messageForRecipient;
	}

	/**
	 * @param null|string $messageForRecipient
	 * @return ProductRequestType
	 */
	public function setMessageForRecipient(?string $messageForRecipient = null): ProductRequestType
	{
		$this->messageForRecipient = $messageForRecipient;
		return $this;
	}

	/**
	 * @return null|string|whoPaysInvoice
	 */
	public function getWhoPaysInvoice()
	{
		return $this->whoPaysInvoice;
	}

	/**
	 * @param null|string|whoPaysInvoice $whoPaysInvoice
	 * @return ProductRequestType
	 */
	public function setWhoPaysInvoice($whoPaysInvoice): ProductRequestType
	{
		$this->whoPaysInvoice = $whoPaysInvoice;
		return $this;
	}

	/**
	 * @return null|string|incotermRule
	 */
	public function getIncotermRule()
	{
		return $this->incotermRule;
	}

	/**
	 * @param null|string|incotermRule $incotermRule
	 * @return ProductRequestType
	 */
	public function setIncotermRule($incotermRule): ProductRequestType
	{
		$this->incotermRule = $incotermRule;
		return $this;
	}

	/**
	 * @return null|ediCustomsDeclarations
	 */
	public function getEdiCustomsDeclarations(): ?ediCustomsDeclarations
	{
		return $this->ediCustomsDeclarations;
	}

	/**
	 * @param null|ediCustomsDeclarations $ediCustomsDeclarations
	 * @return ProductRequestType
	 */
	public function setEdiCustomsDeclarations(?ediCustomsDeclarations $ediCustomsDeclarations = null): ProductRequestType
	{
		$this->ediCustomsDeclarations = $ediCustomsDeclarations;
		return $this;
	}

}
