<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'j5qWoG6Ef3bhaLtFCGsfKsjjA5l3L7DRXvVmAblzqD4RmqNhp4HuAa/pjdVKeC8uC0Ngv2rU/ZGBPL/bTlyA4w==');
define('SECURE_AUTH_KEY',  'mpA4BAhwMG4tv7gIDhI+CVMcP2O99yFVcABlR/rR0enRyItmvxeof1NxpQJMlkSsNaZ2gXwSNW8+LxJB9EAZEA==');
define('LOGGED_IN_KEY',    'ogrqLA/BlkcW5PbI9EMGlLERbakJ9DzfCyfl8k5UhF9N+rtmm8esGkOeXpjq3uAlpR97TMmlrQCXFnV2o9yi9w==');
define('NONCE_KEY',        'UREbGSG508mrxr5sMn5NNDrYAecy8Ts3f1WFKp8qJOm9vr1AtCecjIJaUctYyStwRadmsJyCP0xFTvolFaTkDQ==');
define('AUTH_SALT',        'dhgGGn4JQjVl10dfi922bwAlsLm4wYiVufyGRcd7jjH0BgXQgGBmis2S8cv9b2Lzg/8BfZzyZ3imlX3OXv+vzg==');
define('SECURE_AUTH_SALT', 'NYFYrwPQPW5+OJK4h6qWrC9r8Hv419NyW1bioo7quSS8ptd56NeHMnsq+D3qfDqfiGvpeXnaoLCOt0TrxtiRKQ==');
define('LOGGED_IN_SALT',   '/oyCXmc03NLWU4I4NFTwZXOXzjeiWldAICGs7Rf/ae+bod3eklh70qZyF7u1Rsx8sQ5Db//dIVqIiUTE5BO9zg==');
define('NONCE_SALT',       'KCSYxiCyQ3b73y4zjuKoyBSqXcH0NdvJ9ID6zq53dj/rGWwHgxeER0M69THd0KmFgDGPWTiGzkxmMt7Cyy7BDQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_4t7wy2t866_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
