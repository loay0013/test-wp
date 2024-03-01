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
define( 'DB_NAME', 'test-wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'H(Ba~DdqBn!|?_e)4{1OQ~2pA*x0;E7NgVG@qIR2l1:28m+NY)G132 )SNwYrHfk' );
define( 'SECURE_AUTH_KEY',  'yl.GAs^HVf2|IiE4iJZ#4QvBLtr5;$(}cI,#7N2d,-4@pU3AQzz%ab$sn[kE@>J%' );
define( 'LOGGED_IN_KEY',    'BE0[5KAR31namh7IC9dDy3p6N<P+vATd[;}:voAh_@QSF$[K~q04Knf2GjIBa_+F' );
define( 'NONCE_KEY',        'rvIO)8X8!mLk+WL_d8;[Cf^_hmEz9/ q?V>~CV[:y&Y{R+vu]5+bCGR#LQ0`ShNU' );
define( 'AUTH_SALT',        'KI2%pUX`!ox}L[xKQJ*n!H<Mu6c$_n#y*d)zT .Ft6]SDtPvddRY2Ywj-G*EAH4=' );
define( 'SECURE_AUTH_SALT', 'uK,){v+ag5v [; VH8M2=5T3!&6~HOyb;k(WhTN|4sa9^!S--eqIFb|Y@=mtz9Op' );
define( 'LOGGED_IN_SALT',   'qX^C{ElKB?7ZiL,&x7GV-:mWba~^8Ta?.+- np,-1u P=*|=&m3!Pu.X&V6KO5]/' );
define( 'NONCE_SALT',       'YLv=A,Rb4cu#i^$gD!QS9,q5ibQK&DAxTvnuY>!^_bv>|j0,yNN(@xQUWlNQKmb8' );

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
