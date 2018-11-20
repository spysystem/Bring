<?php
namespace Bring;


/**
 * Class CashOnDeliveryMessageRequestType
 */
class CashOnDeliveryMessageRequestType
{

	/**
	 * @var string $value
	 */
	protected $value;

	/**
	 * @var string|MessageTypeRequestType $type
	 */
	protected $type;

	/**
	 * @param string $value
	 * @param string|MessageTypeRequestType $type
	 */
	public function __construct(string $value, $type)
	{
		$this->value = $value;
		$this->type = $type;
	}

	/**
	 * @return string
	 */
	public function getValue(): ?string
	{
		return $this->value;
	}

	/**
	 * @param string $value
	 * @return CashOnDeliveryMessageRequestType
	 */
	public function setValue(string $value): CashOnDeliveryMessageRequestType
	{
		$this->value = $value;
		return $this;
	}

	/**
	 * @return string|MessageTypeRequestType
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * @param string|MessageTypeRequestType $type
	 * @return CashOnDeliveryMessageRequestType
	 */
	public function setType($type): CashOnDeliveryMessageRequestType
	{
		$this->type = $type;
		return $this;
	}

}
