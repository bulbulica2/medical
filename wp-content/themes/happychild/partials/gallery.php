<?php
	$gallery = get_post_gallery( get_the_ID(), false );
	if($gallery){
		$gallery_ids = explode(',',$gallery['ids']);
?>
<div id="project_gallery" data-interval="0" class="carousel slide project" data-ride="carousel">
	<div class="carousel-inner">
		<?php $i = 0; foreach ( $gallery_ids as $attachment_id) { $i ++; ?>
			<?php
				$attachment_image = wp_get_attachment_image( $attachment_id, 'project_gallery');
				$attachment = get_post( $attachment_id );
			?>
			<div class="item<?php if ( $i == 1 ) { echo ' active'; } ?>">
				<div class="post_preview">
					<?php echo $attachment_image; ?>
				</div>
				<header>
					<div class="post_title">
						<h2><?php echo $attachment->post_excerpt; ?></h2>
					</div>
				</header>
			</div>
		<?php } ?>
	</div>
	<!-- Controls -->
	<a class="left carousel-control fa fa-chevron-left" href="#project_gallery" role="button" data-slide="prev"></a>
	<a class="right carousel-control fa fa-chevron-right" href="#project_gallery" role="button" data-slide="next"></a>
</div>
<?php } ?>