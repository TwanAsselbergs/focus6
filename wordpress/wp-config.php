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
define( 'DB_NAME', 'focus6' );

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
define( 'AUTH_KEY',         '!dd_CG>[Jysj%}ntCp+02-.l:t74jrm5Q!bQ&W36#,Yhboo4S9>h06R|X+mwJAaA' );
define( 'SECURE_AUTH_KEY',  'Hq^GDa= W#[ZWhbQ,$ndwPi_$5&~^~/PbY4iC.Voie:FFTfr8[s>IB{([Kj6clH%' );
define( 'LOGGED_IN_KEY',    'X9`|/:KD!KQaI+/5@6a&%>(M9h(SZ_BOQkWZ VF:5qbT[5m8|OZP|vV2XBB.I9,&' );
define( 'NONCE_KEY',        ',)RXm$!qN5?B|(D1b$9f5ZQtUze*(mDVf?-9n0o$j*(pZD#CJ{_r(6o/4s8t$$GQ' );
define( 'AUTH_SALT',        'HSGW/;a:60fuNd.8FlSH[_3==,kx5^<5d2j|$zRdlc$qcr]4|68)vKu-`ZJ5v#2l' );
define( 'SECURE_AUTH_SALT', '4z4`G3{iG`;JDZJ^|X7g_N,dvgUwk+96@~~ Py:,&*BscDb6bl=*Y)gm9O;m5X5b' );
define( 'LOGGED_IN_SALT',   'ul`@FSU9xs0R;?6<,7&FwGdC?gL16H(WzFWt{D9l2qnohB.g0R-QySIFS zQW`&9' );
define( 'NONCE_SALT',       '*vDz,U;O$kUHZiYzFVEvw<=9L}}lkZn4c,OOj^YL)qW8BT04R~zV{~wA<vD%uvHj' );

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

define('FS_METHOD', 'direct');

header("Access-Control-Allow-Origin: *");