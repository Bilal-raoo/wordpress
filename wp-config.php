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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mock' );

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
define( 'AUTH_KEY',         'F/VwS6RXVLd5J<$?`%G,YOKJV113$kHWBRS$l-`x&w:Sn;)9*8+O>]iBJncW2r7b' );
define( 'SECURE_AUTH_KEY',  '#Z}IZmGr/XER)VZ`&+)jk61Nz@_~a/~O7V/DEN}pkej=k-2bnNb+teyLz)Rf~F1q' );
define( 'LOGGED_IN_KEY',    '6NKL4vK`EuJ*-o-g%E 6FeT,{&a]7J_wyh2Wd{Slv9@_z38TGD>[sdU7?~XL->V,' );
define( 'NONCE_KEY',        '_&16MmLo8gTbQ)0jiN[)$tx^S}xSo6D^<=0|4nsi&~I#Cy^o&a{ln@f]6UBE<E/M' );
define( 'AUTH_SALT',        'p>!0@>]BS}DyUlRLhT;>gW%kZE[2JHC}uue] JG>_*<=V4}Q?5MSqo#8l@$W!{oK' );
define( 'SECURE_AUTH_SALT', '[HCB-b-I3(Zw%JHi&HNN?!|U#W:V!TP@ _/H:EZFi~B}+I6U,@Yj.M,ljd8OrUPt' );
define( 'LOGGED_IN_SALT',   '[I|@toM4LX6F0CB&x(yP6inyRJ}FF7xA})8_YtyW}bv|wN<Enc*&Dk]{l2Z%46S!' );
define( 'NONCE_SALT',       'jQhH6)RP%W%tjSkkAh0I&u/*%n])dU.|k:z.=h|/lxC+HM}9ADxOm}5Fs0^bj_M-' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
