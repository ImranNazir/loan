<?php
/**
 * Contact Details widget.
 *
 * @package themetim
 */

class Themetim_Contact_Details_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'themetim-contact-details-widget',
			__( 'ThemeTim Contact Details Widget', 'themetim' ),
			array(
				'description' => __( 'Contact Details', 'themetim' ),
			),
			array(),

			array(
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
				'title' => array(
					'type'  => 'text',
					'label' => __( 'Heading', 'themetim' ),
				),

				'contact_details' => array(
					'type'       => 'repeater',
					'label'      => __( 'Contact Details', 'themetim' ),
					'item_name'  => __( 'Item', 'themetim' ),
					'item_label' => array(
						'selector'     => "[id*='prefix-themetim-contact-details-']",
						'update_event' => 'change',
						'value_method' => 'val',
					),
					'fields' => array(
						'icon' => array(
							'type' => 'icon',
							'label' => __('Select an icon', 'themetim'),
						),
						'icon_size' => array(
							'type' => 'number',
							'label' => __( 'Icon Size', 'themetim' ),
							'default' => '40'
						),
						'icon_color' => array(
							'type' => 'color',
							'label' => __( 'Icon Color', 'themetim' ),
							'default' => '#373c5f'
						),
						'title' => array(
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

siteorigin_widget_register( 'themetim-contact-details-widget', __FILE__, 'Themetim_Contact_Details_Widget' );
