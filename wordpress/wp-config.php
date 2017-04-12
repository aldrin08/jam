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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_jam');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '/!hyAD%hXD]mrl/@[[txW=~youY?xDfEzke1DXbnSEHc ^d4CH7SIv:cM{1TLbcB');
define('SECURE_AUTH_KEY',  'xlTe1dZ]7UUjdC,wfSE>x}_SwND{)Ks?|f[o<}>G%9,<@H~|*<Y#,x ,%O3vN(8t');
define('LOGGED_IN_KEY',    '{EvPuW%Pvk)&4Kf^ns);wR&tA3yQJnB1t4[[MR{:s$*d54{q5I:=~q/@gj`hI<[j');
define('NONCE_KEY',        '1f@E)+tm9/CG06nL#;C^`zY.|Zvp/=}T1Wuk&c*(zHg~=lKxa&&72#~rY4|)=/|Z');
define('AUTH_SALT',        'fD`2,6T^h[|]P8Qpv}:?4siZaYO#x:Le+~0{?6=m?V)Bq`S_3Z<%#*mf7|I#WxIV');
define('SECURE_AUTH_SALT', '@~JKN>p)[Vy.-zQgz#=BN@UkS#;=.Vg6B- %YfU&)(;nc}URKe2[4)<i#x@~Xc$M');
define('LOGGED_IN_SALT',   'v@iUxRf?b-tB9[JdKNA+X^aO!O2W{:#3j0l$BJTb{EXQj+o&L#t5[p=S.azH+XD6');
define('NONCE_SALT',       'CY/Q.,}{*H/YFAz>8/l/^!fDA6t%>2k*HdF8{JmoY(7w)chXM1wy#,}S)pp_ngE!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
