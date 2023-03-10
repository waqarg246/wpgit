<?php

function initCors( $value ) {
    $origin = get_http_origin();
    $allowed_origins = [ 'localhost:3000' ];
    if ( $origin && in_array( $origin, $allowed_origins ) ) {
      header( 'Access-Control-Allow-Origin: ' . esc_url_raw( $origin ) );
      header( 'Access-Control-Allow-Methods: GET' );
      header( 'Access-Control-Allow-Credentials: true' );
    }
    return $value;
}

function my_setup_theme_function () {

        // WP INITIALIZING REQUEST
    add_action( 'wp_ajax_nopriv_get_request', 'get_request' );
    add_action( 'wp_ajax_get_request', 'get_request' );
    function get_request() {
        header( 'Access-Control-Allow-Origin: ' . esc_url_raw( "localhost:3000" ) );
        header( 'Access-Control-Allow-Methods: POST' );
        header( 'Access-Control-Allow-Credentials: true' );
        wp_send_json_success( 'It works' );
    }

}
add_action("after_setup_theme",'my_setup_theme_function');

initCors("localhost:3000");