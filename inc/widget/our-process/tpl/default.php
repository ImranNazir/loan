<div class="themetim-our-process-widget <?php echo $instance['heading_alignment']; ?>">
	<?php if ( ! empty( $instance['title'] ) ) : ?>
		<div class="<?php echo $instance['heading_alignment']; ?>-heading margin-bottom-30 overflow">
			<h1 class="page-header"><?php echo esc_html( $instance['title'] ); ?></h1>
		</div>
	<?php endif; ?>
	<div class="themetim-our-process-list our-process-list overflow margin-top-20">
		<ul class="column position-relative overflow list-inline">
			<?php foreach( $instance['process'] as $i => $process ) :
				echo '<li><div class="timeline"><h3><span>'.$process['process_title'].'</span></h3><div>'.$process['texteditor'].'</div></div></li>';
			endforeach; ?>
		</ul>
	</div>
</div>
