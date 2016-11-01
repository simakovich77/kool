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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'common_dbvano');

/** MySQL database username */
define('DB_USER', 'common_uvano');

/** MySQL database password */
define('DB_PASSWORD', 'N1HgrewLa5');

/** MySQL hostname */
define('DB_HOST', '194.135.91.242');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`:/9+DmFw{gn:`r42>B~OVX(C5>dB2IewdU]9`n![<Ue[HXQ@dYP,oq>-%[q&Hre');
define('SECURE_AUTH_KEY',  'yi)/89xv`zW=NH1<Fr.Etn*X.hE4!uBT3nSrQUQ&Z(/}>W6k%n**W9DiIH-z^pz(');
define('LOGGED_IN_KEY',    'MAV&/&#)_=iI}j;jg.t>_#NvK3l ]qqMji/;QkVa-W%&&4{n9dCm(&s`3x@u[vTd');
define('NONCE_KEY',        'fWB|U5oOchWnsq{/gNKnk%sxZ)&&#oT*9s*WGHKY.i5,qh8<Q>hOuszpd[ 7v]%N');
define('AUTH_SALT',        'z6jl=fb)}_RzWO3Cj&P}i&]YRt2 B/5edXLjIvIq7;Ak?s5wNJ~o_W%SS0|!QvE ');
define('SECURE_AUTH_SALT', 'vLN9uAH Tu}[f<H&Q*S?I)9xa6iSrwxw=/)}O+{@E0L2%oQ!Fu>OM5fcuzsX[{<U');
define('LOGGED_IN_SALT',   '~a_b&H^mo(HpqH_K}@sU?[O) ]%z}cf1/v)NWr:v0viOG$YxWOutq*Y9/+m}zL)H');
define('NONCE_SALT',       'Zyd/*pqJSKS}Ehp~8t0]Y9C;MWm2POCTX`CSq])FWJohft,a6zdGVuUb3/B3GS],');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
