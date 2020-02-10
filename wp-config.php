<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'my_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ');D.4SL89@}mB_|;>;4Xk5R/|Yk}s64Rt#kPml>H)0CNxHJNJa[A))pRdCHjsZ78' );
define( 'SECURE_AUTH_KEY',  'KF[g3GQ>K $mmnK6DV)2-1Q~}&W6UD%eq0/F@n,{O+O|}Jli2&G]aW[7gPoR)tr~' );
define( 'LOGGED_IN_KEY',    'GO {54D7|vb4tRj3BdVK5MaFj`$YA,|5NJV(4qQYv[Mqh,|Y]p7U<;uW)} I@~z4' );
define( 'NONCE_KEY',        'GJ !B#]pdJ6P|t~E{r|?`6kFV!9h[HzCW`knV9`5]}[|ZWKu.i91.>/=odtN)Z9J' );
define( 'AUTH_SALT',        ',2ByzGKBDl.R{#f9(8<P9+_4?FZ]9zQc]3pfQM+D@Jl76Ojzo:tbGp^#<sv5aZ[l' );
define( 'SECURE_AUTH_SALT', '!joh---l$;N|_&*Kl~%/YqvIAoGU(fRGE./IhRR]e*nLJV75U!GoLAz<.3k[fYmN' );
define( 'LOGGED_IN_SALT',   'OA|yanu$Ss0CX)8ii{dz<D;0)nBqfm lE:^Cp)p Dy(5i;ni_xX!NuBi+fz+W^^b' );
define( 'NONCE_SALT',       '#>#*;9!$7AoSvS#2UOSyBM~1iz<!KVi.4Y]p2eGx:0bNJD@nw=0xn8Oe}S7;ius5' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_main';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
