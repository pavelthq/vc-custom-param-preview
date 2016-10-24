<?php

class VcCustomParamPreview {

	public function __construct() {
		add_action( 'vc_load_default_params', array(
			$this,
			'vc_load_vc_custom_preview_param',
		) );
		add_action( 'vc_backend_editor_enqueue_js_css', array(
			$this,
			'vc_enqueue_editor_scripts_be',
		) );
		add_action( 'vc_frontend_editor_enqueue_js_css', array(
			$this,
			'vc_enqueue_editor_scripts_fe',
		) );
	}

	public function vc_enqueue_editor_scripts_be() {
		wp_enqueue_script( 'vc-custom-param-preview-be', preg_replace( '/\s/', '%20', plugins_url( 'assets/vc-custom-param-preview.js', vc_custom_preview_path() ) ) );
	}

	public function vc_enqueue_editor_scripts_fe() {
		wp_enqueue_script( 'vc-custom-param-preview-fe', preg_replace( '/\s/', '%20', plugins_url( 'assets/vc-custom-param-preview.js', vc_custom_preview_path() ) ) );
	}

	/**
	 * Add custom param to system
	 */
	public function vc_load_vc_custom_preview_param() {
		vc_add_shortcode_param( 'custom_preview', array(
			$this,
			'render',
		) );
	}

	/**
	 * Preview attribute type.
	 *
	 * @param $settings
	 * @param string $value
	 *
	 * @return string - html string.
	 */
	public function render( $settings, $value ) {
		return '<input id="' . $settings['param_name'] . '" value="' . $value . '" class="wpb_vc_param_value ' . $settings['param_name'] . ' ' . $settings['type'] . '" type="text" name="' . $settings['param_name'] . '" />';
	}
}
