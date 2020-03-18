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
define( 'DB_NAME', 'yallichiy' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         '-2I(g:6oNR@nQ%h/SCB`|Ea[nA,4t!?BNe>-B{X$f*pz0{<0OXE?&c,T-C<RG$GR' );
define( 'SECURE_AUTH_KEY',  'uL=#EMk;7M.7)ZoLkxEFv++zo1AHkB(*Ad5]%:Ce^Eyrk[/q`rO-s >``fvu5U2T' );
define( 'LOGGED_IN_KEY',    '0m:L(^SQ>LxK(Uz;H*U_S}hy8sE%c/ya?0*644s6^ff`%x9BT&4GPu${6#$mX`g*' );
define( 'NONCE_KEY',        ',5,U9f[(OkvrotoR3b=y.Pxy?@Cw:|z8he<opsaim&LmsYiYvo)(iDV(VV&R9<cp' );
define( 'AUTH_SALT',        '^n!)#oW+n5 %O C5qx&>>%7CUoD#^Eh:<9>1Q`ArxUUu0.b,Ot*1f>3jTh~ztgnO' );
define( 'SECURE_AUTH_SALT', '#(pnL.nBf0+pf!&=&0H<W{F}BK*IV?]N^BHU+K|)Lj4MUqdb$]9kv4DAD-vJ5K,]' );
define( 'LOGGED_IN_SALT',   'plIlbt,MWs[ack1_uK%^/ph61!v_V`O/FjjjM16u,Ch2B#;>+w%T9dT_d]PEAjY@' );
define( 'NONCE_SALT',       ' 8gZ!jHwO9@[0?MwOdFk/JdGoWga>&d{%;~w#`Xu-iF;wpak$w/ |e{5<A <{?+(' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define('WP_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
