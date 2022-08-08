<?php

$tags = wp_get_post_tags( get_the_ID(), array( 'fields' => 'ids' ) );

if ( ! empty( $tags ) ):

	$args = array(
		'tag__in'        => $tags,
		'post__not_in'   => array( get_the_ID() ),
		'posts_per_page' => 4, // Number of related posts to display.
	);

	$relatedPosts = new WP_Query( $args );
	if ( $relatedPosts->have_posts() ):
		?>
		<div class="related_posts">
			<h3 class="block_title"><?php _e( 'Related posts', 'happychild' ); ?></h3>

			<div id="related_posts" data-interval="0" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<?php $i = 0;
					while ( $relatedPosts->have_posts() ) {
						$relatedPosts->the_post();
						$i ++; ?>
						<div class="item<?php if ( $i == 1 ) {
							echo ' active';
						} ?>">
							<div class="blog_post list">
								<div class="row">
									<header>
										<div class="post_title">
											<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
										</div>
									</header>
									<?php if ( has_post_thumbnail() ) { ?>
										<div class="col-md-5 col-sm-5 col-xs-12">
											<div class="post_preview">
												<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blog_list' ); ?></a>
											</div>
										</div>
									<?php } ?>
									<div class="<?php if ( has_post_thumbnail() ) { ?>col-md-7 col-sm-7 col-xs-12<?php } else { ?>col-md-12 col-sm-12 col-xs-12<?php } ?>">
										<?php if (has_post_thumbnail()){ ?>
										<div class="post_info"><?php } ?>
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
											<p><?php echo mb_substr( get_the_excerpt(), 0, 130 ); ?></p>
											<a class="read_more" href="<?php the_permalink(); ?>"><?php _e( 'Read more', 'happychild' ); ?></a>
											<?php if (has_post_thumbnail()){ ?></div><?php } ?>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
				<!-- Controls -->
				<a class="left carousel-control fa fa-chevron-left" href="#related_posts" role="button" data-slide="prev"></a>
				<a class="right carousel-control fa fa-chevron-right" href="#related_posts" role="button" data-slide="next"></a>
			</div>
		</div>
	<?php endif; ?>
	<?php wp_reset_query(); ?>
<?php endif; ?>
