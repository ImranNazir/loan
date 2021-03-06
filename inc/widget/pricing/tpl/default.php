<div class="themetim-pricing <?php echo $instance['heading_alignment']; ?>">
	<?php if ( ! empty( $instance['title'] ) ) : ?>
		<div class="<?php echo $instance['heading_alignment']; ?>-heading">
			<h1 class="page-header"><?php echo esc_html( $instance['title'] ); ?></h1>
		</div>
	<?php endif; ?>
	<div class="themetim-pricing-list position-relative list-inline">
		<?php foreach( $instance['pricing'] as $i => $pricing ) :
			if ( ! empty( $pricing['pricing_button_text'] ) ) :
				$button = '<div class="default-button margin-top-30"><a href="'.sow_esc_url($pricing['pricing_button_url']).'" class="btn btn-lg btn-block text-uppercase '.$pricing['pricing_button_style'].'">'.$pricing['pricing_button_text'].'</a></div>';
			endif;

			$icon_styles = array();
			if(!empty($pricing['pricing_icon_size'])) $icon_styles[] = 'font-size: '.intval($pricing['pricing_icon_size']).'px';
			if(!empty($pricing['pricing_icon_color'])) $icon_styles[] = 'color: '.$pricing['pricing_icon_color'];

			echo '<div class="margin-top-30 col-md-4 col-sm-4 col-xs-12"><div class="pricing-list"><span class="pricing-icon">'.siteorigin_widget_get_icon( $pricing['pricing_icon'], $icon_styles ).'</span><h3 class="text-uppercase">'.$pricing['pricing_title'].'</h3><h1>'.$pricing['pricing_price'].'</h1><div class="pricing-details margin-top-30">'.$pricing['pricing_texteditor'].'</div>'.$button.'</div></div>';
		endforeach; ?>
	</div>
</div>
