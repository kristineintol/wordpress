<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'laravels' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'x)G$N-;YT8%Plb?qS|j3W>2[T7*uHE9M,Eq:gADHL&=%jMupPUJJ6iQm4|~x6K%~' );
define( 'SECURE_AUTH_KEY',  '5^2klZUAJ&B,<R#:u3bxXto({a_/.amwj=W@l!$^2CVL36VvXF. oBe!*ttM56AX' );
define( 'LOGGED_IN_KEY',    '!sM+c?!n[h:SOP98jB%kbw16rMp:;N] ,92YH_l#Wf)6] $;/LKD2G27ArRYtWKc' );
define( 'NONCE_KEY',        '(uUUi@`/+t&wTp =XCyHkQgL^dU8lIGb@2_K J&a(.)r@+H7bdjweo|uH@lek]pl' );
define( 'AUTH_SALT',        '<0_Oo}$H20lz/`r&})(pG]ycnV?Q7>pk#3]AdUcQo0 ]d<KMdDBss8.?{gA5rgvG' );
define( 'SECURE_AUTH_SALT', 'n7sO<K[^s@dmE9AxK#:p3^fOww&Ay[X,6,WytC[Fz8`j9;NOZ@-U}1&tYQVT28*w' );
define( 'LOGGED_IN_SALT',   '3fa8EDfw=MDGOrbUYPA*[MZpd@0VS)HN,$K}uT-n`ydgpDl+;aJLSM`?D!*oGJ(-' );
define( 'NONCE_SALT',       '<MSCw[:^wVI;XXXK{N.EUJZax@wNR$uwsXNH1UaPl0jpm:?8!t?(xJE]$/u{IJ$X' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
