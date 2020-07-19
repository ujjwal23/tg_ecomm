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
define( 'DB_NAME', 'ecomm' );

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
define( 'AUTH_KEY',         '8,UOC=xPD&rF{QIT.IoZV{T$-@D[SOf~q~s?4c)S3/fV@`|7I`s+Z`^y/Vxp}YCQ' );
define( 'SECURE_AUTH_KEY',  'f<8v=i#3rqxo}OQYVn~661,$.#B(+y8(Z^0r;lAQ#kp|lo~n:cl6#w,]XjXJsE=7' );
define( 'LOGGED_IN_KEY',    'v=UX-TvtBY_N#y83[g?Dmw(zs-HCJIC Oj~%TDVT@f8vkk&64JEqz3buZI-hdmW]' );
define( 'NONCE_KEY',        'JS;6`ZGw`RhP-Rd/C4](L_T;]fdi-TTQL4{J*<tQg,N<KwvX`%w^b!#OKau9_S?W' );
define( 'AUTH_SALT',        '/,SG$Lk5rS!7&!A4o~NpXqBK<T8B@:.ARHi|,?}05*rzq?{A4F%5}C)FH+]!LENo' );
define( 'SECURE_AUTH_SALT', 'bR{h-yTNLB>HZEL@CdvQGC:YA<N/oElH=*ZbVSYL80e#Uoyo6ls+^$p0[SEAc_sO' );
define( 'LOGGED_IN_SALT',   'UgzG3[oX7+L.w|2fQ,=Hz@&wW1hS@F5!o*q@]!(<0,<CAQ5eX4knh{!!| Wus)GS' );
define( 'NONCE_SALT',       'mQjB~D+=0qhI^/*T-]Y./peS7NGa*sF09W@#Q=9 G635K6VGPx]2hz60_H|PB}Q4' );

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
