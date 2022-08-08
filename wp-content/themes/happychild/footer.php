</div> <!--.container-->
</div> <!--.main-->
	<?php
        if( get_option( 'footer_type' ) == 'type_2' ) {
            get_template_part( 'partials/footer_2' );
        }else{
            get_template_part( 'partials/footer_1' );
        }
    ?>
</div> <!--.wrapper-->
<?php 
	if( get_option( 'live_customizer' ) ){
		echo get_template_part('partials/customizer');
	}
?>
<?php echo get_theme_mod( 'google_analytics_script' ); ?>
<?php wp_footer(); ?>
<script type="text/javascript">
    jQuery(function($){
        var hash = location.hash;
        if(hash){
            jQuery('html,body').animate({
                scrollTop: $(hash).offset().top + -90
            }, 600);
            $('li.menu-item.current-menu-item').removeClass('current-menu-item');
            $('li.menu-item a[href="'+hash+'"]').closest('li.menu-item').addClass('current-menu-item');
        }

        $(".menu-item a[href*=#]:not([href=#])").live('click',function () {
            var href = $(this).attr('href');
             if(($(href).length > 0)){
                jQuery('html,body').animate({
                    scrollTop: $(href).offset().top - 90
                }, 600);
                $('li.menu-item.current-menu-item').removeClass('current-menu-item');
                $('li.menu-item a[href="'+href+'"]').closest('li.menu-item').addClass('current-menu-item');
            }else{
                location.href = '<?php echo home_url(); ?>/'+href;
            }
            return false;
        });

    });
</script>
</body>
</html>