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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'V99+sSmyaFJ87huCdje1xoNbTpdXsgkxWZ7fN586MDPfBro4cvr/1TqaXWcKNEDD68lfchWvFVKA8wU6nON1zw==');
define('SECURE_AUTH_KEY',  'zHjX91CDn/I2dqBEimM7pq1Fwtjh15nCFLvqDt8nBhLQSzqsGmfnCRRP/vl0vJghgMiyODcrmMPSLLAVfxd77g==');
define('LOGGED_IN_KEY',    'aWqUJA3GfrAlLfM6ozhA70WWiHVpZS+eoP57x0qw4ar6agbfZAU+8Qw7e3TFwdyHpceZnaRuD070XkS5CwoLIg==');
define('NONCE_KEY',        '7sMD8E0+p3U1cQM5ZKUSQNJKgaWbJAIu72sg9CGZGXehMU0JthPRxUwrh5bNZN3xUjI9dvl02es/dZknnn+JWQ==');
define('AUTH_SALT',        'M0CVB9CI93R/Gx0VScKSZAk0RWJd62sqAImv+mkF5tQ9gsAGMsI0hRMpOvXR4jJVV3ai8Z1PxeR5oZ5SA8AePQ==');
define('SECURE_AUTH_SALT', 'eatBauI1B9iAkBiLJ6xtyW+a8P9l941l5Dx5ICd3rMowbDuDCDaHsfoD3f4xIIWveAmmhu9YQbUneN/6kBn5Dw==');
define('LOGGED_IN_SALT',   'QpRzAEI9AgZjE3aWxn/1dKRZbA6S1Cat/bmdb4QwSLUXW5Vcm/BTzxM27oOAlYm4mDuTpmeC1kTiVxqvHVk+qA==');
define('NONCE_SALT',       '2UYJHl9bth0FZc9l8qRhnfhOW+EfyVfWjx4SnhPx46GWsYKx2AXvqhsgksripihPOM1z+NXowRJIMyrhLuobSw==');

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
