<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
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
define('DB_NAME', 'angelachamor_wpaccp');

/** MySQL database username */
define('DB_USER', 'angelachamor_wpaccp');

/** MySQL database password */
define('DB_PASSWORD', 'B-6-nS5x1p');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         't73x6wqlfg8aws16sjqhfhjky2noc5dphjvlwpjtybu5w8n8u6kt4gcdh83t0x21');
define('SECURE_AUTH_KEY',  'zxqur5hktraxnaujrmtburosyzkbdrrwoqfx4cbxr2cf2tmvwhf1coyptanbsibv');
define('LOGGED_IN_KEY',    '1sobcfjftt5stcoehncuz44pqf5htenhexr0t3z2zk7bwnx8bkca4xc8sumpkcoy');
define('NONCE_KEY',        'hf5kxk27tvptrjgf6i85jguu4fffmettepzvszjf6lqeotfwralcai2xyhxemvw3');
define('AUTH_SALT',        'fk7sw3saqnxbnuh4igrq4yiekvzrmxwj9rqilsz0i5f12ydswxsuy9s9bqja23ag');
define('SECURE_AUTH_SALT', 'pau4b0a57wog63nntbaqlqx9e7iua3qnyoc3uyolcqercbdoqssavpal7d7ywrkz');
define('LOGGED_IN_SALT',   'rguuxd9leuzlrf9cc0pkmxqvwwkjhrx4b404aqtml3jkautqiwsg3tw0q5wejooh');
define('NONCE_SALT',       'wywxyvmbwg0wqe47ey6kic2oswg7smn03vbyrgpvyyvckzje6nygulvjcy0yyrxr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpjm_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
