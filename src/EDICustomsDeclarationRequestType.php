<?php
namespace Bring;


/**
 * Class EDICustomsDeclarationRequestType
 */
class EDICustomsDeclarationRequestType
{

	/**
	 * @var int $quantity
	 */
	protected $quantity;

	/**
	 * @var string $goodsDescription
	 */
	protected $goodsDescription;

	/**
	 * @var null|string $customsArticleNumber
	 */
	protected $customsArticleNumber;

	/**
	 * @var float $itemNetWeightInKg
	 */
	protected $itemNetWeightInKg;

	/**
	 * @var float $tarriffLineAmount
	 */
	protected $tarriffLineAmount;

	/**
	 * @var string $currency
	 */
	protected $currency;

	/**
	 * @var null|string $countryOfOrigin
	 */
	protected $countryOfOrigin;

	/**
	 * @param int $quantity
	 * @param string $goodsDescription
	 * @param float $itemNetWeightInKg
	 * @param float $tarriffLineAmount
	 * @param string $currency
	 */
	public function __construct(int $quantity, string $goodsDescription, float $itemNetWeightInKg, float $tarriffLineAmount, string $currency)
	{
		$this->quantity = $quantity;
		$this->goodsDescription = $goodsDescription;
		$this->itemNetWeightInKg = $itemNetWeightInKg;
		$this->tarriffLineAmount = $tarriffLineAmount;
		$this->currency = $currency;
	}

	/**
	 * @return int
	 */
	public function getQuantity(): ?int
	{
		return $this->quantity;
	}

	/**
	 * @param int $quantity
	 * @return EDICustomsDeclarationRequestType
	 */
	public function setQuantity(int $quantity): EDICustomsDeclarationRequestType
	{
		$this->quantity = $quantity;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getGoodsDescription(): ?string
	{
		return $this->goodsDescription;
	}

	/**
	 * @param string $goodsDescription
	 * @return EDICustomsDeclarationRequestType
	 */
	public function setGoodsDescription(string $goodsDescription): EDICustomsDeclarationRequestType
	{
		$this->goodsDescription = $goodsDescription;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getCustomsArticleNumber(): ?string
	{
		return $this->customsArticleNumber;
	}

	/**
	 * @param null|string $customsArticleNumber
	 * @return EDICustomsDeclarationRequestType
	 */
	public function setCustomsArticleNumber(?string $customsArticleNumber = null): EDICustomsDeclarationRequestType
	{
		$this->customsArticleNumber = $customsArticleNumber;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getItemNetWeightInKg(): ?float
	{
		return $this->itemNetWeightInKg;
	}

	/**
	 * @param float $itemNetWeightInKg
	 * @return EDICustomsDeclarationRequestType
	 */
	public function setItemNetWeightInKg(float $itemNetWeightInKg): EDICustomsDeclarationRequestType
	{
		$this->itemNetWeightInKg = $itemNetWeightInKg;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getTarriffLineAmount(): ?float
	{
		return $this->tarriffLineAmount;
	}

	/**
	 * @param float $tarriffLineAmount
	 * @return EDICustomsDeclarationRequestType
	 */
	public function setTarriffLineAmount(float $tarriffLineAmount): EDICustomsDeclarationRequestType
	{
		$this->tarriffLineAmount = $tarriffLineAmount;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCurrency(): ?string
	{
		return $this->currency;
	}

	/**
	 * @param string $currency
	 * @return EDICustomsDeclarationRequestType
	 */
	public function setCurrency(string $currency): EDICustomsDeclarationRequestType
	{
		$this->currency = $currency;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getCountryOfOrigin(): ?string
	{
		return $this->countryOfOrigin;
	}

	/**
	 * @param null|string $countryOfOrigin
	 * @return EDICustomsDeclarationRequestType
	 */
	public function setCountryOfOrigin(?string $countryOfOrigin = null): EDICustomsDeclarationRequestType
	{
		$this->countryOfOrigin = $countryOfOrigin;
		return $this;
	}

}
