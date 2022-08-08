<article <?php post_class(); ?>>
	<div class="blog_post">

		<div class="post_summary">
			<ul class="clearfix">
				<li>
					<div class="post_author"><?php the_author(); ?></div>
				</li>
				<li>
					<div class="post_date"><?php echo get_the_date( 'd F Y' ); ?></div>
				</li>
				<li>
					<?php if ( get_comments_number() ) { ?>
						<div class="post_comments">
							<a href="<?php the_permalink(); ?>#comments"><?php echo get_comments_number() ?> <?php _e( 'comments', 'happychild' ); ?></a>
						</div>
					<?php } else { ?>
						<div class="post_comments"><?php echo get_comments_number() ?> <?php _e( 'comments', 'happychild' ); ?></div>
					<?php } ?>
				</li>
			</ul>
		</div>
		<?php if ( has_post_thumbnail() ) { ?>
			<div class="post_preview">
				<?php the_post_thumbnail(); ?>
			</div>
		<?php } ?>
		<div class="content_block">
			<?php
				the_content();
				wp_link_pages( array(
					'before'      => '<div class="page-links clearfix">',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>'
				) );
			?>

		</div>
	</div>
	<!--blog_post-->
	<div class="post_tags">
		<?php the_tags(); ?>
	</div>
	<?php get_template_part( 'partials/share' ); ?>
	<?php if( get_the_author_meta( 'description' ) ){ ?>
		<div class="about_author clearfix">
			<div class="author_avatar">
				<?php echo get_avatar( get_the_author_meta( 'email' ), 216 ); ?>
			</div>
			<div class="author_info">
				<div class="author_name"><?php _e( 'About the Author: ', 'happychild' );
					the_author(); ?></div>
				<div class="author_content"><?php echo get_the_author_meta( 'description' ); ?></div>
			</div>
		</div>
	<?php } ?>
	<?php
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
	?>
	<?php get_template_part( 'partials/related', 'posts' ); ?>


</article>