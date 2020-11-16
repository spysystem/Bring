<?php
namespace Bring;


/**
 * Class ediCustomsDeclarations
 */
class ediCustomsDeclarations
{

	/**
	 * @var string|NatureOfTransaction $natureOfTransaction
	 */
	protected $natureOfTransaction;

	/**
	 * @var string $otherNatureOfTransactionDescription
	 */
	protected $otherNatureOfTransactionDescription;

	/**
	 * @var string $vatOnEcommerce
	 */
	protected $vatOnEcommerce;

	/**
	 * @var EDICustomsDeclarationRequestType[] $ediCustomsDeclaration
	 */
	protected $ediCustomsDeclaration;

	/**
	 * @param string|NatureOfTransaction $natureOfTransaction
	 * @param string $otherNatureOfTransactionDescription
	 * @param string $vatOnEcommerce
	 * @param EDICustomsDeclarationRequestType[] $ediCustomsDeclaration
	 */
	public function __construct($natureOfTransaction, string $otherNatureOfTransactionDescription, string $vatOnEcommerce, array $ediCustomsDeclaration)
	{
		$this->natureOfTransaction = $natureOfTransaction;
		$this->otherNatureOfTransactionDescription = $otherNatureOfTransactionDescription;
		$this->vatOnEcommerce = $vatOnEcommerce;
		$this->ediCustomsDeclaration = $ediCustomsDeclaration;
	}

	/**
	 * @return string|NatureOfTransaction
	 */
	public function getNatureOfTransaction()
	{
		return $this->natureOfTransaction;
	}

	/**
	 * @param string|NatureOfTransaction $natureOfTransaction
	 * @return ediCustomsDeclarations
	 */
	public function setNatureOfTransaction($natureOfTransaction): ediCustomsDeclarations
	{
		$this->natureOfTransaction = $natureOfTransaction;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getOtherNatureOfTransactionDescription(): ?string
	{
		return $this->otherNatureOfTransactionDescription;
	}

	/**
	 * @param string $otherNatureOfTransactionDescription
	 * @return ediCustomsDeclarations
	 */
	public function setOtherNatureOfTransactionDescription(string $otherNatureOfTransactionDescription): ediCustomsDeclarations
	{
		$this->otherNatureOfTransactionDescription = $otherNatureOfTransactionDescription;
		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getVatOnEcommerce(): ?string
	{
		return $this->vatOnEcommerce;
	}

	/**
	 * @param string $vatOnEcommerce
	 * @return ediCustomsDeclarations
	 */
	public function setVatOnEcommerce(string $vatOnEcommerce): ediCustomsDeclarations
	{
		$this->vatOnEcommerce = $vatOnEcommerce;
		return $this;
	}

	/**
	 * @return EDICustomsDeclarationRequestType[]
	 */
	public function getEdiCustomsDeclaration(): ?array
	{
		return $this->ediCustomsDeclaration;
	}

	/**
	 * @param EDICustomsDeclarationRequestType[] $ediCustomsDeclaration
	 * @return ediCustomsDeclarations
	 */
	public function setEdiCustomsDeclaration(array $ediCustomsDeclaration): ediCustomsDeclarations
	{
		$this->ediCustomsDeclaration = $ediCustomsDeclaration;
		return $this;
	}

}
