<?php
/*
Plugin Name: Contact Form 7 CPF/CNPJ Validations
Description: Validações de CPF e/ou CNPJ para campos do plugin Contact Form 7
Plugin URI: https://github.com/vsilva472/contact-form-7-cpf-cnpj-validations
Author: Vinicius Silva
Author URI: http://www.viniciusdesouza.com.br
Version: 0.0.1
*/

define( 'CF7CPFCNPJ_PLUGIN_DIR', untrailingslashit( dirname( __FILE__ ) ) );

define( 'CF7CPFCNPJ_CLASSES_DIR', CF7CPFCNPJ_PLUGIN_DIR . '/classes' );


require_once CF7CPFCNPJ_CLASSES_DIR . '/Validator.php';
require_once CF7CPFCNPJ_CLASSES_DIR . '/AbstractValidator.php';
require_once CF7CPFCNPJ_CLASSES_DIR . '/Cpf.php';
require_once CF7CPFCNPJ_CLASSES_DIR . '/Cnpj.php';
require_once CF7CPFCNPJ_CLASSES_DIR . '/CpfCnpjValidator.php';

add_action(
    'plugins_loaded',
    array( CpfCnpjValidator::getInstance(), 'plugin_setup' )
);
