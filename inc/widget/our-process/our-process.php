<?php
/**
 * Our Process widget.
 *
 * @package themetim
 */

class Themetim_Our_Process_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'themetim-our-process-widget',
			__( 'ThemeTim Our Process Widget', 'themetim' ),
			array(
				'description' => __( 'Our Process', 'themetim' ),
			),
			array(),

			array(
				'title' => array(
					'type'  => 'text',
					'label' => __( 'Title', 'themetim' ),
				),
				'heading_alignment' => array(
					'type' => 'select',
					'label' => __( 'Text Alignment', 'themetim' ),
					'default' => 'text-center',
					'options' => array(
						'text-left' => __( 'Text Left', 'themetim' ),
						'text-center' => __( 'Text Center', 'themetim' ),
						'text-right' => __( 'Text Right', 'themetim' ),
					)
				),
				'process' => array(
					'type'       => 'repeater',
					'label'      => __( 'Our Process', 'themetim' ),
					'item_name'  => __( 'Item', 'themetim' ),
					'item_label' => array(
						'selector'     => "[id*='prefix-themetim-our-process-']",
						'update_event' => 'change',
						'value_method' => 'val',
					),
					'fields' => array(
						'process_title' => array(
							'type'  => 'text',
							'label' => __( 'Title', 'themetim' ),
						),
						'texteditor' => array(
							'type' => 'tinymce',
							'label' => __( '', 'themetim' ),
							'default' => '',
							'rows' => 7,
							'default_editor' => 'html',
							'button_filters' => array(
								'mce_buttons' => array( $this, 'filter_mce_buttons' ),
								'mce_buttons_2' => array( $this, 'filter_mce_buttons_2' ),
								'mce_buttons_3' => array( $this, 'filter_mce_buttons_3' ),
								'mce_buttons_4' => array( $this, 'filter_mce_buttons_5' ),
								'quicktags_settings' => array( $this, 'filter_quicktags_settings' ),
							),
						),
					),
				),
			)

		);
	}

	function get_template_name( $instance ) {
		return 'default';
	}
}

siteorigin_widget_register( 'themetim-our-process-widget', __FILE__, 'Themetim_Our_Process_Widget' );
