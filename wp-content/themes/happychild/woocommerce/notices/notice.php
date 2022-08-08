<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! $messages ) return;
?>

<?php foreach ( $messages as $message ) : ?>
	<div class="alert alert-dismissible alert-warning">
		<button data-dismiss="alert" type="button" class="close">
			<i class="fa fa-times"></i><span class="sr-only">Close</span></button>
		<i class="fa fa-exclamation-triangle"></i><?php echo wp_kses_post( $message ); ?>
	</div>
<?php endforeach; ?>