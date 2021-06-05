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
define( 'AUTH_KEY',         'aID=A34;T*>8^axY8 s(Zlae.s`s$qhZ*GPK%!#i%PJ_/}!CG 1E@2@<O,iG9jS3' );
define( 'SECURE_AUTH_KEY',  'Adbn(0_D{)2%7>v#6z^v|N?%7x2b!zelNMWn[d}n-V8}fi3K18#TbLTX8_8Zu/_k' );
define( 'LOGGED_IN_KEY',    'wNjRls/DP0GfAra&rB{OdM yYyGgF% ;?+`.34$HzL%uufp26xa6C)U-[J+jWm.$' );
define( 'NONCE_KEY',        '=Z7D.DWw!9{l8T-L0^hEL1=[dj=ipdT>r|!a1_F ~m2X1os#VxMbVR~@Uve#Xerp' );
define( 'AUTH_SALT',        'ndx>)>4<I8z2uvTWpnhEReG}d4H%*K3E|]kZ`s9SGFO^8Q__ =fm5D&u^|MdHZ{v' );
define( 'SECURE_AUTH_SALT', 'efX#AEm$+qpi@ZD#w(Rc&j#kBJZIBk+-er92AE>?XSG?g) 1^jrnqRRme^/MZ!c,' );
define( 'LOGGED_IN_SALT',   'g@D[Tw*Sj8MU7oMZWlki(r>sM*H6]%uGVaEiZY0#~Be*2tq<Qrrw_jHz;A7;q;U0' );
define( 'NONCE_SALT',       '}dv(P&c=)b0DX*r^q<K<mB5I>(30)!xS1kx1I[:$q sYKegPBC4Qh=Bsz0SOmt]H' );

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
