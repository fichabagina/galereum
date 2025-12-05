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
define( 'DB_NAME', 'galereum_db' );

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
define('AUTH_KEY',         'ak#J^MkE{F|MhQaHRhC:+qMhq~01j5vKQ=B4~L=)!!!asVRf+,}6z!EmuIn<gAoM');
define('SECURE_AUTH_KEY',  'T?P#-@F! PNhQDb.-Q*#&N-:xAGRdgn<[.%OpAO!<T&t5/I;P+kWKM<A^IM3sTU+');
define('LOGGED_IN_KEY',    '%e!W9kx]PVn^4f,/YQ T3^tw7?,=^9;ieDP8K/zaXc-O/eT%}7!!;3T--ri-9|y<');
define('NONCE_KEY',        'RNkZ-g0T<WlB:c!W74|> |05klOP2rmFGAled+#Wq!b49][RPsw`3d$!0<n}1K]k');
define('AUTH_SALT',        'gI8_1dh+nFV>5/6],co<ILxPXJd5}7Yk&:m{6#@X{a;~iT|L%A>!w<Wi2;S+G1y[');
define('SECURE_AUTH_SALT', '_]LTXpI%Og`f&9pCu#tTTUH2Nc3&|^cqw.N{F~Z.^(=?<?0q(f^cIwD{tk~SmZ|D');
define('LOGGED_IN_SALT',   'd&,V z/w-g4 -T]4e|5+e%U2hnMc[< t}~SKkk2d&+&C13w,><e<#2reBgFuCNIY');
define('NONCE_SALT',       'ql%+U_YK9)8E`15}Q[Z_1-,&tD^rgIIi(Da;J7PnRe<izp)Ww{bBcQC3-Mm,5>+?');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
