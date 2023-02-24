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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Digital_Agency' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'D5Fm|w0!)GGYF}=O|d/@b#g1p6&ZrO|Ci&YU1+e)!z9LYd!qqs,g;h2D!gdd2,?O' );
define( 'SECURE_AUTH_KEY',  'WRRjn|r8?cAa27{ujh^AhuE@*Fc5;!Y$!&F=cB,0/AlE%|Rz)m;D1|gVcDx1caEC' );
define( 'LOGGED_IN_KEY',    'gk.o/g>hY[%2Uap&!)K^F2YF*4rB|KUxPdV5-,%:W2t2;=F#v?+NO^ivVV8o[}XK' );
define( 'NONCE_KEY',        'BUD)=14r#Vs1fkLMK!$bs[O`D^&(qKaN&pSx;-ybF^ XtSrnpKr`vjghiH{)rDOR' );
define( 'AUTH_SALT',        'u@H*n8[E6iiVRw2ziR wUcANbE@e~9}|_]P<rtJlb^Xu`uiE%lmaa9~oqW.^I5<W' );
define( 'SECURE_AUTH_SALT', 'Dfmp=FQy5s!pLTQ@*,h(ch7NRlYGTD 8%JF|2D~V[NK_io#2nP`r&GNR)RiPZnB0' );
define( 'LOGGED_IN_SALT',   '/^hZKEw[G:c%6%DaDn@n[LaL$X|$ }4!dGe%8c1-~d;k(nlVExuiR>/~uVEXT.Si' );
define( 'NONCE_SALT',       'p,8vr.jZcL*/?bwP[e(Oz- rKHK[nsk+QQEae?`C!2N1=-952,#/FqyYDKrHp7,D' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_Digital_Agency';

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
