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
define('DB_NAME', 'project');

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

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`ghWV32,>E1Nd;;-0NcsDN|<3m3/BI|NNcN2%- F4s.EQ)aTBc@Ay~W-C])_lf%e');
define('SECURE_AUTH_KEY',  'B*y)_x-|^]hw;j`[--Z2|<~1~5GO)?v.EW<u@,rX}pFhgNN -Y:3g[DSnT@{j^l=');
define('LOGGED_IN_KEY',    'JK[UA2>uh$>|S5lqcR^#>,Fp(e $|5fIV|rNx6^So` 9Y?@ZBLtwp-2=p6Uo9yt3');
define('NONCE_KEY',        'v*H>(FaxZY@#|ASgS=6yqPa7gW]nO?]t~@i3ohnyg-|w|fN(o-/?M^CsAG}N[pHC');
define('AUTH_SALT',        'x9U!OuW*N&*oj $R+}|q_|2PgSx7WoH5@1dX%$E:0v}Tv-gi.^Q9Uc3]_4gJ5*:F');
define('SECURE_AUTH_SALT', 'jj~DN)k]l{J62Al[%aN2LCgvBmKp6G_X-ehJpE=bn4-om3d8F]w&p8zfosn$VVZ!');
define('LOGGED_IN_SALT',   'Fa1r=ivv< k(qd 0CrE5U@>D0E{;!_+A6a&;J(;&&?1Vtt+$B:Z,^qh3I_W/tE]s');
define('NONCE_SALT',       'AF*&KYmy<py 0ljDOG,hdR8Ad:(zBPu&~Z/(z);-NG[6H; /)uW-TsF]bJ2PZ7_X');

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
