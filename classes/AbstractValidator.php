<?php

abstract class AbstractValidator
{
    /**
     * @var String The error message for display
     */
    protected $errorMessage;

    /**
     * AbstractValidator constructor.
     */
    public function __construct()
    {
        $this->setErrorMessage();
    }

    /**
     * Set error Message for fail validation display
     *
     * @return void
     */
    abstract public function setErrorMessage();

    /**
     * @return  String  The error message for display
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

}