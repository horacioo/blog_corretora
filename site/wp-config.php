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
define('AUTH_KEY',         'q-#S&hrH3wE$n9nkX8O1Uh#Y)o;Q +kw2Vv8hd/wF~u{`xArXkAc*onV0bx_n5z-');
define('SECURE_AUTH_KEY',  'LNLD7het}csMP6cf![4S&Z#Sl,WlZbX*_ {&kVj(F^-XSeT(3Ut%~g}Ad]>!*GJ]');
define('LOGGED_IN_KEY',    'Ubw=c Gze!l2k/eBy2;!>m `>#30X%t*t|3o@ER9#LNv%]2x0&-;Oxl6d15Xv ^]');
define('NONCE_KEY',        '_B!5^tD8%q+{XB?DO]KD`PZ5e~h{0_o/wlh- {%ioteVpfZ-uUhe[j!2LHU9fV(s');
define('AUTH_SALT',        '?`uF5v8|r Z2b.3qey~/k?E(?_ICJXh=bh{NR[n#Hr7}9tw?BxUwThQ%3uPE?nWH');
define('SECURE_AUTH_SALT', 'fG/s#L$f|[]YaHx$--<BjYK?(?DVrB4`-XOFsSxFGw1^_MR`gaIb6QiO^qCB/z+c');
define('LOGGED_IN_SALT',   '1lQ^ydcNn$H)E2y|P=F|+D67_=0h&)BZi^4}ilUs~!]}7KTI-B;To[Z tU*.[msN');
define('NONCE_SALT',       ';H~iobPa5V=2ImDa3PADe`25o,$rkB{.Y6j03k:z2/j.jxT9?lYd+:tOVK*+YjDp');

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
