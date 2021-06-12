<?php
/**
 * Database connection test script for WordPress
 *
 * Parses the wp-config.php file for DB connection information and tests
 * a mysql connection to the DB server and selection of the database.
 *
 * Place this file in the same directory as wp-config.php
 *
 * This script can be run from the command line:
 * php /path/to/wp-mysql-test.php
 *
 * This script can also be called in a browser as long as the wp-config.php
 * file is in a web accessible directory.
 *
 */



header( 'Content-Type: text/plain' );

$wpconfig = dirname( __FILE__ ) . '/wp-config.php';

if ( ! file_exists( $wpconfig ) )
	die( "wp-config.php file cannot be found, please place this script in the same directory as wp-config.php.\n" );

if ( file_exists( dirname( dirname( __FILE__ ) ) . '/wp-config.php' ) && ! file_exists( dirname( dirname( __FILE__ ) ) . '/wp-settings.php' ) )
	printf( "There appears to be a wp-config.php file at %s which is\nnot part of a WordPress installation, but can be read by WordPress. Perhaps\nthe wp-config.php file at %s isn't needed?\n\n", dirname( dirname( __FILE__ ) ) . '/wp-config.php', $wpconfig );

// Tests reading from the Filesystem
$contents = file_get_contents( $wpconfig );

//Check that the contents of the file is not blank

@$link = mysql_connect( '192.168.8.179', 'fw3360770887', 'xSRUrR1nwzxuJ8hGmfSGPcq30iYvs0' );
if ( ! $link ) {
	die( sprintf( "Could not connect to the MySQL server: %s\n", mysql_error() ) );
}
echo "Connected successfully to the MySQL server\n";

@$db_selected = mysql_select_db( db6399373757_staging, $link );
if ( ! $db_selected ) {
	die ( sprintf( "Could not select the database '%s': %s\n", 'db6399373757_staging',  mysql_error() ) );
}
echo "Database selected successfully\n";

echo "\nChecking tables for errors:\n";
$tables = mysql_query( "SHOW TABLES LIKE 'wp_4t7wy2t866_%'" );
while ( $table = mysql_fetch_array( $tables, MYSQL_NUM ) ) {
	$status = mysql_fetch_row( mysql_query( "CHECK TABLE `{$table[0]}`" ) );
	$message = sprintf( 'The table %s is', $status[0] );
	if ( $status[3] != 'OK' ) {
		printf( "\n%s NOT OK. Error: %s\n", $message, $status[3] );
	} else {
		printf( "%s OK\n", $message );
	}
}

mysql_close( $link );
