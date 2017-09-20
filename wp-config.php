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
define('DB_NAME', 'createPluginSavingFavorites');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '46.46.73.228');

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
define('AUTH_KEY',         '|(&XK yo>GGY<d>|;usL#/AEBJj{]ULf{9m]jPMJM(y3H!`dS.<v7ZcLzbI0XJ}f');
define('SECURE_AUTH_KEY',  'y<.<?tu7{BTX>Q^zE@b`6H_oX3|*n72yU{8hBw6*W!xTDM<lhdktyyF:$jDC%,bw');
define('LOGGED_IN_KEY',    ':.:T3)}?8fPZ7in/Fg>}bc=1x}x6BIsbFH5=#8%qf_F2*^~APu(m6WpuH]<IX7B0');
define('NONCE_KEY',        'eIh<?x#Da.=D8g;BLy_6E1p[0s0C+]*9DM]{v;jeslW4um.#H^Cq4TV,OpvZB|G|');
define('AUTH_SALT',        'wn%fJ?;T8QD%e[V3G__KdoH ,]^!_)z< 87gtdL@j0Hod~S/G~-LkA:,|yqa0{bd');
define('SECURE_AUTH_SALT', 'X&w,`TF#;v3OX4fFwPr^<5-ey(;6f9]@9d||G8y+_2&xAiFRv? 4uJ*K<]pM(tt<');
define('LOGGED_IN_SALT',   'J.f;P3Lh4rM1+,ixG~=zdw/m65E<O6`7Z(l)6vp[S!NB!,?<~i/DRh$P$:LpQ]ea');
define('NONCE_SALT',       'yKDb97&S^iy1X};,V +PH8l25I9$hh5,@JKc;xLN8QW2] w+!m7yKp(+Yvh#o,;-');

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
