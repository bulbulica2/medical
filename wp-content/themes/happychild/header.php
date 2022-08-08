<!DOCTYPE html>
<!--[if lt IE 9]>
<html class="old-ie" <?php language_attributes(); ?>>
<![endif]-->
<!--[if gte IE 9]><!-->
<html <?php echo (!get_option('preloader'))? 'class="loading"' : '';?> <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no" />

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri()?>/js/html5.js"></script>
	<script src="<?php echo get_template_directory_uri()?>/js/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if(!get_option('preloader')){ ?>
    <div id="preloader">
        <div class="preloader"></div>
    </div>

<?php } ?>
<div class="wrapper">
	<header id="header">
		<div class="container">
			<?php
				if(plugin_status('mega_main_menu/mega_main_menu.php')){
					wp_nav_menu(
						array(
							'theme_location'  => 'primary'
						)
					);
			}else{ ?>
				<div class="top_nav">
					<nav class="navbar navbar-default" role="navigation">
						<div class="container-fluid clearfix">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_theme_mod( 'logo' ) ?> " alt="<?php bloginfo( 'name' ); ?>" /></a>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="navbar-collapse-1">
								<?php
									wp_nav_menu(
										array(
											'theme_location'  => 'primary',
											'container'       => '',
											'container_class' => '',
											'container_id'    => '',
											'menu_class'      => 'nav navbar-nav',
											'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
											'walker'          => new wp_bootstrap_navwalker()
										)
									);
								?>
								<form class="navbar-form navbar-left" action="/" method="get" role="search">
									<div class="form-group">
										<input type="text" name="s" class="form-control" placeholder="Search">
									</div>
									<button type="submit" class="btn"></button>
								</form>
							</div>
							<!-- /.navbar-collapse -->
						</div>
						<!-- /.container-fluid -->
					</nav>
				</div>
				<div class="navbar-header-2 clearfix">
					<a class="navbar-brand" href="/"><img src="<?php echo get_theme_mod( 'logo' ) ?> " alt="" /></a>
				</div>
			<?php } ?>
		</div>
	</header>
	<!--#header-->
	<div class="main">
		<div class="container">