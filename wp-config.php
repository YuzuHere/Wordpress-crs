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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'klaudik1' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+YzTnNUnspJipthG76dg74kNMxOsTm0JM0mEAE1HY0Qzt79tNqDoSlSKExDi+VutyOE1I+LFKihzwA0cZ2+NRQ==');
define('SECURE_AUTH_KEY',  'OXmSfeeackgjeExdAXYXIPRnj2HdpIj2Zw2QyYSOps6aQ3Qgvg6C1A+awdI6CUebE/B5/0NFSeN2UtcDpRGPvQ==');
define('LOGGED_IN_KEY',    'MJK+ds8RRdIiQquAYexGTkrlxgMa8kihFqpO54GJLAt+rtNiT3L90WtFJ+hplSLXNzVm+dsh7ovX5cWBx0djfg==');
define('NONCE_KEY',        '/qtgV6SJwIB/GHvJC/7HWQEi20K124tQLWIZ/LCZKfyfCOnWCF7lOqA0ZF2+atm4Ych6C01QAK6rdsSOpDvs/A==');
define('AUTH_SALT',        'o6q7GB0nEcwlJtk3G8TNnsk9dTaVmz6eNAv7rt8JzihcjBCdYTdUk8TXDUBVEmMpW+C0MwUwx57Tsbc+JlLO3A==');
define('SECURE_AUTH_SALT', 'dro5aEzw+maVWC3RbreNMSKkwAORvPla3neTJPgWIYfg2ysOCnCtQvnbMCXfFgKIq/K27haF1S5YXlSMaw4x/g==');
define('LOGGED_IN_SALT',   'kel8GXwp/yR3MYawJf0d4hSg8gGKmpucgLuzbFQz7RQABAtHrwwOFhEOeExJcE7Pa1Boi/xMJaqjiQT6/mkGeA==');
define('NONCE_SALT',       'wLnQQo9lAYEr0itSlyTnqGUo9XyIl4TiGdnmEuaG31R3HXCrH16RklsPYf27VoHdV81IBg136kHJmKrbglJSXg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
