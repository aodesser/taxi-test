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
define( 'DB_NAME', 'halavudv_wp_miyig' );

/** Database username */
define( 'DB_USER', 'halavudv_wp_koyqt' );

/** Database password */
define( 'DB_PASSWORD', '#97K5if~f0iwJ6RJ' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY', 'CpFw0dMBTdnC&W%FNo*8;J)[sHL3xe10UB]x)cC3d1h8y(jQU/#/mL03s66n:O6_');
define('SECURE_AUTH_KEY', 'LH-iVQRwh%p3[tJ839dW9x!WsDs3lLL_!HiwzVZ0[a951349|74s8[qrdc9:1tu#');
define('LOGGED_IN_KEY', '/ek-20m:2Y_x!12S2;82I7Ofz2y31f8(~gmdG76Ud|4bIV_d|2404od%C9wYIX_c');
define('NONCE_KEY', '39PFG&[n]4@y)L_Y2-sDBl@j-1g2#sYvV]1:o7:iz@A48obT#0&lgq#jQ3s29IaS');
define('AUTH_SALT', '8/yvJ@Y77*aK_5_B#i5hdTGSZ6&T3Z*#H92d7i&0g+[s2#T*V(:mTU8KVk*jZ0_*');
define('SECURE_AUTH_SALT', 'f&FvXil%O[4g9Zh+#7Jj9+M:no6jlC_S#3#(s]9+pvJmp#@NE6vLP3O8+/H+([i2');
define('LOGGED_IN_SALT', '-IOQBeTu;w4_!VI:(4aG)u84-v+)O!T1Px3)fW#4V-1)d]70/t:pRV29z2(0n]78');
define('NONCE_SALT', '!XbD1]*LUBs7Zd71qL7c2-suiQwgR;Mm0hg_;hT218&%998#6-I[1X2;3*t0;d[3');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ZRbGvcywL_';


define('WP_CACHE', true);
define('WPCACHEHOME', '/home/halavudv/taxi.halavudvash.co.il/wp-content/plugins/wp-super-cache/');

/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
