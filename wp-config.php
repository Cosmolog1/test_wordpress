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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'YzU/{5j+BQ6vv*o))P2^.[}Rj+c HB@cC+6];2jW`8tbac|h<h@E)6Z6k6n@5EM0' );
define( 'SECURE_AUTH_KEY',   'an]<u_-*3-@R|-l~t61BUu9]4.g5lJhsT %^Eu;-wZb$#.Sj5@AM9TzZuF.]k~_x' );
define( 'LOGGED_IN_KEY',     '{<B>|>iA-$}(M&4?K0?aAE7r;%./f^ gShd478^)A]1R0^?W[#_{D%%+w=GoN^tT' );
define( 'NONCE_KEY',         '>JR5>2B(?1cPW`ixf6( !&p:+>/7C|rm6>sumZw8F^|;o!E{_}&vv*1x~>Sb]uG9' );
define( 'AUTH_SALT',         'iV7!B%7<Wg5_}&NI#n]c%lf^TOa6H^Id}_dSPZg`/mwV1%^8<- lY/C[_JCFUWO8' );
define( 'SECURE_AUTH_SALT',  '-E$_iN_dGs3;CkzaXL=98%tG})[{yNK#Xn$VH78]dyD)~][bnQl15XGZF)o|O1c4' );
define( 'LOGGED_IN_SALT',    'REv>@8<doi|=TWzc}uIa2w(uYiMh+L!2m,cKD&}qrD*p$BtP>fZc6j#Z.Cun%L+R' );
define( 'NONCE_SALT',        'O_n~P.^f0]*t?V:5dmoCfv<l$PX,.REz,>J:2v=ppOdT3hv82Mq2{M746Hm7b4NN' );
define( 'WP_CACHE_KEY_SALT', 'o4dmGlDl^|fFs?6F?g/zDs>KtTY+!+STJy(5t$b9ijg[~x/ >bPd%=Nc:ujuaAUf' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
