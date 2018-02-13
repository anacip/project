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
define('DB_NAME', 'anac_ip_dbase');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '!ifgQWX<q&Fa4?>cGqPS>1nD3CX>0gg=~m/KxFHj?jX`I;.E<_AoRiQ/~xZ:4gSF');
define('SECURE_AUTH_KEY',  ']^A9?>9@` MVXug`>^uZO(A)Z)/u X`a@9nT5dfeRsQ->coI0W~9@yp8~9FWPG{N');
define('LOGGED_IN_KEY',    'Vm9eL+2qY1~v:E&g!%RHw9_<z/6]_MM1ps}{bac_m-%YJ87s5/TH=V+Tk0V~`xT/');
define('NONCE_KEY',        'lS6WNW{r~8ZQ E_V5rNb+>~%T#THOkY@;3e?EK|mf7Mk*o meXJ]22}K%&TD#z34');
define('AUTH_SALT',        '7%Wi4iP}.%@4/:iyj=camAKcW!!txUdH0+qy)x.Jr,(f*3E,U2TQBy8n.YgVm0zw');
define('SECURE_AUTH_SALT', ',|/Y~MD,~&J!K!9wxl]?|o[[*VS&e[8Nh]nl-&(e:1%R/ntY/v4;<+%nM-_:BE+7');
define('LOGGED_IN_SALT',   '#R,$xL^WE]Jk]SqLkMSP6ChhlD3,yfrIkpVx_O5{o:hH|5hs3Nu<u,s2{5e:02xu');
define('NONCE_SALT',       'xv3xg@){M4Y%I)M33%G,0;tQp.f:C:}$8L8~#J</)oF}tMbpt*Ws$=Bn{NTY Re:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'anac_ip';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
