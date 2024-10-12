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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '!0#V>%XvH~PcZ5<r{tKa__a2[;=)^F:o8]:} TzbZ,w|z81[;mkyY,BhZW]vA|%F' );
define( 'SECURE_AUTH_KEY',  'Cm3+iq~oC4 0t928zEO3a=jU.YCR4<oX0Y#Zzr#E2XPO*h<5|0+|)-(+Os/I|8}=' );
define( 'LOGGED_IN_KEY',    '1^B>QA2wcr+~jY_.2AM5q-d98_wUQ2c_W?BJKqrYH:yi1=aS<?4bo1RTMRPT0mtp' );
define( 'NONCE_KEY',        'FksbedO1tGb;w<NBJ.owrLRNAvbV9~m)Vz<mRb0]Cty3nC%+jiGA?D71=7*-@07 ' );
define( 'AUTH_SALT',        '~EmOl8 m-bRf?a7q^N-l8J2# vOX,H{[*aa-*YDURiDWJyd;Sj4Dr #!m/!I2y.o' );
define( 'SECURE_AUTH_SALT', ' ZyApW|s]u!*s$pu{i5d[?@I2m1^lpF#xum5uV~(*|S6$xKFs|RSqIB2`>Z7-MDN' );
define( 'LOGGED_IN_SALT',   'I}< -~t[tuD5A: ZJ~qgmz#@m+%{s9YFvYqYCjXlEo C+Ypk_uNIt{1%Z?<6XO{P' );
define( 'NONCE_SALT',       '87a-ATBn ]`irxB.WQhO!clp5) x(E9iVt,xIrWvY,Z/ }!qtbXXrUhUm ]2V;Cm' );

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
