<?php if ( is_active_sidebar( 'footer' ) ) { ?>

    <?php $widget_areas = get_theme_mod( 'stm_widget_areas' ); ?>
    <?php if ( $widget_areas != 'disabled' ) { ?>

        <div class="row">
            <div class="widgets footer_widgets <?php echo 'cols_' . esc_attr( $widget_areas ); ?> clearfix">
                <?php dynamic_sidebar( 'footer' ); ?>
            </div>
        </div>

    <?php } ?>

<?php } ?>