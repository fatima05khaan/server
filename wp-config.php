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
define( 'DB_NAME', 'server' );

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
define( 'AUTH_KEY',         'bU=~gmCP!_+8t!jA]ZS{@v![PA2rNZqrfSsexhj[;rC5wVEq-GpL7_nz}]JtK=PI' );
define( 'SECURE_AUTH_KEY',  'A:B=~9H)NXqakrG[0]&O@]}%w>j-~xyirSSgEq@PL@xahCcK8x.2%@mNMRV19m`.' );
define( 'LOGGED_IN_KEY',    '`QOixl$])I, j~=qpH6j#ysEk3af:|J1#xjx,5!~?Hk129gt6wnR[Rpguz:QwH[m' );
define( 'NONCE_KEY',        'm!qeiO[m,|8hsE!l><Pf+57;IJun+r+Cbr5B+4npE<l2{_I2#!gq6y7X^Xyfv`Lz' );
define( 'AUTH_SALT',        'vp+N)$~hjt[o3q(zJ|b!-*ze9CwUQe]ybe(oKN/%gBp*A<ED`LK6pU1X:bv&I!F_' );
define( 'SECURE_AUTH_SALT', '$5E8-wEyp(pnz{qts:,?B2b4}gYqENO_b;hF.B_R&[~-bW@&UU?yb2RZ&*7,4n0h' );
define( 'LOGGED_IN_SALT',   'AEFElN6g+HJihxY!k9{8nnN h~,+XTc*M;x#6Rc]niNljW#8e)[i/3a1I}Ovgw4L' );
define( 'NONCE_SALT',       'RI4K>lys+Z((m+gY(DTicX,4L8#PD%TWEpY9enBGBw$%!2gk/2 `sb.OunpzQ0Lq' );

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
