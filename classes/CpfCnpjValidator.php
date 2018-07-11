<?php

class CpfCnpjValidator {

    //<editor-fold desc="Plugin Properties">

    /**
     * The class attribute to check if is a cpf field
     */
    const CPF_FIELD_KEY = 'class:cf7cpfcnpj-cpf';

    /**
     * The class attribute to check if is a cnpj field
     */
    const CNPJ_FIELD_KEY = 'class:cf7cpfcnpj-cnpj';

    /**
     * The value to check if a field is required
     */
    const REQUIRED_FIELD_KEY = 'text*';

    /**
     * Plugin instance.
     *
     * @see get_instance()
     * @type object
     */
    protected static $instance = NULL;

    //</editor-fold>

    //<editor-fold desc="Plugin Setup">

    /**
     * Access this plugin’s working instance
     *
     * @wp-hook plugins_loaded
     * @since   2018.001.28
     *
     * @return  object of this class
     */
    public static function getInstance()
    {
        NULL === self::$instance and self::$instance = new self;
        return self::$instance;
    }

    /**
     * Plugin Bootstrap
     *
     * @wp-hook plugins_loaded
     * @since   2018.01.28
     * @return  void
     */
    public function plugin_setup ()
    {
        add_filter(
            'wpcf7_validate_text*',
            array(CpfCnpjValidator::getInstance(), 'validate_fields_filter'),
            20, 2
        );

        add_filter(
            'wpcf7_validate_text',
            array(CpfCnpjValidator::getInstance(), 'validate_fields_filter'),
            20, 2
        );
    }

    /**
     * Constructor. Intentionally left empty and public.
     *
     * @see plugin_setup()
     * @since 2018.01.28
     */
    public function __construct() {}

    //</editor-fold>

    //<editor-fold desc="Plugin main methods">

    /**
     * Check if a given input is a CPF field and validate it
     *
     * @param   WPCF7_Validation    $result
     * @param   WPCF7_FormTag       $tag
     *
     * @since   2018.01.28
     * @return  WPCF7_Validation
     */
    public function validate_fields_filter ($result, $tag)
    {
        if ($this->isCpfField($tag)) {
            return $this->validate($result, $tag, 'Cpf');
        }

        if ($this->isCnpjField($tag)) {
            return $this->validate($result, $tag, 'Cnpj');
        }

        return $result;
    }

    /**
     * Validate a field and apply the validation logic based on $validator param
     *
     * @param   WPCF7_FormTag       $tag        The tag that represents a field
     * @param   WPCF7_Validation    $result
     * @param   Validator           $validator  The Validator to be instantied
     *
     * @since   2018.01.28
     * @return  WPCF7_Validation
     */
    private function validate($result, $tag, $validator)
    {
        $validator = new $validator;
        $inputVal = $this->getFieldValueFromTag($tag);

        if ( ($this->isRequiredField($tag) === true) && ! $validator->validate($inputVal)) {
            $result->invalidate( $tag, $validator->getErrorMessage() );
        }

        elseif ( ! empty( $inputVal ) && ! $validator->validate($inputVal) ) {
            $result->invalidate( $tag, $validator->getErrorMessage() );
        }

        return $result;
    }

    //</editor-fold>

    //<editor-fold desc="Plugin Helpers">
    /**
     * Check is a given tag is a CPF field by it class attribute
     *
     * @param   WPCF7_FormTag   $tag    The tag that represents a field
     *
     * @since   2018.01.28
     * @return  boolean
     */
    private function isCpfField ($tag)
    {
	    $tag = (Object)$tag;
        return in_array( self::CPF_FIELD_KEY, $tag->options);
    }

    /**
     * Check is a given tag is a CPF field by it class attribute
     *
     * @param   WPCF7_FormTag   $tag    The tag that represents a field
     *
     * @since   2018.01.28
     * @return  boolean
     */
    private function isCnpjField ($tag)
    {
	    $tag = (Object)$tag;
        return in_array( self::CNPJ_FIELD_KEY, $tag->options);
    }

    /**
     * Check is a given tag is a required field
     *
     * @param   WPCF7_FormTag   $tag    The tag that represents a field
     *
     * @since   2018.01.28
     * @return  boolean
     */
    private function isRequiredField ($tag)
    {
	    $tag = (Object)$tag;
        return (self::REQUIRED_FIELD_KEY === $tag->type);
    }

    /**
     * Retrives the value from $_POST field based on his name
     *
     * @param   WPCF7_FormTag   $tag    The tag that represents a field
     *
     * @since   2018.01.28
     * @return  string          The sanitized value
     */
    private function getFieldValueFromTag($tag)
    {
	    $tag = (Object)$tag;
        return isset( $_POST[ $tag->name ] ) ? sanitize_text_field( $_POST[ $tag->name ] ) : '';
    }
    //</editor-fold>
}