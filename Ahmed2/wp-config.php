<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ahmed' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'K!A|2n 6@Pxl{}}@b`RNk~+UhPt]DSN/%4lJKRu8Nb#&f-b-~ZITXPQ%O!qU$r#d' );
define( 'SECURE_AUTH_KEY',  'S.YbG;rie*V(_6Km?wk9~Ovf6SKb3+=*)*^/K1jx!Es*>{7`3<i5PhlG^f]0yS@W' );
define( 'LOGGED_IN_KEY',    'dBsa)Rs6d0184?V:tXtK9.su5*^,lq([SI3~:g%q7)80djMg3Y,+/>HAK{Aha7Oy' );
define( 'NONCE_KEY',        's66g W#+$|)T5W5[l5^n@uVe1I}rx0nrX5sMa[]ZQpD#X5T#S859kb0%Ou+s.x? ' );
define( 'AUTH_SALT',        '$MHDVy5O*f}h}v1B6))6](5K1N7)6mmc#0nWv-Tpw#j6Z!Y^Hxa;9WU4#CCXR5-[' );
define( 'SECURE_AUTH_SALT', 'VWf/ExB&4j086C*m!c`9Sk),nFxj I_%/rrK8zksk7a|Jrg@:=jM>~ghS,^J1}$6' );
define( 'LOGGED_IN_SALT',   '#W:7,/GO`N(aOa{[6{M0R,/2!A6.9>`JQ:FpwZ`GZII.p(ow1}ALIHplEI$M6=zM' );
define( 'NONCE_SALT',       '.g8~wgS}S=d(%hS3`hJ9OGuE>%?=JD E)/4Fg;CTppu{4f2U Rn<-Z5HN=;iQ:fa' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
