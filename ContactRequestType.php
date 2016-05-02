<?php

namespace Bring;

class ContactRequestType
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $phoneNumber
     */
    protected $phoneNumber = null;

    /**
     * @param string $name
     * @param string $email
     * @param string $phoneNumber
     */
    public function __construct($name, $email, $phoneNumber)
    {
      $this->name = $name;
      $this->email = $email;
      $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Bring\ContactRequestType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
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
     * @return \Bring\ContactRequestType
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
      return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     * @return \Bring\ContactRequestType
     */
    public function setPhoneNumber($phoneNumber)
    {
      $this->phoneNumber = $phoneNumber;
      return $this;
    }

}
