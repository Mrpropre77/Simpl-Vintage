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
define( 'AUTH_KEY',          'Ci?2LkSxM^Os? %5%odD`0X6ZoCw[=~A?SWU>-_4O|Mq,{^RZpx6/indu%DqYpGx' );
define( 'SECURE_AUTH_KEY',   ':=7lyr(5.w!!u|,!fPb`)=gxZ!03K>|&#W1-e:>?h ]9BIZ;l.KRvO9r|:$~>7WP' );
define( 'LOGGED_IN_KEY',     ':UXZJz>We8u2y]SlHms.?hy7[usN2x7XXgLvDs8!y:,[Q:<6w/HyGB;6Usuf;{1Y' );
define( 'NONCE_KEY',         '&4J,~Ns!GYt[yS0L1=y6Xv_?9n-;K7HFtep)XJ^~H`w*z^a0@{[f>]_GNX(#N<,x' );
define( 'AUTH_SALT',         'AAbkmYY[QrC*2PL$R2/c{j5*Q3vZQ[rEK$PRc4i/iOMJF[<{DI0Wp@@tc.-72]_*' );
define( 'SECURE_AUTH_SALT',  'F{1 q=~;xwXbj>o9|Et.!vtQ/O9HK^~r&dty6HG8f[].vO#3%i3puo]v^!_;q{i?' );
define( 'LOGGED_IN_SALT',    '>5NMWY?$w>&%#j&fN1Si;LI,3O=%n> r01kn_MwjNcJsGx$O[Whj`j3M!pYMh2t<' );
define( 'NONCE_SALT',        '{#u.J|jq({/[6|>%LCL+$*3)T(1f0TgO~%zDInE,933R(/-NvcrfX>jmV.%fV(qj' );
define( 'WP_CACHE_KEY_SALT', '2F, c&N?m|E[V[^oZ~T]col9p]aC%1%2.5R-GPc9!FlVlI*My)~YwvXeCzE%{7))' );


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
