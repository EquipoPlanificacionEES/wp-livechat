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
// define( 'DB_NAME', 'wordpress' );

// /** Database username */
// define( 'DB_USER', 'root' );

// /** Database password */
// define( 'DB_PASSWORD', 'root' );

// /** Database hostname */
// define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('DB_NAME', getenv("MYSQL_ADDON_DB"));
define('DB_USER', getenv("MYSQL_ADDON_USER"));
define('DB_PASSWORD', getenv("MYSQL_ADDON_PASSWORD"));
define('DB_HOST', getenv("MYSQL_ADDON_HOST") . ":" . getenv("MYSQL_ADDON_PORT"));

define('FORCE_SSL_ADMIN', true);
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

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
define( 'AUTH_KEY',         'J>Y$=B~1DkgT!3?:{#WYFFLTF-K4yf/?GR*N2)A.at{|dNvrdgTWk*lP(8<;+:jN' );
define( 'SECURE_AUTH_KEY',  '.>P,`]~2v)@8Hb_OWx;@Vw%?cT@j{yA+re }>)klI~#Ha@7Rs>h5S0WMK?|nc9p>' );
define( 'LOGGED_IN_KEY',    'B{Ve1(fV~jl%,|B^;-sSZzp]uOK+4(>U.t0HQ`~^eRh^iEBj#j_vR0,+rbtXpS?V' );
define( 'NONCE_KEY',        'ARm*oI$cR.3x*.`E+G0%pcF*3DN*R7g}/=Mcb1$1{s*L0_BEsr_n|b7swS%vd`rr' );
define( 'AUTH_SALT',        'Sl`D[b6X#xeuz5aV01=H(;M2Z]5U?du}<Tgb3Lj9S;95&}5B`;f=jC+}Nd|e%6r3' );
define( 'SECURE_AUTH_SALT', 'f:L,pmKrwrp5_D$wE>DCN=c?!}Z@Lrcn]Nr M.~k?~v5pw9a5.8yX=,;(I}N3HYx' );
define( 'LOGGED_IN_SALT',   ',o1H$G/_$@nu tg=$/4td?M,R ?an};XkRED1^+1?e.heXg#mX$BChk;}I)A4{6-' );
define( 'NONCE_SALT',       'MY*dc?z,&#G]eHb`d/Of8Bck{7B|n5a.T{=x7OJ}=4VNtS~#ILjynJSCp_WU1G^f' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
