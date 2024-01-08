<?php
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'jwlgKdyZwcuBiEbfbev+d7Tq1/4BIzZMhQF8Nv/ASKowmKRwR+33ZJZpOzogtvypjPw8cTqttpukrUg3+fqLag==');
define('SECURE_AUTH_KEY',  'zdJucdhSTvA6EkPoX5JXuwUSBqJoYmty/Ql4xPLxFDthsqF/jz+T/hf1ZxT4fT2T9gJfBEtSizgFoiSGt0QwKA==');
define('LOGGED_IN_KEY',    'dt0ztS4dyrMZDiQMIHNlRlUQtaGhhtf15v82gnS1sZZTTTkDrh/EPTGrD5xKaW/7UxSBmv93kzlCeAZ7FjZ/NQ==');
define('NONCE_KEY',        'VRTQRKqPWJmm1CNHePKtsjf8ZKmTUqlgayFcyurb11BwmgzDBzeRfx3Ay8ZRQx1hr7MrabBh0kNmVydWStTTfg==');
define('AUTH_SALT',        'CLZ7oOYMo3LIA/WFTLBU+VXExt3mB1/1u1KbdBFi/7wkh1efXeRftXdN40YafEPxgzPZIgfFvaf4NUNqrMn7eA==');
define('SECURE_AUTH_SALT', 'IcFdH8p5/71+RdafXUGkSaVTMFNRSzFuDLrxg2xrPNPEKHKxg9gQYvGLg0kU/FZp1FjoNEN7YGJO5TAem8PqJw==');
define('LOGGED_IN_SALT',   'w6dQF85wTAsJTzEqJoLuoeRPs6hw6gWA0z2sR89IkKO+2WYRGDJ+FbtRvaPWmHvUEq/0IBo04xlskI2M0VNY9Q==');
define('NONCE_SALT',       'fSflUzcdHs8POjvIGEo1t8ayu+MxEJUvlw7i6qquLxQ8BGizBHpVfeuMQNI5sDDV4kg8UEeA9CmPA6GrfXbJVw==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
