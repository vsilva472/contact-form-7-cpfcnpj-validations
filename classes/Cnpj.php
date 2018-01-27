<?php


class Cnpj extends AbstractValidator implements Validator
{
    /**
     * @const   int
     */
    const VALID_CNPJ_LENGTH = 14;

    /**
     * @see validate()
     */
    const FIRST_DIGIT_POSITION = 12;

    /**
     * @see validate()
     */
    const SECOND_DIGIT_POSITION = 13;

    /**
     * @var array
     * @see setDummyValues()
     */
    private $dummyValues = array();

    /**
     * CNPJ constructor.
     */
    public function __construct()
    {
        parent::__construct();

        // generate dummy values
        for ( $i = 0; $i<=9; $i++) {
            $this->dummyValues[] .= str_pad('',self::VALID_CNPJ_LENGTH, $i);
        }
    }

    public function validate ($cnpj)
    {
        $cnpj_numbers = $this->clean($cnpj);

        if ( ! $this->hasValidPattern( $cnpj ) ) {
            return false;
        }

        if( strlen( $cnpj_numbers ) !== self::VALID_CNPJ_LENGTH ) {
            return false;
        }

        if ( $this->isDummyValue( $cnpj_numbers ) ) {
            return false;
        }

        $dg1 = $this->calculateDigit( $cnpj_numbers, self::FIRST_DIGIT_POSITION );

        if ( $dg1 != $cnpj_numbers{self::FIRST_DIGIT_POSITION} ) {
            return false;
        }

        // lazy calculated
        $dg2 = $this->calculateDigit( $cnpj_numbers, self::SECOND_DIGIT_POSITION );

        if ( $dg2 != $cnpj_numbers{self::SECOND_DIGIT_POSITION} ) {
            return false;
        }

        return true;
    }

    /**
     * Extract only the digits
     *
     * @param   string/int  $cnpj
     * @return string/int
     */
    private function clean($cnpj)
    {
        return preg_replace("/[^0-9]/", "", $cnpj);
    }

    /**
     * Check if a given CNPJ has a valid pattern
     *
     * @param $cnpj
     * @see validate()
     *
     * @return bool
     */
    private function hasValidPattern($cnpj)
    {
        $mask = "/^[0-9]{2}\.[0-9]{3}\.[0-9]{3}\/[0-9]{4}\-[0-9]{2}$/";

        if( ! preg_match($mask, $cnpj) && !preg_match( "/^[0-9]{14}$/", $cnpj ) ) {
            return false;
        }

        return true;
    }

    /**
     * Check if a give cnpj is a dummy value
     *
     * @param $cnpj
     * @see validate()
     *
     * @return bool
     */
    private function isDummyValue( $cnpj ) {
        return in_array( $cnpj, $this->dummyValues );
    }

    /**
     * Caculate the digi by position
     *
     * @param   string  $cnpj
     * @param   int     $str_length
     * @see     validate()
     *
     * @return  int
     */
    private function calculateDigit($cnpj, $str_length)
    {
        $sum     = 0;
        $pos     = $str_length - 7;
        $numbers = substr($cnpj,0, $str_length);

        for ($i = $str_length; $i >= 1; $i--) {
            $sum += $numbers{$str_length - $i} * $pos--;
            if ($pos < 2) $pos = 9;
        }

        return ($sum % 11) < 2 ? 0 : 11 - ($sum % 11);
    }

    /**
     * Set error Message for fail validation display
     *
     * @return void
     */
    public function setErrorMessage()
    {
        $this->errorMessage = "CNPJ Inválido.";
    }
}