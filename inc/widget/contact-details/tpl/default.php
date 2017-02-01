<div class="themetim-contact-details <?php echo $instance['heading_alignment']; ?>">
	<?php if ( ! empty( $instance['title'] ) ) : ?>
		<div class="<?php echo $instance['heading_alignment']; ?>-heading">
			<h1 class="page-header"><?php echo esc_html( $instance['title'] ); ?></h1>
		</div>
	<?php endif; ?>
	<div class="contact-details position-relative">
		<?php foreach( $instance['contact_details'] as $i => $contact_details ) :
			$icon_styles = array();
			if(!empty($contact_details['icon_size'])) $icon_styles[] = 'font-size: '.intval($contact_details['icon_size']).'px';
			if(!empty($contact_details['icon_color'])) $icon_styles[] = 'color: '.$contact_details['icon_color'];

			echo '<div class="margin-top-20 col-md-4 col-sm-4 col-xs-12"><div class="contact-list"><span class="contact-icon">'.siteorigin_widget_get_icon( $contact_details['icon'], $icon_styles ).'</span><h4 class="text-capitalize margin-top-30">'.$contact_details['title'].'</h4><div class="contact-details margin-top-20">'.$contact_details['texteditor'].'</div></div></div>';
		endforeach; ?>
	</div>
</div>
