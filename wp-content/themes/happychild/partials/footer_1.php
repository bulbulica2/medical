<footer id="footer">
    <div class="container">
        <div class="row">
            <?php $footer = get_option( 'footer' ); ?>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <?php if ( ! empty( $footer['copyright'] ) ) { ?>
                    <div class="copyrights">
                        <?php echo $footer['copyright']; ?>
                    </div>
                <?php } ?>
                <div class="bottom_menu">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location'  => 'secondary',
                            'container'       => '',
                            'container_class' => '',
                            'container_id'    => ''
                        )
                    );
                    ?>
                </div>
            </div>
            <?php $socialButtons = get_option( 'socials' ); ?>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <?php if ( ! empty( $socialButtons ) ): ?>
                    <div class="bottom_socials text-right">
                        <?php foreach ( $socialButtons as $buttonKey => $buttonUrl ): if ( empty( $buttonUrl ) ) {
                            continue;
                        } ?>
                            <a href="<?php echo $buttonUrl; ?>" target="_blank" class="social_button <?php echo $buttonKey ?>"><i class="fa fa-<?php echo $buttonKey ?>"></i><b><?php echo $buttonKey ?></b></a>
                        <?php endforeach; ?>
                    </div><!--social_icons-->
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>