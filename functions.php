<?php 
//bw_backtrace();
/**
 * return a nice SEO title
 * taking into account which plugins are being used
 */
if ( !function_exists( 'bw_wp_title' )) {
  function bw_wp_title() {
    if ( class_exists( 'WPSEO_Frontend' )) {
      $title = wp_title('', false );
    }else {
      $title = wp_title( '|', false, 'right' ); 
      $title .= get_bloginfo( 'name' );
    }
    return $title;
  }
}

if ( !function_exists( 'bw_wp_head')) {

  function bw_wp_head( $atts = NULL ) {
    $atts['prefix'] = 'Call us now';
    echo bw_tel( $atts );
     }
}

