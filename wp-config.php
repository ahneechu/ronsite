<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ronlinblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'N,Uv<bOh@Dj^q5U=gmgEHn- ?|4jObunIf2TLBecaE_j1G8{-T8/U YMrH9CSr3l');
define('SECURE_AUTH_KEY',  'v&EI-&z,AyXsduET&Ay~CV3&M>+],-WIG@OxF~*!%xf3`jQepbJDK9+5;o9/rGfE');
define('LOGGED_IN_KEY',    'Z-lt$_;7N;+h^m:D{;Ezc>`Ph Rt(&UA0Bk:ti<|EIP2?!B)HgZ keKZd>.&Wk(E');
define('NONCE_KEY',        'Q+ 5.W(FrVYV`+bv66f}4{8BI1j+#IOpBuT8Ssq>!vbWWedjL4o0:H#VI5$$}rSQ');
define('AUTH_SALT',        'XvM!J(zR,vBTV^s1Rz@!XxG:gqts[Z!g[V,B#,/kz2es^J}Q|GJb+wpJ8|B7y^E8');
define('SECURE_AUTH_SALT', '}EX85-BZ=NDUrmhdnSjEVH^R|>V|xy!h6h>A;]BRYJ4{ZHW8=n^P>sz^]X+D#X`b');
define('LOGGED_IN_SALT',   'jPSggWQR1=k+;&YXY[}J:)Sx5)BPc?.+nmU&`l-}-Hxw[[F[Go5U3t4m#:xt|d.!');
define('NONCE_SALT',       '<+.0Qf<Op+mGT>,ix_/,L%efyM57) C{4@h!Qh/[Oq-UebKLusH> c#fd2/HK+LO');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
