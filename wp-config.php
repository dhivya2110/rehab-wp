<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'malt');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'r}>B1-zr+M.8<rQE.]EvO5=$uBC|@>e,{DWfFb (dpC*|>3ZtX^ 5nmuXR277/~L');
define('SECURE_AUTH_KEY',  ';HIrRZEP{_0<3Ral4FIo&vem]1/XTK4&Kon};c[Lxda7)5EUOQEgTPdVqss:MLC^');
define('LOGGED_IN_KEY',    '|1.#NHJavh4Fk_FEWP@U2/xQ){#<K<; q,(_GBKjcNkZ%gk`Wot]D->G~-Ft0sIN');
define('NONCE_KEY',        '_f.Sl^D/%n#/Wv9{Jsr:KoH!Kc+]--Kl0c{Ib)lk;,[>&KU~FhwC2%]Q;1^T{N4D');
define('AUTH_SALT',        ']K=~S_V#rkEkQshl#+@_DZ^sJWE,!]tZ>W3J/A0NiK@8;<:Y?Gb79iG`[spZ/E#V');
define('SECURE_AUTH_SALT', 'O~A:1x1)TOv[{^<L lDE;8z}A!be&/gy(ER+9T*A@)<dRO;sMW|ubI7.qxlMBP{,');
define('LOGGED_IN_SALT',   '6rvtk9Wu,-nKF>HoIJ7 >1fqOj1GB9|wFrfKrO=r.gM+]`[6nHP81LKof*B7}QEx');
define('NONCE_SALT',       'za.!vw7CdJlD9RTHp-rcj0WerGR>|_D2LXbqBZN]KE9[cVpzP[XKCnyE@gb0=|0 ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
