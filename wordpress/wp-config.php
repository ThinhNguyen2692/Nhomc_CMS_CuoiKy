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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '~y_z^ZG_m]2arnd;zbv|WQl&C(u&`4YFLj |a)ul Ab*iv]h*,opEG}QD_[409Yx' );
define( 'SECURE_AUTH_KEY',  '-/y z!|vn|QJ_ps&lr1 G;ZKZ7|`+m=-[B=LUf]m%~&;eT;@0Q qvS`79f1KvYqI' );
define( 'LOGGED_IN_KEY',    'r;;1:%m tnbFoN36mH/Q^Sp &S$~#Rqu:ELkZW;` (R[gltR?MahznoHw_iq@3]d' );
define( 'NONCE_KEY',        'A,[7`zoV}DO=9;?6/R[5K;oIQvwV,j!+M ygowJ,$|8S:#fGiG[NcL~N|H4{GSq+' );
define( 'AUTH_SALT',        '5+Jw!/7KV1M)CuoeuX],du}W&t-a=wYv*1j1<)@No1(Q($o~S$@9S<XD2nOClouU' );
define( 'SECURE_AUTH_SALT', ';+`tZ2krwze~0Y/<>z#qdM1P~kB&%07c,Sbx+~Rv?v!z,O;y3j!*dR/GE,aB18hQ' );
define( 'LOGGED_IN_SALT',   'Pu9Rn#@? )R1M3qT;xR!qMm4T[&QI@nuyq&%$C{/kQ 8g5k*U`kMf-?^DO?! $zF' );
define( 'NONCE_SALT',       'V{&]ipWF#QX3Q9:,$-*EQ:(!vn4U3k WFTQnBg9a< )=T]5V4q6s^9CK]^mpOQiF' );

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
