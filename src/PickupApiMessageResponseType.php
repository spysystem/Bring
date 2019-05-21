<?php
namespace Bring;


/**
 * Class PickupApiMessageResponseType
 */
class PickupApiMessageResponseType
{

	/**
	 * @var string $_
	 */
	protected $_;

	/**
	 * @var string $lang
	 */
	protected $lang;

	/**
	 * @param string $_
	 * @param string $lang
	 */
	public function __construct(string $_, string $lang)
	{
		$this->_ = $_;
		$this->lang = $lang;
	}

	/**
	 * @return string
	 */
	public function get_(): ?string
	{
		return $this->_;
	}

	/**
	 * @param string $_
	 * @return PickupApiMessageResponseType
	 */
	public function set_(string $_): PickupApiMessageResponseType
	{
		$this->_ = $_;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getLang(): ?string
	{
		return $this->lang;
	}

	/**
	 * @param string $lang
	 * @return PickupApiMessageResponseType
	 */
	public function setLang(string $lang): PickupApiMessageResponseType
	{
		$this->lang = $lang;
		return $this;
	}

}
