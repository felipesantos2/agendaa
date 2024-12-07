<?php


/**
 *
 *  @author            Felipe Pinheiro
 *  @copyright         2024 Felipe Pinheiro
 *  @license           https://unlicense.org
 *
 *
 *  Plugin Name: Adendaa
 *  Author: Felipe Pinheiro
 *  Author URI: https://github.com/felipesantos2
 *  Version: 1.0.0
 *  Licence:
 *  Text Domain: agendaa
 *
 *  Description: Cadastro de Eventos e suas informações
 *
 */


if (!defined('ABSPATH')) {
    throw new Exception('Constante ' . ABSPATH . ' não definida');
}

define('APP_IS_ACTIVE', true);

define('BASE_PATH', __DIR__);

/**
 *
 */
function agendaaa_register_post_type() {}

/**
 *
 */
function agendaaa_enqueue_scripts() {}

/**
 *
 */
function agendaaa_enqueue_admin_scripts() {}
/**
 *
 */
function agendaaa_register_meta_boxes() {}
