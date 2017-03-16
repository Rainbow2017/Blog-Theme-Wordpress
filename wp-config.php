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
define('DB_NAME', 'rainbow');

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
define('AUTH_KEY',         'wy3c+TSAzfc9aCjyHaFU$h,.bFwO:tly,,w48YC!x]sIzMOf)Xjt,k%++W99QOUz');
define('SECURE_AUTH_KEY',  'zY,S47E.Zm~.++7fBS-D3Dmwk(7ul`2Q@X,(#Ig^.?wHK`$in0abdm*)TEh3aN#A');
define('LOGGED_IN_KEY',    'lf0c~.0Xx|*X?e7]4uRPqg+b2pZLr+wB(5-$}]mE7n6H{Wb8LT8uNEhq&IQE=;29');
define('NONCE_KEY',        'GG`^D%fNZKZq3Jm,cwV#]dux>v?t6rTEXU(TT1/#0-(%4!YDcY|LHKDs:jwTKg%@');
define('AUTH_SALT',        'W GWX}m hv8;veW(?vi*EigImjDx?+)`QG8X%PDX=/l^t#@-j1_`*tdh5|: fw4H');
define('SECURE_AUTH_SALT', 'GC@&>l@9CnI*#Kb+z xm`sC[F+Vg iCAJ+q &ZD[Czs.M@+56,J_}uKJ]WDsq0ii');
define('LOGGED_IN_SALT',   ',)!j0#>+_%L5l]zx&K^Q5zw7bakS%DBz* {_q-nO}LrGOmx^vDcLu`G1VD@:xnf.');
define('NONCE_SALT',       '0Fjkk~}+%:`T*12Uejxcwwi?`nwS9jZo&)0ggG|:zI)F4 f1QV:]kntj_p ;Kw7Z');

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
