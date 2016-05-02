<?php

namespace Bring;

class CustomsDeclarationRequestType
{

    /**
     * @var string $customsDeclarationType
     */
    protected $customsDeclarationType = null;

    /**
     * @var string $customsDeclarationText
     */
    protected $customsDeclarationText = null;

    /**
     * @param string $customsDeclarationType
     * @param string $customsDeclarationText
     */
    public function __construct($customsDeclarationType, $customsDeclarationText)
    {
      $this->customsDeclarationType = $customsDeclarationType;
      $this->customsDeclarationText = $customsDeclarationText;
    }

    /**
     * @return string
     */
    public function getCustomsDeclarationType()
    {
      return $this->customsDeclarationType;
    }

    /**
     * @param string $customsDeclarationType
     * @return \Bring\CustomsDeclarationRequestType
     */
    public function setCustomsDeclarationType($customsDeclarationType)
    {
      $this->customsDeclarationType = $customsDeclarationType;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomsDeclarationText()
    {
      return $this->customsDeclarationText;
    }

    /**
     * @param string $customsDeclarationText
     * @return \Bring\CustomsDeclarationRequestType
     */
    public function setCustomsDeclarationText($customsDeclarationText)
    {
      $this->customsDeclarationText = $customsDeclarationText;
      return $this;
    }

}
