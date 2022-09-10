<footer id="footer" class="type_2">
    <div class="container">
        <?php get_sidebar( 'footer' ); ?>
        <?php $socialButtons = get_option( 'socials' ); ?>
        <?php if ( ! empty( $socialButtons ) ): ?>
            <div class="bottom_socials text-left">
                <?php foreach ( $socialButtons as $buttonKey => $buttonUrl ): if ( empty( $buttonUrl ) ) {
                    continue;

                }
                    if( $buttonKey == 'instagram' || $buttonKey == 'google' ){
                        $class = 'fa fa-'.$buttonKey;
                    }else{
                        $class = 'fa fa-'.$buttonKey.'-square';
                    }
                    ?>
                    <a href="<?php echo $buttonUrl; ?>" target="_blank" class="social_button"><i class="<?php echo $class; ?>"></i><b><?php echo $buttonKey ?></b></a>
                <?php endforeach; ?>
            </div><!--social_icons-->
        <?php endif; ?>
        <?php $footer = get_option( 'footer' ); ?>
        <?php if ( ! empty( $footer['copyright'] ) ) { ?>
            <div class="copyrights text-align-center">
                <?php echo $footer['copyright']; ?>
            </div>
        <?php } ?>
    </div>
</footer>