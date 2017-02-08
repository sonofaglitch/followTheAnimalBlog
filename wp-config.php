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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'Th3B@tm4n');

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
define('AUTH_KEY',         'Qnd|){YybqQUE>~blTQ?1#;?z%Fjv.Dl|/,Gxa7KMcDw2Dc.>>/z{%-Sjt<%t%^.');
define('SECURE_AUTH_KEY',  '88B3#o  *O+lnSEyzBUt0hqNh!/]!RWB[]3f0i&@U+]0OI`]V^)j/{]g[IF1=uJ+');
define('LOGGED_IN_KEY',    '^hPXBBL}fczRDU=*-[(l*NSr*bw$nwC>)ve1+?/c~QnMfn<W+ipAg*~xi064;))e');
define('NONCE_KEY',        'f Cs[z5C`#}4i$|Nu$SJ%hgspS_h!*Vq6|!&znvrfF-{|Z]&--cqcxhSiw~}6$48');
define('AUTH_SALT',        '5V)?,|#7p-I-/#-[~CHe{c(<S8n&*{q$P`v+yiUD;R6CJ/}7M_}?w~c7Pxz`R^4+');
define('SECURE_AUTH_SALT', 'T?x!?,8Ho%mN%(HiTk|)Thg.dKMC3qn_2OV&s$.}G-Q*PxznD5a,!+UB+O!RD5zJ');
define('LOGGED_IN_SALT',   'K2gO24$zz??-w/k2U:iu+G+UWybi|c|WS4Lzu[tUC|R;D|!;g>KL`#BLOT?XF{U{');
define('NONCE_SALT',       'hH|H^r|k]rPOR,FxfGp$_nPK@#KY`1 `tZ<y8,sA`a,7;z=2l7oORU ];&)NmXPA');

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
