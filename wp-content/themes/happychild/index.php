<?php
get_header();
get_template_part( 'partials/title_box' );

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'partials/loop', get_post_format() );
	}
	get_template_part( 'partials/paginate' );
} else {
	get_template_part( 'content', 'none' );
}

get_footer();