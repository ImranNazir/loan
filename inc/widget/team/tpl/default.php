<div class="themetim-team-widget team-list <?php echo $instance['heading_alignment']; ?>">
	<?php if ( ! empty( $instance['title'] ) ) : ?>
		<div class="<?php echo $instance['heading_alignment']; ?>-heading">
			<h1 class="page-header"><?php echo esc_html( $instance['title'] ); ?></h1>
		</div>
	<?php endif; ?>
	<div class="row">
		<?php foreach( $instance['team'] as $i => $team ) : ?>
			<div class="themetim-team-list margin-top-30 col-md-<?php echo esc_attr( $instance['per_row'] ); ?> col-sm-<?php echo esc_attr( $instance['per_row'] ); ?> col-xs-12">
				<div class="themetim-team-member">
					<?php
					$profile_picture = $team['profile_picture'];
					$profile_picture_fallback = $team['profile_picture_fallback'];
					$image_details = siteorigin_widgets_get_attachment_image_src(
						$profile_picture,
						'',
						$profile_picture_fallback
					);
					if ( ! empty( $image_details ) ) {
						echo '<img src="' . esc_url( $image_details[0] ) . '" class="img-responsive center-block" />';
					}
					if ( ! empty( $team['team_title'] ) ) : ?>
						<h4 class="margin-top-20"><span><?php echo esc_html( $team['team_title'] ); ?></span></h4>
					<?php endif;
					if ( ! empty( $team['team_price'] ) ) : ?>
						<p><span><?php echo esc_html( $team['team_price'] ); ?></span></p>
					<?php endif; ?>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
