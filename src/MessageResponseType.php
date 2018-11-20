<?php
namespace Bring;


/**
 * Class MessageResponseType
 */
class MessageResponseType
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
	 * @return MessageResponseType
	 */
	public function set_(string $_): MessageResponseType
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
	 * @return MessageResponseType
	 */
	public function setLang(string $lang): MessageResponseType
	{
		$this->lang = $lang;
		return $this;
	}

}
