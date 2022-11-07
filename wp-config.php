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
define( 'DB_NAME', 'stimotijevic_portfolio' );
/** Database username */
define( 'DB_USER', 'stimotijevic_portfolioAdmin' );
/** Database password */
define( 'DB_PASSWORD', 'Ka~x[yn{,I_J' );
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
define( 'AUTH_KEY',         'vf$c9K_lxe2P7$yKKSzN8<_-oQhjv)<09XYLy+!WPC_|RDTUb=9)?PfLw UHcEEI' );
define( 'SECURE_AUTH_KEY',  'A/$yCCDlE JI) tsW8SE3/,>QT<4>  O7d#{WjHt3l6EF1lj+@#XSu*_4<#M9&i0' );
define( 'LOGGED_IN_KEY',    'P}@++!VZHw[0!nJ8MG+AFQLS6=S1Pw?gMd;2wlTFy Cxp=qUL;!$j,[gO@b3hnI5' );
define( 'NONCE_KEY',        'G.Ndc z WP1QU${zB1GIvZr4JOL}/>`z?k%H7BXs>k=LZKr6Mv1?0X3H+KMf$(G]' );
define( 'AUTH_SALT',        'uH+ci5jdlZEq7#44xN}=?]J!yon^@;q4.25sLl/W +Kc;=~}~sgUJ9@1<L$OE4Q?' );
define( 'SECURE_AUTH_SALT', 'ehF>)1zUIjaKWYR67vV-J`Yj.I`Vy`7vmG0%=goTbCCogi3u;=M=;Ree}KZZ3%s&' );
define( 'LOGGED_IN_SALT',   'Rtu@7Q1sW^dTc$WS*P8^v*o/hg*?m]a$[$~)h,BRl9u`M|1Zo&7&mrF#w lC,7H!' );
define( 'NONCE_SALT',       '~&3:^?fx?GwC5348*{_/gG.O1vO#hU_B],^A N/ PlfO&D@}Md}&GvGxC$#$&lei' );
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