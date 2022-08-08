<div class="blog_post list">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="row">

			<?php if ( has_post_thumbnail() ) { ?>
				<div class="col-md-5 col-sm-5 col-xs-12">
					<div class="post_preview">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blog_list' ); ?></a>
					</div>
				</div>
			<?php } ?>

			<div class="<?php if ( has_post_thumbnail() ) { ?>col-md-7 col-sm-7 col-xs-12<?php } else { ?>col-md-12 col-sm-12 col-xs-12<?php } ?>">

				<div class="post_title">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				</div>

				<div class="post_summary">
					<ul>
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

				<div class="post_tags">
					<?php the_tags(); ?>
				</div>

				<?php the_excerpt(); ?>

				<a class="read_more" href="<?php the_permalink(); ?>"><?php _e( 'Read more', 'happychild' ); ?></a>

			</div>
		</div>
	</div>
</div><!--blog_post-->