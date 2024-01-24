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
define( 'AUTH_KEY',          '$(q3Pq?B1jEWF%_]D_X5ZO8Gua;r_ngab7vH4U>Mg <f4MnQA65p.H/6)Z)n>K]v' );
define( 'SECURE_AUTH_KEY',   '[,BnO5t_hY9c4C|*3H2]-ra6F|?ad{zrk0zsCG!>%jK50p^T1kB1~{YIs!b@{W}Y' );
define( 'LOGGED_IN_KEY',     '=Y*h1o-DZ{JTGZbdYt-mkZze#<hE2d$.C4]W;[eA}$!f9aSV!F:sR8+PF$M{Z%II' );
define( 'NONCE_KEY',         '>qY0?-o`rl/-gjWxs,O?i{5IB^L6tJZY1$/E.d})Zho/[g7=L!!DNu8Vu2#w~x`u' );
define( 'AUTH_SALT',         '$;_[a.8f}1UxKM:$gA6CO_)9X;#|[2p`0O.sUyAUi(1O>_x:[&o9,U-*5w[|$09r' );
define( 'SECURE_AUTH_SALT',  '_PV%e-X~.Z:z5R5R]dT/c rGzwAZlRz8e*L8LD$Kn8K$-8mo>::|VBJNyV.^~0bp' );
define( 'LOGGED_IN_SALT',    '+D>>vG%ydbc.F0fj3fC M@ALs!I(erNwDEn/a6IGV,Q)->(pM=(Kd<^gQs|sNBI/' );
define( 'NONCE_SALT',        'm(U=T/nW49P^nQAnKIO~-e1_qF-d)5RLQ|MzU.*d J2e1/m$uFm|+,j/~91VMYjI' );
define( 'WP_CACHE_KEY_SALT', '4j+^#3&/fy(y^VY]uGGN_ q-G>`v):4DAlbUIXo6=.,[C,A^=>hA~0cc%h]/KW?f' );


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
