<?php
if ( is_archive() ) {
	?>
	<div class="title_block shop">
		<h1><?php echo post_type_archive_title(); ?></h1>
	</div>
<?php
} else {
	$title_box    = get_post_meta( get_the_ID(), 'title_box', true );
	$image_url    = get_post_meta( get_the_ID(), 'title_block_image', true );
	$image_repeat = get_post_meta( get_the_ID(), 'title_block_image_repeat', true );
	if ( $title_box != 'hidden' ) {
		$style = '';
		if ( $title_box == 'custom_image' ) {
			$style .= 'style="';
			$style .= "background-image: url('" . wp_get_attachment_url( $image_url ) . "');";
			$style .= "background-repeat: " . $image_repeat . ";";
			$style .= '"';
		}
		?>
		<div class="title_block <?php if(!empty($title_box)){ echo $title_box; }elseif(is_singular('product')){ echo 'shop'; }else{ echo 'style_1'; }; ?>" <?php echo $style; ?>>
			<h1>
				<?php
				if ( is_home() ) {
					echo __( 'Latest Posts', 'happychild' );
				} else {
					the_title();
				}
				?>
			</h1>
		</div>
	<?php
	}
}
?>