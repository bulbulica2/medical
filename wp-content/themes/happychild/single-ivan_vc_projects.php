<?php
get_header();
get_template_part( 'partials/title_box' );
?>
<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			get_template_part( 'partials/project', get_post_format() );
		endwhile;
		posts_nav_link();

	else :
		get_template_part( 'content', 'none' );
	endif;
?>

<?php get_footer(); ?>