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
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

	<title>Pediclinique Programari</title>

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
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="nav-header-image" src="<?php echo get_theme_mod( 'logo' ) ?> " alt="<?php bloginfo( 'Pediclinique'); ?>" />
        </a>
				<div class="navbar-header-2 clearfix">
					<a class="navbar-brand" href="/"><img src="<?php echo get_theme_mod( 'logo' ) ?> " alt="" /></a>
				</div>
			<?php } ?>
		</div>
	</header>
	<!--#header-->
	<div class="main">
		<div class="container">

<style>
  .nav-header-image {
    width: 150px;
    height: 150px;
    padding: 10px;
    margin: auto;
    display: block;
  }
  .title_block h1 {
      background: inherit;
  }
  .navbar-brand {
      color: black;
  }
  .title_block.style_1 {
    background-image: none;
    color: #c56eac;
  }
</style>