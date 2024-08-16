<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u524763606_PXNtH' );

/** Database username */
define( 'DB_USER', 'u524763606_FHh5U' );

/** Database password */
define( 'DB_PASSWORD', 'KN3LoupRRe' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'AxDt2*[r|J@ T.?zG|HL)L=l<Q.^#kNO9Yg2>k|yIqZQRKHf*hB*8hPg4eSxEZY_' );
define( 'SECURE_AUTH_KEY',   'Z3$]#xJi$7>oHHk~cY+_:g.i4jmnW9w,%JnB#)aSZ[#]~1dtBO|#R3h5RQ2eJu}:' );
define( 'LOGGED_IN_KEY',     'FJv^fVnQ/.BMkLEP@M:2^VK!oa<*X#tAfBOFU3IbqWzyI;g-HfADOFS3>/c?c Wg' );
define( 'NONCE_KEY',         'AKCh[fo]$i4 d$*us:_XH$#2_<rKy2$d.%S^Gh8=xFz0sJ.L!,3B[80mb</?x;-{' );
define( 'AUTH_SALT',         'omR&Wk)kgN/y-`-LcUQH`MAF!KDQnNR6,MpAoU`X7aqscBO`8L<:W?&+JbLM~{fW' );
define( 'SECURE_AUTH_SALT',  'f2hcK1j&w~:01>0c;=c[3w1^s%jsN7Ws:r;=V*|A#wf^[g`NbA.LrHRyb-*XMarI' );
define( 'LOGGED_IN_SALT',    'm3)[()|~tx?VBr~*RpnZ4]cTe`-=^DFbfgXU#>cZ<v< (8I&=/oEEPqvot;XYL$F' );
define( 'NONCE_SALT',        '&mmiZ4T+[.fTY_GQ-&zO`z#N*D[jh-LOU9-dAXOV(pb@rZldEaf{0m)Xnnn^d)&f' );
define( 'WP_CACHE_KEY_SALT', 'FB5oINwP:WdAA%+YlaqQ.q_<QmUrBzG<CsFwre][eI(Vq&|E IvgZ3I-crZ:0g8H' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
