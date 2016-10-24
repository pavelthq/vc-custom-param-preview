<?php
return array(
	'name' => __( 'Test custom preview', 'js_composer' ),
	'base' => 'vc_test_custom_preview',
	'category' => __( 'Content', 'js_composer' ),
	'description' => __( 'Test custom preview', 'js_composer' ),
	'params' => array(
		array(
			'type' => 'param_group',
			'heading' => __( 'Values', 'js_composer' ),
			'param_name' => 'values',
			'params' => array(
				array(
					'type' => 'textfield',
					'heading' => __( 'Title', 'js_composer' ),
					'param_name' => 'title',
					'description' => __( 'Enter title for chart dataset.', 'js_composer' ),
					'admin_label' => true,
				),
				array(
					'type' => 'custom_preview',
					'heading' => __( 'Preview', 'js_composer' ),
					'param_name' => 'preview',
					'description' => __( 'Enter image url for preview.', 'js_composer' ),
					'value' => 'https://placeit.net/uploads/stage/wide_image/6114/default_watermarked_12411base.jpg',
				),
			),
			'callbacks' => array(
				'after_add' => 'my_module_on_add',
			),
		),
	),
);
