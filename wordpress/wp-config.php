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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'u6Q/%!H}segp_XTUougl]B#unA!b<$xW4vX0D{~GJSIJ1~_.z^vN#dhS0EON&k2v' );
define( 'SECURE_AUTH_KEY',  'G%R#(MrQ!@`Q9*;F70!TIDONm`V&{rD@g;nGzqi<WkmL DD3gKLNc~=#7mBA!u-`' );
define( 'LOGGED_IN_KEY',    'tmb]fF5ppX7{BSad:eL.7IPVKiyN>Z1VHY1IcP,b7T5UK1|Y ?jU-#W8wK5 P 5P' );
define( 'NONCE_KEY',        ']{=<IC81U>TOX)ajU$Sv;s|VL `gp1w9`fW%{R)b{Bu|edK@,eN*i /y`:V{,d0}' );
define( 'AUTH_SALT',        '7S{kc15SaLX4_(lh}:EyptQs?3Yy]FY,oGI}!NI7F4!d3ZI;3+<9&cmN;`n-LLyy' );
define( 'SECURE_AUTH_SALT', 'K~ ,U-A;6{rdP;![I @-?Y:u8q ,Dm9ENPb;E zmS.ikM+;K`euFLv@5;oTXM+VZ' );
define( 'LOGGED_IN_SALT',   '?M/B25qU38r4ulP5J7>8+`k6A Tv`uI)GhB8~DLZEs&p-2uD3w5/EN1c]?>ILxV ' );
define( 'NONCE_SALT',       ')wY}_W+2BRTpu(Aym]B6YD%&6)*kP@0H[5FJ&StT?uxe5%5oHNyu|gGHhmsZ=c|4' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
