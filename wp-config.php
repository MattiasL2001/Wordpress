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
define( 'DB_NAME', 'testDataBase' );

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
define( 'AUTH_KEY',         '2z_S<CBrf^Xv}sepS^eriwx&P@2Bh{~?fr(C?O~V?P!OA0&W43JmYX,[;WVWaJn!' );
define( 'SECURE_AUTH_KEY',  '@I$^A[kRC25E~`lG4q9Q|rOIuYCGn42CAQRdkYcmE*2{~c+[Q5uiLUU6lW7[:];F' );
define( 'LOGGED_IN_KEY',    '3:QUnI!/(<.rAHT4I%Dlj@>7F:-Gl/A@JDRpOrX/wwPb3<d63>]k^i~8sV@:008e' );
define( 'NONCE_KEY',        'eExF)h_=dhOWsfL(t.A9d7fj!9zwLT)H,6nYE0|xE3eWtqVhx|ZQ{e=p,0Iv]IvK' );
define( 'AUTH_SALT',        '#PXw7..jbQLfzf.x0)/hE*k<MNeapX!dAmD$0LegHV%$k>OiW5YO^j?Jo7?ON1?G' );
define( 'SECURE_AUTH_SALT', '_#Z5P.$5N}**!siMJ~6kcOi3|4DND Xk9tfw,u$Li&xZ+;S%6zgY<i>BC1VUVq.q' );
define( 'LOGGED_IN_SALT',   'S~[nFHX+;K%ftk]k+f!{L_Jc`^_[@/U v;K7OTpe%I,c/#s~f[3umIq}xAq+PuGP' );
define( 'NONCE_SALT',       '%DKT GlhkB5w}6%5q3lrt50Jki42]1A-zJb5`X5tIZd7Q=8h&~rxI_Q +8D3hk#E' );

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
