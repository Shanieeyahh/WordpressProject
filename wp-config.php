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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'usbw');

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
define('AUTH_KEY',         'heE.3EEnD:)cl s9*)xPOY 1tpX$)jWR$t!]d|=Jbl[^_)A:#mLDMABjk}Sy,_&*');
define('SECURE_AUTH_KEY',  '|G1HSlDUPU1fajvOY?+06KqnZ#IRY}B4V<<@*(Jt>b5D#SaS|g2^t`K(=Y;)~YjK');
define('LOGGED_IN_KEY',    'N/`m;N#hIIfE@DZ1J@Jr|b| :[}b#I54Sx`Mf%{*sZ:wE.9)z*zX*^mD*7KP=cK/');
define('NONCE_KEY',        'jje[~H?X|{R9[d5l8Q ),okc:lN9m}:@h;t4ee/p.Vk4>$8%b$|Q5qMG*Z<>jFO%');
define('AUTH_SALT',        '&^YhP5vt1xs:9;Xt5 L25b~o4a@r]W^[>60(4Xxt !vl]g:aK,mO^ OuXWcWDzG_');
define('SECURE_AUTH_SALT', '{}kkWV(MGTzYk`1g,}2vsY|Mi{~.R/-]vxr0/cBsL:pQ^?9)!x]Wm:FVg==,[.cM');
define('LOGGED_IN_SALT',   'pTJAK5VI.qwnt)M`M[5AKkak%Pb8Y{vTo0=g?e@LMp(67Epq4=P ~pilK`]=fsja');
define('NONCE_SALT',       'if6++Wo_6*+)Po866$ yxX^71Is%].nh-O[IBJ@zSwJz, o^y.OEwL<JQ_!n]Fi@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
