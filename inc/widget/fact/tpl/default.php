<div class="themetim-fact-widget fact-list <?php echo $instance['heading_alignment']; ?>">
	<?php if ( ! empty( $instance['title'] ) ) : ?>
		<div class="<?php echo $instance['heading_alignment']; ?>-heading margin-bottom-30">
			<h1 class="page-header"><?php echo esc_html( $instance['title'] ); ?></h1>
		</div>
	<?php endif; ?>
	<ul class="themetim-fact-list fact-list position-relative list-inline">
		<?php foreach( $instance['fact'] as $i => $fact ) :
			echo '<li><div class="fact-inner"><h1><span>'.$fact['menu_title'].'</span></h1><div>'.$fact['texteditor'].'</div></div></li>';
		endforeach; ?>
	</ul>
</div>
