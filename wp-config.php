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
define( 'DB_NAME', 'wp02' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'sGC+/^Uhhv{L*Ly=;EMM +qe@},l*8AqoHEE6hI*EE@]EPoyT8nKiVu{_C>uuGZU' );
define( 'SECURE_AUTH_KEY',  'jG{C$}eP9$!7r#$w:R#a5kp>w]1$vV3-s821GJyeo,1t:k<JqdpE9i.),b:}qd4=' );
define( 'LOGGED_IN_KEY',    'FHZ=(fM6 7 Oki@|:>)@DA$q2l74/ARlrT7058+w^JfR,[;^p!:*)[^dm<2$ }<~' );
define( 'NONCE_KEY',        '^u<|w8C(BG[e+doxRB6Nfm)55W3O|(dDfpX8%^v;zZRs5G=19fn$v%NU>g4ec`}W' );
define( 'AUTH_SALT',        'Seq5;1P%Z!Uj[zU)a+sHe*Oopt*&Gi+$?#bi.1=be[sw1q[%52w;=>>&stb9;/(a' );
define( 'SECURE_AUTH_SALT', 'f-sJ_I!!Tv(OI?_tn2($/EKf[D1Yf!FFreo~h*mz%?8FsD}?l(OP1KF~*v!LcZ1$' );
define( 'LOGGED_IN_SALT',   'W8mJO1tlF$$C5mppb4||N=6Ai?Btz.J.0IV3p%Uwr8;.53CP.MiiN|Y9i!/vcr2$' );
define( 'NONCE_SALT',       'nFF+pWe8>5$$04a!.)H[z;3Z@CUZR72c9LAy`hltU6ug^T@.|V@XTsQxI)4zukXJ' );

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
