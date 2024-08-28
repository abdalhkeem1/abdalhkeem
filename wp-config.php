<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'abdu' );

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
define( 'AUTH_KEY',         '`iLELqxBKVcQ:p1mvQ/~n24^aNd$Ul>2=.y%pys+5SFW%qEe|G]&goKFf,MJbMw|' );
define( 'SECURE_AUTH_KEY',  '$*|~JzmelJ@])QnU=a#jQIm{!+NfksT%xV.KY7.=H:^Y}}@F`^@*c.xr^g&NK-3u' );
define( 'LOGGED_IN_KEY',    ':9+PO|/n1?!4<6>)t2cQ%nt[yM,)WeXV@M?N[C0q]BX=>r,W9zYgGVmMkL]OAt8G' );
define( 'NONCE_KEY',        'falJc+~g%d|/C}T7>HrL0;`T{@K?r8TNR2L#DZ$)@HoTIN#^rd8TZAKYyUOl_wYh' );
define( 'AUTH_SALT',        'e}K@Hvr#9S4N9wK-!)fZ_Dk1;+UzUiF|)~z,dv84LpM*fA^F}i9I&m$iJq`)C5~Z' );
define( 'SECURE_AUTH_SALT', '/uZio0MTcT<@wkN 0*&Z!t/fKK+Oyn##hP}fH)t#.n>au .8{@9yN.[E:hi1EHK-' );
define( 'LOGGED_IN_SALT',   'VPSZ=$RZUUZur^[_@fQyp&V1R7^.g#ok}bm,L={uStj#gMt@AVeA0`gQ|%%hG<NE' );
define( 'NONCE_SALT',       'D-cDFt0!U&Vz2tP-6`c<8pc<abl# >ha`$|c&e(kLyyp-nc^hwdZboWaY@2ciR*S' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
