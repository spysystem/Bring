<?php
namespace Bring;


/**
 * Class CustomsDeclarationRequestType
 */
class CustomsDeclarationRequestType
{

	/**
	 * @var string $customsDeclarationType
	 */
	protected $customsDeclarationType;

	/**
	 * @var null|string $customsDeclarationText
	 */
	protected $customsDeclarationText;

	/**
	 * @param string $customsDeclarationType
	 */
	public function __construct(string $customsDeclarationType)
	{
		$this->customsDeclarationType = $customsDeclarationType;
	}

	/**
	 * @return string
	 */
	public function getCustomsDeclarationType(): ?string
	{
		return $this->customsDeclarationType;
	}

	/**
	 * @param string $customsDeclarationType
	 * @return CustomsDeclarationRequestType
	 */
	public function setCustomsDeclarationType(string $customsDeclarationType): CustomsDeclarationRequestType
	{
		$this->customsDeclarationType = $customsDeclarationType;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getCustomsDeclarationText(): ?string
	{
		return $this->customsDeclarationText;
	}

	/**
	 * @param null|string $customsDeclarationText
	 * @return CustomsDeclarationRequestType
	 */
	public function setCustomsDeclarationText(?string $customsDeclarationText = null): CustomsDeclarationRequestType
	{
		$this->customsDeclarationText = $customsDeclarationText;
		return $this;
	}

}
