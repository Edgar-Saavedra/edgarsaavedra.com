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
define('DB_NAME', 'saavedra_personal_wordpress');

/** MySQL database username */
define('DB_USER', 'root');//saavedra_admin

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_HOME','http://'. $_SERVER['HTTP_HOST'] );
define('WP_SITEURL','http://'. $_SERVER['HTTP_HOST'] );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'VJ|a|_fayh_|>`&h$K.>BWAl 6-|aMiIYqMkeM8a/0}C+uk^RQv<z/k*gv%,#06P');
define('SECURE_AUTH_KEY',  'lIG(4SV~ Y*f01LiVst|vvt&pE48-|A(Y}]M-!u_b+6/tY`FZyS/UMDprY:GZxT;');
define('LOGGED_IN_KEY',    'BWjh_mWJx`7NZhn-L2~jC|X,#e_pQZ?2u!Z+9MmK$gl6{~nlAa~?a`vMLpf<}.ui');
define('NONCE_KEY',        'o-P,B2@O.CWbgT{U;c:!5OgYK=G%zM%$kPJ39uos&VXS.Ilfq>r3{3IHNHe )ac?');
define('AUTH_SALT',        '-@2-[J,m!8q[6W^1cfv6SJ$uFl{|E>l7?]h&FamES|)/^Eoc|C9|-]K?hm]}S|2%');
define('SECURE_AUTH_SALT', 'H6W$Pcxz$-Y=Kbe-vMI2>q:R-)pQr^ubqyU|nYO_oeLW1Z}Ila;|mBT;2>SDqD12');
define('LOGGED_IN_SALT',   'd).gpkTjWznfI}2]/2q3^{YPIZK;iNJ#4vf hQr)rz`XKM!|vQRlEkw2+bor@Dlo');
define('NONCE_SALT',       'WL=-p+,%e+*{)Rp=>MXL8_A%J|Q>-9cy/?WA E`x*5j=8S(jR>aC)79OPju,);8n');

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
