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
define( 'DB_NAME', 'github' );

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
define( 'AUTH_KEY',         '|J.P>4pA0#sx@j;Q,)Fk9rv`u?3y-3b2_C@$_$.Xq1T#^*CWk /-r:70p|-q0*%+' );
define( 'SECURE_AUTH_KEY',  'Pn8vt~QKp!(`v!=gihS9VS_j_t9c-!M=4$L*r]yW{2_Erj<]+3nVVjT Vm4sU6|@' );
define( 'LOGGED_IN_KEY',    'rD>$Md6Fr_%}pJRm|_4`@^U/Ww28!rn[)r;-!B{=$ldZUY/3i:qx`SU9Iu*#tFq4' );
define( 'NONCE_KEY',        ']KM7W3sF*M?c6vZ5Lkj,SSvY!)Wt(]FcrVtb1>hfmlRqsYzr#)i(oeN!*J.7)&U#' );
define( 'AUTH_SALT',        'jTza}~99<_~:5usUCp&A[5Ftx_ALkQ{x!l+=c&zLdvI<(~oGKYL1(qi[o7eo+=w1' );
define( 'SECURE_AUTH_SALT', 'UNKn/r=Pbaai[4kO?)JS`rN+f7q:n2@&`rE/f[$nJ+~lS?6FR+T(P~Z1G,%AS)*c' );
define( 'LOGGED_IN_SALT',   '34lf;eyddXdRM(W_N)ao}>B3U~x1`e&w_(}3N;(W8nOF5<lqEUYJ-b%T,7+nJvBw' );
define( 'NONCE_SALT',       'dZW78>H>E#r>h,c1QfWo $BuzT;IU[Jq>9EW~{Cp<w:Vi6hg,_GdrMpx5}7)/j|M' );

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
