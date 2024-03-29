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
define('DB_NAME', 'foundatiDBx8ydm');

/** MySQL database username */
define('DB_USER', 'foundatiDBx8ydm');

/** MySQL database password */
define('DB_PASSWORD', 'QY3yCeqnyT');

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
define('AUTH_KEY',         'f<66Aum<$u{<bTfC5RO!-||_91lwosl_KCZSWC591Dwp]__;#dWthaxtHSKLDeW]');
define('SECURE_AUTH_KEY',  '7F,4}>8kvs!gZo8NGR@}|40doh!Nd3Emyq^Mmfq73EU^3{nrj$IUjFBQr^9P;]9');
define('LOGGED_IN_KEY',    'ITIb{E31K-p_~1]athexH5OLeW#9;]Dti+x]*PmaWp9;HDXP*2#FZ[@0:G4o!ws|V');
define('NONCE_KEY',        '8mbuAXLIb{*2I6q.yu<XMfbuj3QEAT.y{<B3j$qn^QEX1K9p_~t#Wphexl5OL9S#');
define('AUTH_SALT',        'fQfMB7Q^v>,7}cvrj$MBUt#+LeWSm6]DA2L+;.*2iWqm*xHaPLe;.66{Eu<+y{bP');
define('SECURE_AUTH_SALT', 'Bq*PiWTm6]DA2L+;.*2iXuqfuEbPMf<A6{Eu<$y{bQjCWO~1|_5lZsp_wGZSOh1#');
define('LOGGED_IN_SALT',   'r$I7QOHW]91;Hxl~+;_SpeatD2LHAT.6]<Aqexu.THbTm2LAZsC0KGZO~1[|8odws');
define('NONCE_SALT',       'SWDSLa_2]6ixm+HXNz[!:Zkds4JCR@:Gs!w|RhVl1G5Kw|BQ7Fr^z,QfUj0F4Jv,');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
