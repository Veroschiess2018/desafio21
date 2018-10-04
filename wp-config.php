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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'desafio21');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' r>2pPF*Y&eV.?$1`s,wD8YHbB!:N[n~: !bUjR7PBV5<Xd$$1T@B>p#kzp|<s{p');
define('SECURE_AUTH_KEY',  'e,Wh{:%{+X;k/h<hojY[+{WzDvzlA10S5%MpZy8sIe|E:;iMO+b-`#*E9WWxt-[+');
define('LOGGED_IN_KEY',    '{TJ4(2LbN2d2BpsTL=t%_tBEyL=7Gizz,]C7oH553/c18?OMH)W^V]~yt(HtZ.4Z');
define('NONCE_KEY',        '^$@h`qWPHJk2W%{Ze0ss!ew!K%~_j=}=oy`!@~D{5 `NqgWf3|g__hw2mRw?wbLm');
define('AUTH_SALT',        'tE@xZSSxjG(-n]KYbM+ym*_x_=OnVXh-Yt*T1n1 29|_hko/C*[c),i,E#s[RAs2');
define('SECURE_AUTH_SALT', 'nO9^LnFiuy(,BwT>j-}<EO4B;Cuv.Wl6{qIdU$BKR%=n(d3-h4%BSbfBn&4^~Mvt');
define('LOGGED_IN_SALT',   'X#2*4U#H@ePr>vMkzi_b{(,3qfvG=0<,,P%n] ;}XQcMrYR0.S._teF^`dXLcz)/');
define('NONCE_SALT',       '+2]5PqsShBUh?9e$<z@3+w4~k|&Y3k7#5,:MwY(CZ(8S^#7:eBZ*S>+|) :H00[y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
