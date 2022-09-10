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
    <div>
      <div class="title_block <?php if(!empty($title_box)){ echo $title_box; }elseif(is_singular('product')){ echo 'shop'; }else{ echo 'style_1'; }; ?>" <?php echo $style; ?>>
        <br/>
        <h1 class="oleo-script-swash">
            <?php
            the_title();
            ?>
        </h1>
        <div class="blog-description-header">
            <?php echo get_option( 'blogdescription' ); ?>
        </div>
      </div>
      <div>

      </div>
    </div>
	<?php
	}
}
?>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Oleo Script' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Oleo Script Swash Caps' rel='stylesheet'>
<style>
  .blog-description-header {
      text-align: center; color: black; font-size: 21px;
  }
  @media (min-width:650px)  {
    .title_block {
      padding-top: 80px;
    }
  }
  @media (max-width:650px)  {
    .title_block {
      margin-top: -150px;
    }
  }
</style>
