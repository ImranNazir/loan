<?php
/**
 * Team widget.
 *
 * @package themetim
 */

class Themetim_Team_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'themetim-team-widget',
			__( 'ThemeTim Team Widget', 'themetim' ),
			array(
				'description' => __( 'Team Widget', 'themetim' ),
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
					'label' => __( 'Title', 'themetim' ),
				),
				'team' => array(
					'type'       => 'repeater',
					'label'      => __( 'Team', 'themetim' ),
					'item_name'  => __( 'Item', 'themetim' ),
					'item_label' => array(
						'selector'     => "[id*='prefix-themetim-team-']",
						'update_event' => 'change',
						'value_method' => 'val',
					),
					'fields' => array(
						'team_title' => array(
							'type'  => 'text',
							'label' => __( 'Name', 'themetim' ),
						),
						'team_price' => array(
							'type'  => 'text',
							'label' => __( 'Title', 'themetim' ),
						),
						'profile_picture' => array(
							'type'     => 'media',
							'library'  => 'image',
							'label'    => __( 'Image', 'themetim' ),
							'fallback' => true,
						),
					),
				),
				'per_row' => array(
					'type'    => 'select',
					'label'   => __( 'Team per row', 'themetim' ),
					'default' => 3,
					'options' => array(
						'12' => 1,
						'6' => 2,
						'3' => 3,
						'4' => 4,
					),
				),
			)
		);
	}

	function get_template_name( $instance ) {
		return 'default';
	}
}

siteorigin_widget_register( 'themetim-team-widget', __FILE__, 'Themetim_Team_Widget' );
