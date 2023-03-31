<?php

/**
 * Plugin Name:       Config bar social share teleSUR
 * Description:       Coloca la barra de redes sociales
 * Version:           0.0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Servicios Web
 * Text Domain:       telesur-config-social
 */

    if ( ! defined('ABSPATH') ) {
        die; // It could also be 'exit;'
    }

    // defined( 'ABSPATH ) or die( 'You can\t access this file, you silly human!' );

    define( 'TLSURCONFIGSOCIAL_DIR', plugin_dir_path( __FILE__ ) );
    define( 'TLSURCONFIGSOCIAL_INCLUDES_DIR', TLSURCONFIGSOCIAL_DIR . 'includes/' );

    require_once( TLSURCONFIGSOCIAL_INCLUDES_DIR . '/social.php' );