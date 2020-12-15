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
define( 'DB_NAME', 'red-giraffe' );

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
define( 'AUTH_KEY',         'Aaw|>!8*c([5%bTld6M~|8v}ngZ/!e=y]l6S|cN*u%&9VR?~^Y(o=z`umrYsW=i,' );
define( 'SECURE_AUTH_KEY',  'e)l~ICS+n|TqjF}m&Q|x$WV/ok;8L0*<L?z#IO^>el}MpZdW:,`FNj,C=-)FwV7Z' );
define( 'LOGGED_IN_KEY',    '.VeM?M{?ADrKh9Tt=`W#jJ(Lqg%,48u[LFK-kk_:2?5T2JE@d:13+ip5HOwABM^:' );
define( 'NONCE_KEY',        '{m)IYmt=Rca1u(,i_g$ho>V}B5.r#YNy31itxTNyYEJa>(,-Q:THcv7F+P]rFl|8' );
define( 'AUTH_SALT',        'UAZfL+]$eYgpll3$dN7_nk$]7`xButq!`7QrjBe;(-HPs^MxZr7.:9r#J9{~D/M}' );
define( 'SECURE_AUTH_SALT', 'WM[WSNInSn/y+Sje}L]c4(f}T(=Ct:<FLGULG{qNFrd{unOg4UZ;5$2#mOi=BEkl' );
define( 'LOGGED_IN_SALT',   '/<9^P[ qgXzK@a<Lj(grO|GystAf46n((cTgfU,-dH;/jm~_<-)h5_<71TYT6BH<' );
define( 'NONCE_SALT',       'cP.As;WpZ[D!j!Mb25,mvDeWo3#-i:{bSBl3o&[;~R]r9^{k#CUv$-i^x1/22w?/' );

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
