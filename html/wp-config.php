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

$db = array_merge(
  ['port' => 3306],
  parse_url(
    getenv('JAWSDB_MARIA_URL')
  )
);

/** The name of the database for WordPress */
define( 'DB_NAME', substr($db['path'], 1) );

/** MySQL database username */
define( 'DB_USER', $db['user'] );

/** MySQL database password */
define( 'DB_PASSWORD', $db['pass'] );

/** MySQL hostname */
define( 'DB_HOST', $db['host'].':'.$db['port'] );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         getenv('WORDPRESS_AUTH_KEY')        ?:'put your unique phrase here');
define('SECURE_AUTH_KEY',  getenv('WORDPRESS_SECURE_AUTH_KEY') ?:'put your unique phrase here');
define('LOGGED_IN_KEY',    getenv('WORDPRESS_LOGGED_IN_KEY')   ?:'put your unique phrase here');
define('NONCE_KEY',        getenv('WORDPRESS_NONCE_KEY')       ?:'put your unique phrase here');
define('AUTH_SALT',        getenv('WORDPRESS_AUTH_SALT')       ?:'put your unique phrase here');
define('SECURE_AUTH_SALT', getenv('WORDPRESS_SECURE_AUTH_SALT')?:'put your unique phrase here');
define('LOGGED_IN_SALT',   getenv('WORDPRESS_LOGGED_IN_SALT')  ?:'put your unique phrase here');
define('NONCE_SALT',       getenv('WORDPRESS_NONCE_SALT')      ?:'put your unique phrase here');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ti_test_';

/**
 * URLs
 */
define(
  'WP_HOME',
  sprintf('https://%s', $_SERVER['HTTP_HOST'])
);
define(
  'WP_SITEURL',
  sprintf('%s/wordpress', WP_HOME)
);

define(
  'WP_CONTENT_DIR',
  dirname(__FILE__) . '/wp-content'
);

define(
  'WP_CONTENT_URL',
  WP_HOME . '/wp-content'
);

define('FORCE_SSL_ADMIN', true);
define('FORCE_SSL_LOGIN', true);
if(isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') $_SERVER['HTTPS'] = 'on';

define('DISALLOW_FILE_MODS', true);
define('DISABLE_WP_CRON', getenv('DISABLE_WP_CRON'));

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define( 'WPLANG', 'en_GB' );

/**
 * Cache
 */
define(
  'WP_CACHE',
  true
);

define(
  'WP_CACHE_KEY_SALT',
  getenv('HEROKU_APP_NAME') . '.herokuapp.com'
);

/**
 * Redis settings.
 */
if ( !empty( $_ENV['REDIS_URL'] ) ) {
	$_redissettings = parse_url( $_ENV['REDIS_URL'] );
	define( 'WP_CACHE', true );
	define( 'WP_REDIS_CLIENT',   'predis'                  );
	define( 'WP_REDIS_SCHEME',   $_redissettings['scheme'] );
	define( 'WP_REDIS_HOST',     $_redissettings['host']   );
	define( 'WP_REDIS_PORT',     $_redissettings['port']   );
	define( 'WP_REDIS_PASSWORD', $_redissettings['pass']   );
	define( 'WP_REDIS_MAXTTL',   2419200 /* 28 days */     );
	unset( $_redissettings );
}

/**
 * SendGrid settings.
 */
if ( ! empty( $_ENV['SENDGRID_API_KEY'] ) ) {
	define( 'SENDGRID_API_KEY', $_ENV['SENDGRID_API_KEY'] );
}

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

/* That's all, stop editing! Happy publishing. */

require_once( dirname( __DIR__ ) . '/vendor/autoload.php' );

/** Absolute path to the WordPress directory. */
if ( ! defined('ABSPATH') ) {
  define('ABSPATH', dirname(__FILE__) . '/wordpress/');
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
