<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'if0_35904735_wp90' );

/** Database username */
define( 'DB_USER', '35904735_2' );

/** Database password */
define( 'DB_PASSWORD', '1S]7kp8X)5' );

/** Database hostname */
define( 'DB_HOST', 'sql206.byetcluster.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'skqpwenbyc7jq3jlwswkt58dzghcwip3l69xrhxjvgevjiq0ugyuoeujavej3aki' );
define( 'SECURE_AUTH_KEY',  'wsiz1yd9osylgabuucfpxsnfprn2hbbcmlnbc03a7zctjjvion1vdb3wrvmb6zsv' );
define( 'LOGGED_IN_KEY',    'x4uhz4q5bzflnbiyobp314rav29uzj7wyvnnzzz8xl6ajbm9dgb0yqgknbe5eils' );
define( 'NONCE_KEY',        'qkwgqfvrkdl5e74ku8b5iyvuzc2ie1nzxtfvexpqchkry8xjqqunh2miba85lefu' );
define( 'AUTH_SALT',        'boicl9n8djbyhne48pwgjufz3c5ypisynck5di2prlxisgifyvizb8gmygvaxs2w' );
define( 'SECURE_AUTH_SALT', 'fvvegrok5q90pekua1nytjyc0d3ssux49h43quwpv1zdbfprrw7ymbxcrcgmk8dk' );
define( 'LOGGED_IN_SALT',   'hulttqsp0wlpvpjtsxqjwqjl98u3cekfovxsnnnewqnvfhvoddtysqbyig4phklx' );
define( 'NONCE_SALT',       'xkiom4udz5wmgfwunnzadjx2m28oox924zi8li5cestsutynlslsfd4kjzmutgoz' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp0k_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
