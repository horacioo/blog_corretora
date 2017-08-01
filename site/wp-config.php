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
define('DB_NAME', 'regisepenna');

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
define('AUTH_KEY',         'H,L|@C$|i(6_(h%d(vLgd76V;5@5-yDJ9}4QB|c.~BxBO*~>#2V1#>./MSy_;k&`');
define('SECURE_AUTH_KEY',  '()*_]ws&%y-;zfzA!AMG*[gcIjEzq>s#r(x &yhM+|4?r7*ax9c&BH@@upd9s686');
define('LOGGED_IN_KEY',    '-sdT6p1%D$^c>6QPi<Z&pq*~]6Jv: _lmiScp]^q1/H8{%#tNSiUrJyP5jzVMz0-');
define('NONCE_KEY',        'PgJn#upN}U9 molmP;;o3Di7+Ce=HP35rvYvAdW3YvcY?7z7.~?3<Y:gXMhDV/cq');
define('AUTH_SALT',        'b4=A4jK[Do%j:AoarRd-1#5eH8 `d@PgFF[q@DXdVn)-):G GR&MnJzRkKG<,xvi');
define('SECURE_AUTH_SALT', 'cW-lZR[.K;IN:rY)!A3yFv?!HAmXLL>!t(^2PtRZ~Hcpe&2QwM$5?OmSoMXYLTsj');
define('LOGGED_IN_SALT',   ']@{<H@EkD=1Q0rcIpKM,8Jnimu1{!}&PP~Ho]@%eGCNs,Tgq^h4Eygk#)ksTv}3L');
define('NONCE_SALT',       'S nQystQ!?qf,U{0Ehpw-rA@9L:|8qy)u/qG&$]1}TzU;nTq4*f?y7z|yS6UZ*vy');

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
