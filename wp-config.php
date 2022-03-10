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
define( 'DB_NAME', 'parathleticsgames_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'sx2(#b;OwsG-gx2#69VPen8g[l^y^21Q*[3sQqE=(W%3bj;-kKxPP#THU8C4R |B' );
define( 'SECURE_AUTH_KEY',  'j%Q+[Dr-x0^$rm{X[CTLk;bm+/7!YTwveR#=89)<Q}N@3}|rV3{* Nwbz0DZTR]2' );
define( 'LOGGED_IN_KEY',    'v/a1:PO)xRP-++:cFI>XezLQkUjRn6-r((yCK+[GDU+n`5z,SyPdola2RD+phjG|' );
define( 'NONCE_KEY',        '%1-qXsh>3 3w@6e 19pAW&}H+$j[%>wvk7yo5A%2<aZ5_=Vb&%|QaSIT&Tv,SB0V' );
define( 'AUTH_SALT',        'h9caj2EoaA0C8v!{^:=%`_iIni0Ixw% o6Pi|sT<<bokL$!$e,_I_JKV1CsW/jLy' );
define( 'SECURE_AUTH_SALT', '?LUIIuQUw@pNpu:>1x)!8m]+HY&4GTg&FUe`4@=kvv7VF<ZnG+!])&k1lWoMU):U' );
define( 'LOGGED_IN_SALT',   '**?W@.e.!>*[a#kYue}=+lzUJfcQi4w5QRPDPM?O]BL)HCy!Or66Qc>Fzz~+Wwhv' );
define( 'NONCE_SALT',       '6}+f)4jb-iL&-R]B]Ul2K37g5*B5Qs<U!XHFyyoODW$%r0d>k|S=MuRgD`4 i&BP' );

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
