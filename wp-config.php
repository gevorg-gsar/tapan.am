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
define('DB_NAME', 'tapan');

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
define('AUTH_KEY',         'JHvAAuS]9eYWhA*_u:J>9`HIYuFb^{$9[P)`Rxva.I4YyqlZ|kZku5(uua~+3fz)');
define('SECURE_AUTH_KEY',  '^Y^Bdy7j||8Vpp0T1l%c&03u8VMc ,__Q{}/(o~K-={q% g!gv&dZvaK-f.X]>HT');
define('LOGGED_IN_KEY',    '^P~]akXXvp=l2w3Z OJ=,L/mu9)Jy^|n%NW7zfg5xq+;&R?^Nbn4E: )P*8&(:XA');
define('NONCE_KEY',        ';75fgJ]va)T;}^T/OIXCaf5BqQ*M<gaQOoEg;s:Ctr>n`RHX=.=G{PI3G{gZ4A- ');
define('AUTH_SALT',        'R[{28N_p~}Vks}:M1dkurv.ab&b!OI^:8nlmQ;eP#ou,jLGvhw#1W83DSo((x<p|');
define('SECURE_AUTH_SALT', '/66&{G13Xh1F,e$;;Q&c8l[cRoH)Mtj1%c_EiM2;xmB>7H7o[sb/:0OzHayPA/)>');
define('LOGGED_IN_SALT',   'V(^ZI,(K 1mc2jHYc_gA6+8&5qD`0T|HP}?((*hf3rq1E0mU=GfTGSih0h}^m7%K');
define('NONCE_SALT',       '`;}~Bl]I:__QxtUaVep%#zwtW^8m MT_Sh1}<Pp6>/3A@<EOdeWRKM@8{3}(Z~NM');

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
