<?php
/*
Plugin Name: Contact Form 7 CPF/CNPJ Validations
Description: Validações de CPF e/ou CNPJ para campos do plugin Contact Form 7
Plugin URI: https://github.com/vsilva472/contact-form-7-cpf-cnpj-validations
Author: Vinicius Silva
Author URI: http://www.viniciusdesouza.com.br
Version: 0.0.4
*/

if ( ! defined( 'CF7CPFCNPJ_PLUGIN_DIR' ) ) {
    define( 'CF7CPFCNPJ_PLUGIN_DIR', untrailingslashit( dirname( __FILE__ ) ) );
}

if ( ! defined( 'CF7CPFCNPJ_CLASSES_DIR' ) ) {
    define( 'CF7CPFCNPJ_CLASSES_DIR', CF7CPFCNPJ_PLUGIN_DIR . '/classes' );
}

if ( ! class_exists( 'Validator' ) ) {
    require_once CF7CPFCNPJ_CLASSES_DIR . '/Validator.php';
}

if ( ! class_exists( 'AbstractValidator' ) ) {
    require_once CF7CPFCNPJ_CLASSES_DIR . '/AbstractValidator.php';
}

if ( ! class_exists( 'Cpf' ) ) {
    require_once CF7CPFCNPJ_CLASSES_DIR . '/Cpf.php';
}

if ( ! class_exists( 'Cnpj' ) ) {
    require_once CF7CPFCNPJ_CLASSES_DIR . '/Cnpj.php';
}

if ( ! class_exists( 'CpfCnpjValidator' ) ) {
    require_once CF7CPFCNPJ_CLASSES_DIR . '/CpfCnpjValidator.php';
}

add_action(
    'plugins_loaded',
    array( CpfCnpjValidator::getInstance(), 'plugin_setup' )
);
