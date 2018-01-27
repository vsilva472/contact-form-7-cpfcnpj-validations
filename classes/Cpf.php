<?php

class Cpf extends AbstractValidator implements Validator
{
    /**
     * @var int CPF_VALID_LENGTH
     */
    const CPF_VALID_LENGTH = 11;

    /**
     * Validate a given Brazilian CPF number
     *
     * @param   $cpf
     * @return  bool
     */
    public function validate($cpf)
    {
        $raw_cpf    = $cpf;
        $cpf        = $this->clean($cpf);
        $has_mask   = preg_match("/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/", $raw_cpf);

        if (!$has_mask && !is_numeric($raw_cpf)) {
            return false;
        }

        if (!$this->isLengthValid($cpf)) {
            return false;
        }

        elseif ($this->isDummyValue($cpf)) {
            return false;
        }

        return $this->validateDigits($cpf);
    }

    /**
     * Check if a given CPF value has a valid length
     *
     * @see CPF_VALID_LENGTH
     * @param   $cpf
     * @return  bool
     */
    public function isLengthValid ($cpf) {

        return (strlen($cpf) === self::CPF_VALID_LENGTH);
    }

    /**
     * Extract only the number of a given CPF
     *
     * @param   $cpf
     * @return  mixed
     */
    public function clean($cpf)
    {
        return preg_replace("/[^0-9]/", "", $cpf);
    }

    /**
     * Check if a given CPF value is a dummy sequence
     *
     * @param   $cpf
     * @return  bool
     */
    public function isDummyValue($cpf)
    {
        return (
            $cpf == '00000000000' ||
            $cpf == '11111111111' ||
            $cpf == '22222222222' ||
            $cpf == '33333333333' ||
            $cpf == '44444444444' ||
            $cpf == '55555555555' ||
            $cpf == '66666666666' ||
            $cpf == '77777777777' ||
            $cpf == '88888888888' ||
            $cpf == '99999999999'
        );
    }

    /**
     * @param $cpf
     * @return bool
     */
    private function validateDigits ($cpf)
    {
        for ($t = 9; $t < 11; $t++) {

            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }

        return true;
    }

    /**
     * Set error Message for fail validation display
     *
     * @return void
     */
    public function setErrorMessage()
    {
        $this->errorMessage = "CPF Inválido.";
    }
}