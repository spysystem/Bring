<?php

namespace Bring;

class errors
{

    /**
     * @var ErrorResponseType[] $error
     */
    protected $error = null;

    /**
     * @param ErrorResponseType[] $error
     */
    public function __construct($error)
    {
      $this->error[] = $error;
    }

    /**
     * @return ErrorResponseType[]
     */
    public function getError()
    {
      return $this->error;
    }

    /**
     * @param ErrorResponseType[] $error
     * @return \Bring\errors
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}
