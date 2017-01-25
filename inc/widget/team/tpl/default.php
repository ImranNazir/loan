<?php if ( ! empty( $instance['title'] ) ) : ?>
	<?php echo $args['before_title'] . esc_html( $instance['title'] ) . $args['after_title'] ?>
<?php endif; ?>
<?php if ( ! empty( $instance['sub_title'] ) ) : ?>
	<h4 class="widget-sub-title"><?php echo esc_html( $instance['sub_title'] ); ?></h4>
<?php endif; ?>
<div class="row">
<?php foreach( $instance['menus'] as $i => $menu ) : ?>

<div class="themetim-menus-list col-md-<?php echo esc_attr( $instance['per_row'] ); ?> col-sm-<?php echo esc_attr( $instance['per_row'] ); ?> col-xs-12">
		<div class="themetim-menus-member">
				<div class="themetim-image-container">
					<?php
					$profile_picture = $menu['profile_picture'];
					$profile_picture_fallback = $menu['profile_picture_fallback'];
					$image_details = siteorigin_widgets_get_attachment_image_src(
						$profile_picture,
						'thumbnail',
						$profile_picture_fallback
					);
					if ( ! empty( $image_details ) ) {
						echo '<img src="' . esc_url( $image_details[0] ) . '" class="img-circle" />';
					}
					?>
				</div><!-- .themetim-image-container -->
				<div class="themetim-info-container">
					<div class="">
						<?php if ( ! empty( $menu['menu_title'] ) ) : ?>
							<h4><span><?php echo esc_html( $menu['menu_title'] ); ?></span></h4>
						<?php endif; ?>
						<?php if ( ! empty( $menu['menu_price'] ) ) : ?>
							<p><span><?php echo esc_html( $menu['menu_price'] ); ?></span></p>
						<?php endif; ?>
					</div>
					<?php if ( ! empty( $menu['texteditor'] ) ) : ?>
						<div class="menu-details"><?php echo  $menu['texteditor'] ; ?></div>
					<?php endif; ?>
				</div><!-- .themetim-info-container -->
			</div>
	</div>

<?php endforeach; ?>
	</div>
