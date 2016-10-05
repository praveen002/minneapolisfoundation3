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
 * @package WordPress hello praveen hii
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'minneapolisfoundation3');

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
 * @since 2.6.0 checck
 */ 
define('AUTH_KEY',         'Zq(IdGs*k#!m2B#{]v=3.#Y+6*z.0EUP(4A/nvy8yo5K[k8bJ7)~N5mKp[gU#6d?'); 
define('SECURE_AUTH_KEY',  '%>.3|j;#Af[dJLyO` 3XqHH:lcxOk0,%R|E}2-Ul?4$f%WBPn-`t+SpL^js@OpCi');
define('LOGGED_IN_KEY',    '?xD?h-k2TQfO%knml2kr[ In3^o{d.aybI3t4-3|jg(:*u0e7<2E(.smskH+<P|O');
define('NONCE_KEY',        '>!<STt~sBZO<,x9O -#_JQ0{g [[/MJ6`LaKb^E~7+g,PA5Ng<@HqTYtu|z2/+cj');
define('AUTH_SALT',        '[4pG7l8{`Xq-[[pW7qEwIp;0or$t&jOaQD*X^iVw7UePAWhQ7rI%tnsw(>x]oMd.');
define('SECURE_AUTH_SALT', 'p%|t.7VR$66H&17$?dmHD~.-+s,29%M+OqK-_)|IuHe!>{$:!.b[LX0C?RxE3r1c');
define('LOGGED_IN_SALT',   'qo>^X5-lQtL{;~z:|gY,3gM9|X `hy|~w3]p[>?kK&AC#Z+;Fp%DW}x_<$--Rjv;');
define('NONCE_SALT',       '.Pz;eP_iMsM$u b#_dB3H+8o:lI(,C,#ZN}5eBDE-$tORR7$0=rOHxb4D(FyNu!5');

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
