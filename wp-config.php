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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '}T{9fIc?eJd9P+@@l]hDs#^w.j,d-xDvEMVxzpezUf55R@@7iRje+RgJA&8H8.z`' );
define( 'SECURE_AUTH_KEY',   ':e2@-mLf2&(G=9/Rgb!?e3Jo#y{e)D,otDw_&D;?.@Y(#D g *bm2wx{$&py{[kL' );
define( 'LOGGED_IN_KEY',     '0JV9X_30+-UC)RUVO]**dpBeU&laCnRw,l@%gEd{bp>h:M?}_i_RxgqM8s,P8A+#' );
define( 'NONCE_KEY',         'R{*V[AKK:r71?,exrbW-NW+Y6NrHxhb8])62%tn|m5rSX(1 ;kacct%NpMFRY;[K' );
define( 'AUTH_SALT',         'fAWY*iG$C$Rx]phiUO!]6v&Tc~I=(]dyhM9e0i^yT7P~~613U;-bWs[C/Xf*awNa' );
define( 'SECURE_AUTH_SALT',  '%,3d,Y5KV>5b0MWon@xoADO56py5m$2jY-q`9uOoUa^#adtX!^0{YF7yW<M!^>+2' );
define( 'LOGGED_IN_SALT',    'K|OL7h`83rz0KKY.KYBNxc$t-uz%$%^A6X0SnvrbciFqr=G.y7}5uWaij(5@Mh}J' );
define( 'NONCE_SALT',        'bztgwNv,^? w~^)$y0z>RL6vA-1,WB}%F%pz]0;/sZeneA0`yeoys.csc;Bcyh*y' );
define( 'WP_CACHE_KEY_SALT', '~H}2nvC+pNBeA00}:XG<LgcpEbyS@8Yj8:3NK*`?`EG+7N(,JSeA3%jv;<!f@RE4' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
