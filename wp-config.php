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
define('DB_NAME', 'vi_thoitrang');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'nhutnhut');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define( 'FS_METHOD', 'direct' );
define('WPLANG', 'vi_VN');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'J8[<*3z9gz+ZLt<(>Oc~h#FB`|5J-([J`p/:g*0J_bTK6~]IJio{2eg+31=+z+,L');
define('SECURE_AUTH_KEY',  '>RS2{WA>{PSYs,t:8J:f V#<Yewy-Uo_a9|>Y.k!*bY{saJ%2Mq;%3Y5+h=|n<Hd');
define('LOGGED_IN_KEY',    'oXr<Rh:e$#S`{m5@&lI8X9[ma;M4^c(B2;:<PQ#EI>8OGCa8!(i&cOk|AU+s#Hm]');
define('NONCE_KEY',        'e-O:J={0_.JjnG_Z~GDS[oj#i@+o43~Xp08IAHwXGIDzi(Twt=Cb(+.|-L.6rimc');
define('AUTH_SALT',        ' cY+l,-{RXcZ@N~+rV93p-y<}G>s0SBiS:TT}FUpdPC#{#{kxjH|@4!Vvh:YTvkQ');
define('SECURE_AUTH_SALT', '=S}372aQA$cw<%vYONLK~JPKT!ZN2<(JTq/u2y4>v])?|Q nAb6+DN-Y.EvX3@qd');
define('LOGGED_IN_SALT',   '{)`Ai&L%U(AGn-~1{xe7kJ=1vt7ANv]-}-XvE&7_kTR)+Y6g5!._hIK`3q.-3fx`');
define('NONCE_SALT',       '$JHOvx,+(rD)8g/+z_brSj.syqS2pL_nT;jFv|vg&dbQ0%m)tkG^BEY+-<J+{y5 ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tt_';

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

