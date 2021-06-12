<?php
/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/.wordpress/wp-blog-header.php' );

$value = wp_cache_flush();

if ( false === $value ) {
        wp_die("Failed to flush object cache\n\n");
}
echo("Successfully flushed object cache\n\n");

