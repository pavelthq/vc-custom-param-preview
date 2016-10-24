<?php
/*
Plugin Name: Vc Custom Param types
Plugin URI: http://vc.wpbakery.com/
Description: Custom preview param with vc.atts.init Visual Composer on Steroids
Version: 1.0
Author: WPBakery
Author URI: http://wpbakery.com
License: http://codecanyon.net/licenses
*/
if ( ! defined( 'ABSPATH' ) ) {
	die( '' ); // Don't call directly
}

add_action( 'vc_build_admin_page', 'vc_custom_preview_init' );
add_action( 'vc_after_init', 'vc_custom_preview_shortcode' );
function vc_custom_preview_init() {
	require_once 'param/class-vc-custom-param-preview.php';
	new VcCustomParamPreview();
}

function vc_custom_preview_shortcode() {
	require_once 'shortcode/shortcode-vc-test-custom-preview-lean-map.php';
	require_once 'shortcode/shortcode-vc-test-custom-preview-class.php';
}

function vc_custom_preview_path() {
	return __FILE__;
}