<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

define('WP_SITEURL', 'https://' . $_SERVER['HTTP_HOST']);
define('WP_HOME',    'https://' . $_SERVER['HTTP_HOST']);

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
define( 'DB_NAME', '');
/** MySQL database username */
define( 'DB_USER', '');
/** MySQL database password */
define( 'DB_PASSWORD', '');
/** MySQL hostname */
define( 'DB_HOST', '');
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'CHANGEME');
define('SECURE_AUTH_KEY',  'CHANGAME');
define('LOGGED_IN_KEY',    'CHANGEME');
define('NONCE_KEY',        'CHANGEME');
define('AUTH_SALT',        'CHANGEME');
define('SECURE_AUTH_SALT', 'CHANGEME');
define('LOGGED_IN_SALT',   'CHANGEME');
define('NONCE_SALT',       'CHANGEME');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '';
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

define( 'WP_DEBUG', false);
define( 'WP_DEBUG_DISPLAY', false);
@ini_set( 'display_errors', 0);

# SSL Termination fix
if ( $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' ) {
    $_SERVER['HTTPS'] = 'on';
}

# Client IP address fix
if( isset( $_SERVER["HTTP_X_FORWARDED_FOR"] ) ) {
    $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_X_FORWARDED_FOR"];
}

/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );