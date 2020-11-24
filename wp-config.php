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
define( 'DB_NAME', 'o2playground' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8888' );

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
define( 'AUTH_KEY',         'gryzJd-7$DLJ[r>{z#!4,DAf-j?DY3>NQP-F,hh>}kPZ7$RVVko]WWX&CW0}$(if' );
define( 'SECURE_AUTH_KEY',  'nikL+W].2SK_O{x5DF MWy9E@,MTIr%n*YR&;1i@Yq/r)1~_X{xo4GYi2FgTxFNR' );
define( 'LOGGED_IN_KEY',    '|:iZ@ .WagOT^u^03e#vCY+V#W>CPd+ep-IBKr,U#Wh@G{F_MKoiGZ{ Hhh<H_qO' );
define( 'NONCE_KEY',        'MC+r>E:|7b=/pTn3$:%z3=F/q4/c@ma4R/;c.4|iUZ^<IW9l&?|;7kK|+[nahMnx' );
define( 'AUTH_SALT',        'mfGcMu*rPlO%^k.oVyO^Q1H]]DXRqj0m{H&[PbXuvl5yC8Rfb{u$$)AA5Qo@TO$*' );
define( 'SECURE_AUTH_SALT', 'f}_nn4~d$l5;<6s4rts~bRUb?[IToWlnNQjc -OzC~@0gw>03K_}XiBl,zT;wcg(' );
define( 'LOGGED_IN_SALT',   '7I`LX*F&Jl4=KL6*oXccRSjzm:$F~/b>K4QgF@~&> JeGLxYN9^M{7YJT[W:Wnxw' );
define( 'NONCE_SALT',       '&+X -?Vv367_;eW@/SjE60m%=Mp1 :>RtyyDq~>>*_hB*Y9!p|C;(QLpq[=1zmeZ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'el_';

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
