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
define('DB_NAME', 'wp_onbike');

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
define('AUTH_KEY',         '4XeN)i?K.a~0X,CE^tLQZ<+Rb?/mGssBM=(-,bB~uzbis(YnC&TSNo_R]P6jEoCt');
define('SECURE_AUTH_KEY',  '.f!yHuhWJ-*OU=zzk$2mYq*O.[hjX_G e7s.@$x!LH~3qh/J1-3wSX@:C3}IhIeR');
define('LOGGED_IN_KEY',    '{V~_[7T|vC>#I[@s(UlB0>U4O=Rm00x HoX$IyH*Tk!%c]`6I7wae|g,2rL=7m@d');
define('NONCE_KEY',        'w]@.__M|h,U nR5 =x[5[?$<_q{l/mYW/[]@g!]>.^EI|OrCIl~zK+,{e|gk-50}');
define('AUTH_SALT',        ' a1I@/@(,a~S}.E#AM<-<H_zNl4,gzMp=84}vSV)<$>;sJb!dZ:j@MByNNKTYd]`');
define('SECURE_AUTH_SALT', 'sXs2L4NtNO0rJ]Gu,a>b1qJK(4.8XRTsy@FOpW<lRbr=^ERKbLA#D.YNuW4W2oKX');
define('LOGGED_IN_SALT',   'V8(Pu(0Ogul>+@wN3gZ_<8F^Nv@ds )#n9R=h:d^c+v2?z9!)g#v]26/TH/Dw#]G');
define('NONCE_SALT',       '(pB!ITFKy})qUfO2kryC&;Mder(=N.i Uw:`Ul!}bZ&j~m(G]1F4zQ}ke0b<KD,|');

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
