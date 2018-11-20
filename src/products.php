<?php
namespace Bring;


/**
 * Class products
 */
class products
{

	/**
	 * @var string[] $product
	 */
	protected $product;

	/**
	 * @param string[] $product
	 */
	public function __construct(array $product)
	{
		$this->product = $product;
	}

	/**
	 * @return string[]
	 */
	public function getProduct(): ?array
	{
		return $this->product;
	}

	/**
	 * @param string[] $product
	 * @return products
	 */
	public function setProduct(array $product): products
	{
		$this->product = $product;
		return $this;
	}

}
