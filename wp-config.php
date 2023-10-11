<?php
define( 'WP_CACHE', false ); // Added by WP Rocket

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'collage_shop' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'yqcr3xb0jqrnvaxpgr3iq4js8mqrmz6sxpbohsj3g4o566h1dckzyqifzxf0vrg2' );
define( 'SECURE_AUTH_KEY',  'vzghddxwkj5nrdgoe2slz1tpvmwmzdbhb3zmgiycqcucufxcstbdaugtrunzueak' );
define( 'LOGGED_IN_KEY',    'tcgdgpr8sucayu2be4nubwsebpbx3dthz5g98epjcmkim0savjwk9gstzbica76y' );
define( 'NONCE_KEY',        'xslipeaslqe9ayaoekumftxkfdjfsctgves2rq1cyrw6vjfadiumnhnp5hf5zvry' );
define( 'AUTH_SALT',        'qjmt0o0dayx0uyakoe5yt0y8lznpbg388zpx7eq6yexfqj88c8zzsif2iucmxian' );
define( 'SECURE_AUTH_SALT', 'euonamwxpiouqxfovcjqqa5luwjybxcq4iu1hifpol5du98izwww37t2nvvfgudl' );
define( 'LOGGED_IN_SALT',   '4pjzgtacjqhtirdib7bpsuqhyo8l8lkjxm0cryyzfcyeygwj1ucjufsbeozrliac' );
define( 'NONCE_SALT',       'k2c1kmsjcatcael3zpiv3knley5liamgw0saz7urqihw9leugzrsb7jlhtny4vko' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dl_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
