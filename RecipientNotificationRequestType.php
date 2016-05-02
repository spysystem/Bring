<?php

namespace Bring;

class RecipientNotificationRequestType
{

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $mobile
     */
    protected $mobile = null;

    /**
     * @param string $email
     * @param string $mobile
     */
    public function __construct($email, $mobile)
    {
      $this->email = $email;
      $this->mobile = $mobile;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param string $email
     * @return \Bring\RecipientNotificationRequestType
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return string
     */
    public function getMobile()
    {
      return $this->mobile;
    }

    /**
     * @param string $mobile
     * @return \Bring\RecipientNotificationRequestType
     */
    public function setMobile($mobile)
    {
      $this->mobile = $mobile;
      return $this;
    }

}
