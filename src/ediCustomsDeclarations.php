<?php
namespace Bring;


/**
 * Class ediCustomsDeclarations
 */
class ediCustomsDeclarations
{

	/**
	 * @var null|EDICustomsDeclarationRequestType[] $ediCustomsDeclaration
	 */
	protected $ediCustomsDeclaration;

	
	public function __construct()
	{
	
	}

	/**
	 * @return null|EDICustomsDeclarationRequestType[]
	 */
	public function getEdiCustomsDeclaration(): ?array
	{
		return $this->ediCustomsDeclaration;
	}

	/**
	 * @param null|EDICustomsDeclarationRequestType[] $ediCustomsDeclaration
	 * @return ediCustomsDeclarations
	 */
	public function setEdiCustomsDeclaration(?array $ediCustomsDeclaration = null): ediCustomsDeclarations
	{
		$this->ediCustomsDeclaration = $ediCustomsDeclaration;
		return $this;
	}

}
