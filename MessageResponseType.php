<?php

namespace Bring;

class MessageResponseType
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var string $lang
     */
    protected $lang = null;

    /**
     * @param string $_
     * @param string $lang
     */
    public function __construct($_, $lang)
    {
      $this->_ = $_;
      $this->lang = $lang;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \Bring\MessageResponseType
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return string
     */
    public function getLang()
    {
      return $this->lang;
    }

    /**
     * @param string $lang
     * @return \Bring\MessageResponseType
     */
    public function setLang($lang)
    {
      $this->lang = $lang;
      return $this;
    }

}
