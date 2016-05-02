<?php

namespace Bring;

class products
{

    /**
     * @var string $product
     */
    protected $product = null;

    /**
     * @param string $product
     */
    public function __construct($product)
    {
      $this->product = $product;
    }

    /**
     * @return string
     */
    public function getProduct()
    {
      return $this->product;
    }

    /**
     * @param string $product
     * @return \Bring\products
     */
    public function setProduct($product)
    {
      $this->product = $product;
      return $this;
    }

}
