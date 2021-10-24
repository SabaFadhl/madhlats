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
define( 'DB_NAME', 'madalatss' );

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
define( 'AUTH_KEY',         'ltlub !|@)Ht;}yXck!_|>aVv$vOdv4e-1kLQYh;aDtS`]#wqu<*$^ot+<!niwH^' );
define( 'SECURE_AUTH_KEY',  '@2FP,}a&toHE@*yCX>6$,t9e!oKM|CZq6Mta:KGT/k>mK=Q<;XG1Z(E;Kb8DqS~R' );
define( 'LOGGED_IN_KEY',    '&]:A]6Cd{L)>$p _1#i=Yl4PQ!obvB[T;sH)]<C0[~c8IeVPg.>{`rM&nv[CDx]Q' );
define( 'NONCE_KEY',        'x%faX8~K^N:^5$qX:ZYy7q$A9I>+z/!DT4Yuk|9W<%9EgSAFevXZ/PevYjK}3$qv' );
define( 'AUTH_SALT',        '3&cFSU;AAa!LeF5C1+guHr> 7p[4OGlX}Q^VVMK}[d?Dz$^*wKBYf[CQLsPrMtm9' );
define( 'SECURE_AUTH_SALT', 'J+K5I0f&=DxPZRfm/8)T^F%p#cwZSO|U,;OX@wIM<qxYW105{;d,rGG# 58!QEyj' );
define( 'LOGGED_IN_SALT',   '~WxA]s&bqs#ZiY;-G S:@a;b-pgX?mu`+qS+?LX-(Q-QuA^ueV?jqWw|]xN,iKJZ' );
define( 'NONCE_SALT',       ':%2y=swT&A@zr&;4=bQtid<b;mqVj1P?J0EbU#G,6>wzd,L@0WBYf%c{2ulhH+Zw' );

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
