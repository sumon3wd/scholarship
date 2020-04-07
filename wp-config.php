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
define( 'DB_NAME', 'scholarship_db' );

/** MySQL database username */
define( 'DB_USER', 'liakut' );

/** MySQL database password */
define( 'DB_PASSWORD', 'liakut' );

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
define( 'AUTH_KEY',         '!)b?4!n:Tzj(kWX%cvue30HIPgAHsdE[Ei3Jq!K()PtNq5j@|7+g3xo[L8~!O7uf' );
define( 'SECURE_AUTH_KEY',  '7>UnNj@F#+OQ)tiDav6hZ@lw]#.)Cwf&pVlQj4c?XdW,KZyLfW-RXkY*#)EU2Bdf' );
define( 'LOGGED_IN_KEY',    'zkw.MRC^3H;A44%%)f~LhC#A8>%*ogLQXMZzhESCs0h=!f*HY(H{b]SqsL8Vs]1|' );
define( 'NONCE_KEY',        '46mk#0xC>AM/+y5HJXq[|&;fp2b~7%ijj{mwVN}VpP]poS,8c!Acx.-tH>yjZu4b' );
define( 'AUTH_SALT',        '2^jB6Fp0:ztl8l]hk(R6(2H9B_G!?C/-btJ9c34EE#3<;Y^>@tg&+-8F4I@h!+nH' );
define( 'SECURE_AUTH_SALT', '=BOrN*nN3vUp`( 2ZLD:#lKva$fnqIL]+8,;=3SME9iiT,&s:1=]@X*!>,;>;6V!' );
define( 'LOGGED_IN_SALT',   '3!yEsS})@!M`6L]X}6[(8x)Vsg;7@jH?QJjS!k4x!@@, y%8`!_8XB(C<zFoYxns' );
define( 'NONCE_SALT',       'U HivKW!+_ZXq/rV#.2S~1bU[@4ih40]csAtHES^.fG=HXA]tSC`{Z5C&.yg|y&I' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sc_';

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
