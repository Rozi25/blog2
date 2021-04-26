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
define( 'DB_NAME', 'test1' );

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
define( 'AUTH_KEY',         '+^d`I}L7-feL~=ckb^W DZp;p8W@,t1{?2wHV(5^/AEh,x]|I+HZ{T~Yx:#8OoaL' );
define( 'SECURE_AUTH_KEY',  'IY&;jZU }eQcR:k;G; y5Sijz$%XEf<ZgY8Ej`ky}5wvT2~Vw`.aUWj5D},|%E}/' );
define( 'LOGGED_IN_KEY',    'XX$96}u$TYC=m.(t,lCuZ$0.+i<r0K8)|M=k;Nue[|-kE>xSf[I}0,p;X#G9R5+ ' );
define( 'NONCE_KEY',        'V]AV=_mW`tCZJcBaZ#I: x9qh<W+?h0|M sT:]5HBXc-**UD }O!3+C{e&edxid>' );
define( 'AUTH_SALT',        't1sys?4^Y67`~#t%^7>F! IJ]_F|=+[$3ZI8c{BwB~f{x%^:?.Md?W8!--*yP=-F' );
define( 'SECURE_AUTH_SALT', 'jU_t-c>AzMF|JIq<(O`A/xEE}j]{R-i:/)As;kZv]4-121if <J;j0rEQe#c^&kG' );
define( 'LOGGED_IN_SALT',   'o/d%O6$J]@6]ea8%@CaR1cR5WS.P(kIP`$v5zgXUp3I{a}!kBigT]lCw~tDye-o(' );
define( 'NONCE_SALT',       'Con$j.]kBKBoQfZTch>.6R6*f-U#N)@@?_yH}2^aXI1uFq~`wvm/XL$mcB=RgDPy' );

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
