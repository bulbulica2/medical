<?php
$args['list_tpl'] = '<ol class="breadcrumb">%s</ol>';
$args['text'] = array(
    'home'      => __( 'Home', 'happychild' ),
    'category'  => __( 'Category archive "%s"', 'happychild' ),
    'search'    => __( 'Search results for "%s"', 'happychild' ),
    'tag'       => __( 'Tag "%s"', 'happychild' ),
    'author'    => __( 'Author Archives: %s', 'happychild' ),
    'not_found' => __( 'Page not found', 'happychild' ),
    'paged'     => __( 'Page %s', 'happychild' ),
    'blog'      => __( 'Blog', 'happychild' ),
);
Stm_breadcrumbs::breadcrumbs( $args );
?>