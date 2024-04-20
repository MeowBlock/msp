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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'msp' );

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


define('FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         'Nr[+Sp4R1.i3+!&qY @~xXdsz@rtD/c55ptz*4a>!R,!g|0En $^bOV[LUT)Ys]:' );
define( 'SECURE_AUTH_KEY',  'a@*(wp4r{iCLJ|S%,%3a7v-)7,s_C_)Du1$e@.C2+*9TD)eWk5!*7O9ngd=lD,Yc' );
define( 'LOGGED_IN_KEY',    'l-0`GF_^[xJ;Frw]WuoTiTz?%$:kAcF-78JnZbI17;a.yTCllov&vdV-7h_e]5Df' );
define( 'NONCE_KEY',        'h|1.)]K]6t.q%T*u*()ahFCfD-1G+BjA$Y4va2a_79qNF%=zGC99YU%~:#WA<rrA' );
define( 'AUTH_SALT',        '4r6RL_ML/,<NrC#*hL(!EC,xZ1+7sX,mU!w8YIlomf<3&)kSf]n`4t`*od~->%[S' );
define( 'SECURE_AUTH_SALT', '`#( !9`@a^SEw6dYg@IJ0c9Pw-89wPl|@g~FRE{;M~%.Q/<cPd844<h%9J<(55=o' );
define( 'LOGGED_IN_SALT',   'DR>Kmw]3.d90S:[Q0x0qP$zBdh*3m/:)VTe?V:.AZ4+NLogB|7(%&~f8,mn Erw ' );
define( 'NONCE_SALT',       'j@ZL-vkpX9XWpiVb2P`gS^p6fl5>SB`8-,xq6HGZO*)LJ_<5!iW}-QxT48{*uaQW' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
