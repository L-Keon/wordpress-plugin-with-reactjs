<?php
/**
 * Plugin Name:       Test React in WordPress
 * Description:       un plugin qui permet de tester le fonctionnement de react js dans WordPress
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Leonel Kenfack
 * License:           MIT
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wordpreact
 */

add_action( 'admin_menu', 'WPReact_init_menu_init_menu' );

/**
 * Init Admin Menu.
 *
 * @return void
 */
function WPReact_init_menu() {
    add_menu_page( __( 'WordPress & React', 'wordpreact'), __( 'WordPress & React', 'wordpreact'), 'manage_options', 'wordpreact', 'wordpreact_admin_page', 'dashicons-admin-post', '2.1' );
}

/**
 * Init Admin Page.
 *
 * @return void
 */
function wordpreact_admin_page() {
    require_once plugin_dir_path( __FILE__ ) . 'templates/app.php';
}