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
define( 'DB_NAME', 'dl_db' );

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
define( 'AUTH_KEY',         'L0GS1$o+8`)5j+!8z~as=ZlQB?]*uvAaC8rV$zMlLgvwmn$fBn4<MR|`l:QJ+H!l' );
define( 'SECURE_AUTH_KEY',  'syzt`koIK)q3(Ga^pT!1)%fCIy[5R,4# <yas$`,,jM7b*-``A;~4A/n19bTn@z?' );
define( 'LOGGED_IN_KEY',    '. xExhM+IFn#)wCBw6y1u/z9c}3Pj5yF!O4*1,v0Y]:s~o.HW?5>A*?_T(Bt j2.' );
define( 'NONCE_KEY',        '>@/&oi*m)MTl^Q<3k~jI_LjFU>nW8+,ch*FN.$,@9(Y3w?B]fG!-oe|do7gYh]y+' );
define( 'AUTH_SALT',        '+G.yp6ioA !`+P+z$ 86>qW)85WX2*FO,wIVUTWmbvp8g*YF@XsLg(Jx#::Tp`eT' );
define( 'SECURE_AUTH_SALT', 'Hz5?;D]^auk7S;B;#H@q^L~l)9v=6]at_r=jPAbHVE2;Ka{g~;cZ^d1SJI82g6Z]' );
define( 'LOGGED_IN_SALT',   '(krP*-Pp}a+8z&aj&o,:mbR=c|3^ZWILCm/4cG(g}lKYnwAAS);dGcHQc2~P)eHP' );
define( 'NONCE_SALT',       'G+J|={6/9k&Fum5B&tSOmH,*A~wjIAl`:iK]2>SM[6E}HTIOp x<CFB;.P7/9jTH' );

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
define( 'WP_DEBUG', true );
define('FS_METHOD','direct');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
