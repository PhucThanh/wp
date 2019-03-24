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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'bK5ni9OAq/?N6a:=G@m0C;{ eY??}sPXUpIXA*mio*!O88kU[H!I-*08^Gb?yDgh' );
define( 'SECURE_AUTH_KEY',  '&YIo%3.d ~Xxb/4rIQ^0W&@xifeB5n^7EHE6i<D7<GXs& ,j3YUC7LWO[U7,3|e7' );
define( 'LOGGED_IN_KEY',    'm@lFWvqOc6fb~v__7#7LImRV).F2MQNv[rXV>)CZG_RDW5)h6w:2M]8c.&}(3=ou' );
define( 'NONCE_KEY',        'GRTxIL1rsP0kmesb9QF}UWn-Ilc<Dm=nrx{!{FGz@-E-wFx#_ .H|bZNVCCoug`F' );
define( 'AUTH_SALT',        'oS%<~&t eEo+d|FTK1U2s}OL*^qJ=YdNZpJb2x$=Gk9M!FmW_ew]JB)_vglgqn[V' );
define( 'SECURE_AUTH_SALT', 'F$RTC[}qQL$#+@v7TMa&vG!__Q B]>_C%#jJ:/P~e)`Xir,CB .t2Gv[~]1+K-iL' );
define( 'LOGGED_IN_SALT',   '52hV7;wwFq}qfvz,k>fkO).eYV-OAl{Aw7(]WOrffq6i7H7 U8aAsc*jYzZ^%= l' );
define( 'NONCE_SALT',       '%mvF$>&3EDDv/Jf[1.1[cM7k7{|R#}I~q4;)5<4JNSp/zP|(8~@)d#8q_ib[AdHt' );

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
