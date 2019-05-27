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
	 * @var EDICustomsDeclarationRequestType[] $ediCustomsDeclaration
	 */
	protected $ediCustomsDeclaration;

	/**
	 * @param string|NatureOfTransaction $natureOfTransaction
	 * @param EDICustomsDeclarationRequestType[] $ediCustomsDeclaration
	 */
	public function __construct($natureOfTransaction, array $ediCustomsDeclaration)
	{
		$this->natureOfTransaction = $natureOfTransaction;
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
