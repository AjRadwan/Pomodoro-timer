<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pomo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'H#C^?J%iT<0W,W?(bY}dd3(>3a(G>jxe_iHHBbVFIp&2~Q.}];|M/-iop][yGzp ' );
define( 'SECURE_AUTH_KEY',  'QAPa?JlNYP4L{u,~2a^lL/CB:}30e:8O_(GH&] %SeIfSd{VE1{mNg7w{R{P`:S=' );
define( 'LOGGED_IN_KEY',    'k9`Pz-J*xRuv:T$gU8{[* H:xG@hy]s>eGS-BI<_+Lh`sV)7+~M|p*PWi91o!MWM' );
define( 'NONCE_KEY',        '_P3P;A?o1u+j]zxzgq5#lZFn>|NPdh<y(G%~QcE{0wpi<e%~H7HrA!tbwoScx1th' );
define( 'AUTH_SALT',        '<(9Mn0De0eKp>Xzi&H*iN07k]fY6[V 5F7>`-$ U{I]P(x[a{>?-zv;I!d6>*it~' );
define( 'SECURE_AUTH_SALT', 'J^:8s{NTgq,bs=vsb~_.&,V1}E;M35^Vuqf6|7am=Vx0D~DI`3B<|m,EQOJ+>2QG' );
define( 'LOGGED_IN_SALT',   '~1x#&c_$#Ibtvy+3|)/%UxIqF#%nI0u~MUXH3mhE0A1Ape/7c>Qfq@(0fm0Hw,2@' );
define( 'NONCE_SALT',       '8kv:g}T=m.guQUL^r?A8k >K5oJ`,#CJ=NP^V,ZsHP;wb!clcxyi!v*{FBXBN$Fx' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
