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
define( 'DB_NAME', 'Gatsby' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         's@5B% ZH$c$>7<~b^c$ZnZ97T%}fR|L>N2y7NMcbxUYi&pc?<J D8]R45S;4r;pY' );
define( 'SECURE_AUTH_KEY',  'R6>j1cSjKAG-.T/c<*>%Pm}M~24{; --ck** H@i<$NPY32wQriBHH[d Y3o>/Gl' );
define( 'LOGGED_IN_KEY',    '!zv.xfi_Va8,PBOwo}<!#6i]Y.PG2nm2D_B1u::PH6.B44.1gJ3QYOr6&Ao=:u6q' );
define( 'NONCE_KEY',        'Q4pcUt-I6)#ff5>7@0*nbO/$2:8[r[;vC 5UpPsX[+6oXXUbgoagD0w6mevltA90' );
define( 'AUTH_SALT',        'cIh&us`tohT3bSMXN}{LEi?W=zPF)l=?/19KKxMD#S-@HxDNDZg6bQ~8[y]@k[TB' );
define( 'SECURE_AUTH_SALT', 'h8KNCxBU&LrIxLR&.tQKLZ8Z3%}afm%~:WV:c)Kb<J7m!&fMT|$@!RuAz?sJ?PT(' );
define( 'LOGGED_IN_SALT',   '-JxIIg4-}(&6U?<3$2ymFpmcT(-y=bVE$EA!j|,U%obnBsQ+zFj[Q{Lq]!szRJ$~' );
define( 'NONCE_SALT',       'd^zm3JKFko_*Dm@P+Db.uE>_:2aDOf>}P:aY+p=zbCzyA)FT>+qA``1X_M&G:>~!' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
