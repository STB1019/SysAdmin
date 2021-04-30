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
define( 'DB_NAME', 'db_pr' );

/** MySQL database username */
define( 'DB_USER', 'bot_pr' );

/** MySQL database password */
define( 'DB_PASSWORD', "123pass!?" );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'FS_METHOD', 'direct' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'mD)qd$I$wy-8q4]0sx<=$Xk?]-X:yh(GWm)|OpF]DZUU~^iUpm~!Xpm4>;(hoTmH');
define('SECURE_AUTH_KEY',  'zM:L?aL!smBNhmTG?KArxA <#m8UtgJew`xFP8,y-jdbG@3zY*=!HK}w2yL-h $n');
define('LOGGED_IN_KEY',    ':|(`w5H}Q/w|4}XXBPW;n-Y%</s@Vg/L0V+jK}Lp+~s.-]:TMrAIRACiUA|vW+H~');
define('NONCE_KEY',        'F-=6Pe,#~-.].f,5rw=65Yh9w]rQ;A>-sQ+GUe#{,p[h^Axvof5`^Y_rqxjAi|E-');
define('AUTH_SALT',        '99Az[keDP]|UNBp7+{6]~t4l{)RO=U&r>2@Wex,d{M&{A2%e1BcH9_CM7VtHHjJ|');
define('SECURE_AUTH_SALT', '{X(QkUE{xs.AsfYV0mT%aU?{bP:+sFSek3aY`DW]@x}U|tCB^8I,#gCPB2>|K,s%');
define('LOGGED_IN_SALT',   'HH8XQK7z|w0>`JznMn3FN2#1(%)nvG?]GbdW&=ti$ejn[%pK(9iiO_OAM-is}(8T');
define('NONCE_SALT',       'cb,?~+CHm!OppMig4&}>`1OBh_7&:`tYz.sph: 2J_A)/b7ZyJITW|lcf7i-u1|n');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
