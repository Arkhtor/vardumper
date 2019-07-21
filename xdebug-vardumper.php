<?php
/**
 * Plugin Name: x-debug proper var dump
 * Description: Nicely var_dump everything in admin panel and front-office. double click to dismiss dump. In future versions i'm planning to add full profiler.
 * Version:     1.0
 * Author:      Paweł Ługowski
 * Author URI:  https://www.linkedin.com/in/pawe%C5%82-%C5%82ugowski-75a24280/
 * License:     GPL v2 or later, if You use it, let me know.
 */


function load_dump_scripts_styles() {

	wp_enqueue_script( 'dump_js', plugins_url( 'dump.js', __FILE__ ), array(), array(), true );
	wp_enqueue_style ( 'dump_css' , plugins_url( 'dump.css', __FILE__ ));

}
function profiler_all(){
	var_dump( current_filter());
}
add_action('wp_enqueue_scripts', 'load_dump_scripts_styles');
add_action('admin_enqueue_scripts', 'load_dump_scripts_styles');
//add_action( 'all', 'profiler_all' );