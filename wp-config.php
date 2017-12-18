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
define('DB_NAME', 'lalande');

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
define('AUTH_KEY',         'Z}$>/P`~/}U;z990<pgkHlz6++b=C~qs^&]+HL$Yg[k=>B}%m(T=k~RLFN#1^soG');
define('SECURE_AUTH_KEY',  'hAsN_)6rjO@})a?cZI[e30*q!M1L <uT+qIduA;<6r[; Irh]D{T=JvuNWgC:=U+');
define('LOGGED_IN_KEY',    '1Gq{DzFU!:-heLD#gM>K%i-b$NG(}?d@e`NqBV(o[b#*}b~pu-n:p7NbWYbk=GS:');
define('NONCE_KEY',        '`gv~_^; PXaiU<g>dwda%9R!P!$FSl!>z !tk%ba]SA-;F>Sg^#qfUf6&-rOB>IM');
define('AUTH_SALT',        'k>4N5V!_D~l:k|FK0^ &dAaZniv9p8kvf/?b/81Z=PFtKE*k@M<,MIj!fE7BLZDe');
define('SECURE_AUTH_SALT', 'f*H|,d|wDf%+hH3H8Ox+A*Pc~Ko2S#M_8`ki)*@Mi{g%cj31zMOPdoJGy`%xK&*!');
define('LOGGED_IN_SALT',   '$Tz]pW^o[a<cXIVFV-D@I&B,^@ak~x7-VBtTNcn(D.v_Z4HB4_-kp4cNqv18`V3!');
define('NONCE_SALT',       'k0E.Vrlqy6t7qgU(c+#i%a%I}v k>avPM1tB%E`5kqH{a<*0pj*>Hg*QJ8^s>wUk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

ini_set('memory_limit', '-1');
define( 'WP_MEMORY_LIMIT', '256M' );


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
