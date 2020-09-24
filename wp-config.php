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
define( 'DB_USER', 'o2playground' );

/** MySQL database password */
define( 'DB_PASSWORD', 'FD7t&gu8t@o2p' );

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
define( 'AUTH_KEY',         'smQ5BVNAHus*gSyZ(laMM0*smUG%ITu/r=z<JvZAir*JF2g{< 7?_7.b$ia_~1H7' );
define( 'SECURE_AUTH_KEY',  'yg9>Jt5Uts$FzdC~|ol1qfY9~WpUs04q_8HhflI^<HB[8=}y,_Ay&U^Jc-R};FR7' );
define( 'LOGGED_IN_KEY',    'QS>LGRsxm3MJbJt[Uukt7^QdeJ/_X1cyvpz5xmk3k@HUEy_zGsqBWr!NG1a(#| 9' );
define( 'NONCE_KEY',        'N_ba>&W;o`t||kQs2dF-4u[F-yb{j9B<kd)B 7X(9LztVL`f>,z[UEkVPULXcdRo' );
define( 'AUTH_SALT',        'wdz<sUQ$h}RPdce|!go8xD7tt?FOm qHHlA6L3#W^![8<tKIj#T3oS; sG7S.H;]' );
define( 'SECURE_AUTH_SALT', 'v;)}t+;/XnR.qIXAuB|co(@A~?B?1U]Wr>=05/hdY{EvdG(#2`:B={e@/_(;p }*' );
define( 'LOGGED_IN_SALT',   '<A~I8$_6$t?xxqM(lvwEimcqa#WT(XjS*yT[Dpau0?NUUu55RWo*:PWmk~4(Rn$`' );
define( 'NONCE_SALT',       '+p?4#~sMequzI,.ij}-{NHhD1h?Bci2WO<D7,/`:Ee58Ldq?jB71U6=]|!P~L(rB' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'o2_';

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
