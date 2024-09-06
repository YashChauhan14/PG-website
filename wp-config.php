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
define( 'AUTH_KEY',         'Q3tF^@;4Sn$,Sy D)I7>+lvJ.P:w?Bj.UFXcAb1l.xG+y816cte>jNmt3=1$uf*g' );
define( 'SECURE_AUTH_KEY',  '6+y)ifc!1@Y+~Q@A%3jSl{FaNBuPPFZ;?}JK$jlB@Jdi5cI(iHH/7p3bNZnt.2Hl' );
define( 'LOGGED_IN_KEY',    '@@HM>FD6ogThT{G#O%DKCs^Olk?e%Bdn//B>b%_4N4mnHBJCR[8%3ge9j&M`1F]n' );
define( 'NONCE_KEY',        'jMhrD4=^[kf%ufPMQ^@{Rd<006J^K#)vl@py|*R9OMs@Wit*_(t;qqvJ2WDxj?#D' );
define( 'AUTH_SALT',        '?B~lBXTT|V<]!-_[sv:M-ahgG&k}9{986U9C7581oq84uc.W:^@]Je1_igcEdhz0' );
define( 'SECURE_AUTH_SALT', 'F<Jr=H$&ce!exfuPZ0.|nlovG:tV]v{Oj>fZ:<}*M|uoGygAn.Z`J]^,p{k9Yp8W' );
define( 'LOGGED_IN_SALT',   'uK_DU+>r9]~Jk99/b0WQH<^[|mxTq184M1SdoriXmZrrj+8luke;`PEU7L`yn*%2' );
define( 'NONCE_SALT',       'go$5[?kTd2Cu-?qM F$);Y~TS:crN3M@_vmxb`i|m]JI+Rj5+.@y#-u}Um3D>#EC' );

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
