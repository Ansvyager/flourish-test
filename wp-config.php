<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'flourish' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'KxCJHTRv3ppPsI3V54sgsjw6YL0BtiGRbd5iyRaJbFaVanSgvvhdpmGgE7nUeHzJ' );
define( 'SECURE_AUTH_KEY',  'nOygNwGL5g0ElIjBjEo5Nol0LuR2geMog3ykMLEBytTYmdiCrSKcP0Gnz7x111JP' );
define( 'LOGGED_IN_KEY',    'LUPYVhMCXSbErYekxYc5gwCYSLlgU5aUPsTIb7oDQZMaTsFaSghbLq9lFOWukorM' );
define( 'NONCE_KEY',        'u8Sts00NrHwc1CJUIM60lgndOwqTy8UqWcsMVMhZ0qpEZ7F3DZWnJH0btg0FbIoE' );
define( 'AUTH_SALT',        'VRPkocW4rClnDj8SQVZT70QKf5ti7mDokAcc8ZqhqElZmSMPW6LjvHYQ5QMISySS' );
define( 'SECURE_AUTH_SALT', 'Moe7vEG596gjhQyXPl6sMnWpRnGeye3O6hBksp58Kw4L9Aibrd2p8qL8R2t4uMng' );
define( 'LOGGED_IN_SALT',   '3I6NOwoOw5iZVe20F5oOlYIdDs2HUJ8DdhDaV4ex63wXkfb69nIHARuZPQdF2pTP' );
define( 'NONCE_SALT',       'bgurhvIrpqkl0J2P9bax23XY6nenWUSMUSnstZNlvzA9bjCl6kyhArvMFLioMheY' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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