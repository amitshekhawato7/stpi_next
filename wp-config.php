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
define( 'DB_NAME', 'stpinext' );

/** MySQL database username */
define( 'DB_USER', 'stpinextlocal' );

/** MySQL database password */
define( 'DB_PASSWORD', 'stpinextloc' );

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
define( 'AUTH_KEY',         '`-vt@it!3;l^X~|3p{fJMj26mT4 =$lV7%Yz=U:N`DN} =%_:+P?P6NexPV-bwYI' );
define( 'SECURE_AUTH_KEY',  'A!Puo5a&]T)5l33GR+]1m>d[.G_D_[F+#guC7#;PHU:=oK+2vK(BM_K7>s>h`/B5' );
define( 'LOGGED_IN_KEY',    'Oc/X)d.U9;),b~aQiE0nGk)NK~b!tS?!7H&8>hR:byxpP#JN%k7)}aG]M*5S!%SZ' );
define( 'NONCE_KEY',        'A_1^! 7RsoKIrZ-6UhPYo1hGo%LTz=]OlS7GOE{{S`h@k|0uSBm5_7B=?P&JwhOE' );
define( 'AUTH_SALT',        'RAWbSWBNrO!>>?cE&Sd+U055#q>Wjd1E;.WF1S_`r0sTyiQMdhuN0_%+/eaUJB3[' );
define( 'SECURE_AUTH_SALT', 'qkt.xa(Z_D<$zZ,u]&*OeQiA|:~XP?x=>K@vDVjs.A%-}:TOV&M[whs`II;nC5EF' );
define( 'LOGGED_IN_SALT',   'QztfFqQ7.`D+U?W]n`sx8.<)}fVK<P$#<|HdN4*|uLzem#N&kjxIbV_PpM[S>1Xg' );
define( 'NONCE_SALT',       'jr-;@ioMOXtNOZ4uSe2q`6)EV^uXr.W0f]t)9XT7c,pJe`U#. ft-TIk%n,28S)J' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'stpinext_';

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
//define( 'WP_DEBUG', false );

ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL ); 
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define( 'WP_DEBUG_DISPLAY', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
