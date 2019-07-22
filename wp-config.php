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
define( 'DB_NAME', 'wp_wordp1' );

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
define( 'AUTH_KEY',         '&M$IwU2-W9WJpPWanfw;RNne(i2mS |v5pRnBSx;WO<%C)!hyP)Vj{Qn^B|f@iO[' );
define( 'SECURE_AUTH_KEY',  '3(5y/gA2i[Q|(p%JJ*^oHy1B|WxH.*m6hLZ!t_=a[4Rw7ThG$Xzq )LrFQT`>E;p' );
define( 'LOGGED_IN_KEY',    'DJ&/9+XfIRW1+FDC)H?8)6sxA_GsV#sE5j9{hKy]r|T6 PXz_^,QL[pRYC1.34!8' );
define( 'NONCE_KEY',        'D#: a:1bzW%(AaI0mif|d+V=Kf=J9eG3%|zW06*Q0pM5rMs(=sHaG-[Dq2|`%^cS' );
define( 'AUTH_SALT',        '<z6y!5Yz;sH-%F&:#(Vv<yILsP*}1*G+K {(+a]7C&k{DAYd2NS<> ,-Rc80n/m ' );
define( 'SECURE_AUTH_SALT', '*&e]%w0vg$pUsfN<T qBq}&SPsJEUjaID7u4AfWwv91+qh(C{F%Fo[*:PI~3toPf' );
define( 'LOGGED_IN_SALT',   ']ZE 5dJ|Plgf=aWSM#WposvCfz<:&Vk]Z9iQ4e<1KB`Z8$QFeu|0+EI6<ehE(f7C' );
define( 'NONCE_SALT',       'SCrB?V~ivAdg[&_Oec,9_VAKpTMsluXw3yl+`>(h8[7DbDJhX;!m&qQo(mXXLQz1' );

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
