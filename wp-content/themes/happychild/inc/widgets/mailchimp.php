<?php

class Stm_Mailchimp_Widget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            'mailchimp', // Base ID
            __( 'MailChimp', 'happychild' ), // Name
            array( 'description' => __( 'MailChimp widget', 'happychild' ), ) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );

        echo $args['before_widget'];
        if ( ! empty( $title ) ) {
            echo $args['before_title'] . $title . $args['after_title'];
        }

        $html = '';

        if(get_theme_mod('mailchimp_api_key') && get_theme_mod('mailchimp_list_id')){
            $html .= '<form action="/" id="stm_subscribe_' . time() . '">';
            $html .= '<div class="form-group">';
            $html .= '<input type="email" placeholder="'. __( 'Email', 'happychild' ) .' *" id="stm_subscribe_email_' . time() . '" name="email" class="form-control" required/>';
            $html .= '</div>';
            $html .= '<button class="btn btn-danger btn-sm">' . __( 'Subscribe', 'happychild' ) . '</button>';
            $html .= '</form>';
            $html .= '
			<script type="text/javascript">
				jQuery(document).ready( function($){
					$("#stm_subscribe_' . time() . '").on(\'submit\', function () {
				        $.ajax({
				            type: \'POST\',
				            data: \'action=stm_subscribe&email=\' + $("#stm_subscribe_email_' . time() . '").val(),
				            dataType: \'json\',
				            url: ajaxurl,
				            context: $(this),
				            success: function (json) {
				                if (json[\'success\']) {
				                    $("#stm_subscribe_' . time() . '").replaceWith(\'<div class="success_message">\' + json[\'success\'] + \'</div>\');
				                }
				                if (json[\'error\']) {
				                    alert(json[\'error\']);
				                }
				            }
				        });

				        return false;
				    });
				})
			</script>
		';
        }else{
            $html .= __('Error API', 'happychild');
        }

        echo $html;


        echo $args['after_widget'];
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {

        if ( isset( $instance['title'] ) ) {
            $title = $instance['title'];
        } else {
            $title = __( 'Newsletter', 'happychild' );
        }


        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'happychild' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <?php _e('To setup this widget please follow this <a href="'.get_admin_url( '', 'customize.php' ).'">link</a>', 'happychild'); ?>
        </p>
    <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance                     = array();
        $instance['title']            = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

        return $instance;
    }

}

function register_mailchimp_widget() {
    register_widget( 'Stm_Mailchimp_Widget' );
}

add_action( 'widgets_init', 'register_mailchimp_widget' );