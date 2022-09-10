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
define( 'DB_NAME', 'stimotijevic_trpkovic' );

/** Database username */
define( 'DB_USER', 'stimotijevic_trpkovic' );

/** Database password */
define( 'DB_PASSWORD', 'lM8A%B{@hrUq' );

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
define( 'AUTH_KEY',         '5t(_}K(gB&g+X/|8$315<Mr2{z^m**FqBA(tHo1T? %:{`+CBLZ3#]I#W[Ijn3B2' );
define( 'SECURE_AUTH_KEY',  '?kKeVgq^`#7V|F*Fi{E1zK38*A;}7PNm9:+~}fhxZMezIJ dHQ|SDs#7WJ._hT`G' );
define( 'LOGGED_IN_KEY',    '.PfK;saF.XQ~B ^(>5R2}twZ>^<&*&35D?Fuc@u6=~o`D^>m3vFN`_Pn;f`o2C[k' );
define( 'NONCE_KEY',        'eQ2M#La{Rdqv]:y5<DaN>8Z!y!M-l[}7=,2Nh_*yVW;JSPXZr_:QigO.]j~&ZczU' );
define( 'AUTH_SALT',        '^>]TEa!M;6*vz+lhM>P|NsYun!rM]m36gCltCLcE`<[KaEPYtF=SZS6k3ZkZ{tF]' );
define( 'SECURE_AUTH_SALT', 'CPB()&+AT{cowh`n!O&p@sSI@3<:(*T00VqwkT=#mu[hv9$&!<Su,EmQgbflh&[{' );
define( 'LOGGED_IN_SALT',   '1P},5nG>EkTZ<4M~3+pdC5%|&[u?z7!5f+-+p7ApWM}aR#3&:9Mo._<,SAtzp_h^' );
define( 'NONCE_SALT',       'F~~JIs(=>:O2TtX{U9pq-0Z,-gr3YQ/}CL[le`PVev(|]W,0-O{Mjiz*}*0_U?f,' );

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
