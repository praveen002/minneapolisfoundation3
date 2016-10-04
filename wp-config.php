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
 * @since 2.6.0
 */
define('AUTH_KEY',         '6MMS-,yB#j8-Qwys]=Riv!?NY43x5MN1]]iieQ,F97%4B)3`}v6jw(5{M/bt#fyl');
define('SECURE_AUTH_KEY',  'kv%|S* U~S}<{M}wEw!)c|q~@qQ?c3n-,Y6k#7iHAq7{B.j*8K%Cb3RO^YGoxz~P');
define('LOGGED_IN_KEY',    '?Y$iJc1Y=5swpHJ`b2W:d/VMQ?/Xv12p90&do%WJ;&K5P/U?Ei+L.:-])4;lrx,!');
define('NONCE_KEY',        'RXPX3Q|ZSb.mjF#3rYoGsJc7IeE+<~E){Y&e.v>@k2?NWV@QB6{sO{RGlJ=*Cb7!');
define('AUTH_SALT',        'knmV7MMOLdAizldF;f$+p;mnswdh]j!}3`4L6w|EI!UOwzo^g y7$TaUL*gwmd.!');
define('SECURE_AUTH_SALT', 'r2tcFD>1<@efdHHJJvR0y6kQ9vZNWn|<@3k 10:BN8t|A*7`$.^qU`6@IE)kBzea');
define('LOGGED_IN_SALT',   '1t3L0Q 8{|/M~x[x9:Z=j,Tz.5_Q6ta#S^],c?TY7h,1x`fik,Q5>m/zo+.EDQn/');
define('NONCE_SALT',       '(lne&-q1LVwHls|s44 V#.~4kcBm[6>Ul#f2({k<2j]$20!h_&X+;#8H?`fuo7z-');

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
