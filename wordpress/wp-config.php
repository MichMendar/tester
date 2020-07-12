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
define('DB_NAME', 'D12AfJ_tester');

/** MySQL database username */
define('DB_USER', 'tester_user');

/** MySQL database password */
define('DB_PASSWORD', 'testerpass');

/** MySQL hostname */
define('DB_HOST', 'testerdb:3306');

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
define('AUTH_KEY',         '8462e0937762acd798b7c637edff03fac007b30c');
define('SECURE_AUTH_KEY',  '25931f4a1f24e3ea295e200426b7d5ae29b6c1bb');
define('LOGGED_IN_KEY',    '9d38a838a031e2fde2b2189bf536aa5c17b122e8');
define('NONCE_KEY',        'e8acbe70fb5fb36834e524fccddda92ba7a64d7f');
define('AUTH_SALT',        'de7018ec0f3e7288bec6389a03e87e1d6c49a2f2');
define('SECURE_AUTH_SALT', '0f7cf3b2c34a2da12e6b5ba18f7d9a88e71eb774');
define('LOGGED_IN_SALT',   '6c81f2de0e17ec94c98c9e113f17e95780064a4c');
define('NONCE_SALT',       '44919a9772bc4b60a615e8905dfd895eb495c7fb');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_eE1HF_';

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

// If we're behind a proxy server and using HTTPS, we need to alert Wordpress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
