<?php

interface Validator
{
    /**
     * Call Validator Validate Method
     * @param   string  $val
     *
     * @return boolean
     */
    public function validate($val);

    /**
     * Set error Message for fail validation display
     *
     * @return void
     */
    public function setErrorMessage();
}