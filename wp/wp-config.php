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

if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {

	/**
	 * Settings for local environment loaded if available from wp-config-local.php
	 */

	include dirname( __FILE__ ) . '/wp-config-local.php';

} else {

	/**
	 * Settings for non-local environments, used when wp-config-local.php not available
	 */

	/** MySQL settings - You can get this info from your web host */

	/** The name of the database for WordPress */
	define( 'DB_NAME', $_SERVER['DB_NAME'] );

	/** MySQL database username */
	define( 'DB_USER', $_SERVER['DB_USER'] );

	/** MySQL database password */
	define( 'DB_PASSWORD', $_SERVER['DB_PASSWORD'] );

	/** MySQL hostname */
	define( 'DB_HOST', $_SERVER['DB_HOST'] );

	/**
	 * WordPress Database Table prefix.
	 *
	 * You can have multiple installations in one database if you give each
	 * a unique prefix. Only numbers, letters, and underscores please!
	 */
	$table_prefix = '7kzmdpg2_';

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
	define( 'WP_DEBUG', false );

	/** The Database Collate type. Don't change this if in doubt. */
	define( 'DB_COLLATE', '' );

	/** Disable the Plugin and Theme Editor */
	define( 'DISALLOW_FILE_EDIT', true );
}

/**
 * Configuration for all available environments
 */

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3A7ScGgJlBAozzW6O7Ufil1tRLNQqEDnnCN8WNXL');
define('SECURE_AUTH_KEY',  'Gjtq0nwgMIU1zyjKhySCPjT9UJ5W2PkcI6uELLO4');
define('LOGGED_IN_KEY',    'JOQRP+ITYKsBgrRQ7OaPC8DOXpsP1OtPT3VJVdNL');
define('NONCE_KEY',        'smSr08W4+KJXp7Jfj1eCmtMfyzSji4cpOZaLrzF7');
define('AUTH_SALT',        '2562UeV2ye1Wtu/I96HnB/sIS0poGyNKT6FuJ2Wz');
define('SECURE_AUTH_SALT', 'j8SnE9J04yele20lWmTzjysi4MqCtKOd3xF/euT+');
define('LOGGED_IN_SALT',   '+hSzVQI7qkAO3s9Dwn+Iga6bz2VBpsn3k7QsPEfi');
define('NONCE_SALT',       'ZB5sw2pbEFBJpL+oaE7iN3oHX86/bzBNN3jYw2i9');

/**#@-*/

/* That's all, stop editing! Happy blogging. */

/** Hide PHP errors */
if ( !WP_DEBUG ) {
	ini_set( 'display_errors', 0 );
}

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define( 'ABSPATH', dirname(__FILE__) . '/' );

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
