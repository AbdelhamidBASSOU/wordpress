<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'w/roqDuThY)cK5U]DC5UftQyP!~+ZB3:?mlmPFcD]67L+|,3&u|uQ<] ~dlv_-s/' );
define( 'SECURE_AUTH_KEY',  'O+NSZ*>C|{6A>CmIGfcZ4eg)8nthPES()>;$@L&Yg9B=E4!,K3-}Jp*Ka/bY@!Fq' );
define( 'LOGGED_IN_KEY',    'JZW|a-}z{-3=NW *>IDUHD4<>`wtx{`MQM<P8>=2:qo1@-$)^Xu!dA:D-iB6,r{ ' );
define( 'NONCE_KEY',        '_X*en/*s+@]Z?wO:)L3229sMdGRF@0t*q7^sN:`Ni)GkR2D<-;F_56<b;M@G$4Jc' );
define( 'AUTH_SALT',        'h3|W#Xg$bBgGTJaPoEZ=}k*edZ^ZAaK7f,2xH? =P@XBz7lz/i9(+S{;gpPh!4,J' );
define( 'SECURE_AUTH_SALT', 'r&KPfF*y7zcPy=SinSv^;D@JO/P/fkk`Ea$lnCdO4(!^c5O6TT<nbpd9]]Fvq*(u' );
define( 'LOGGED_IN_SALT',   'iP{JFS3J0Vu8yNs]|_JmJeZhlOu60fHjxw`9_U>yNkSmV0*slb1y{Sq<(Y)%e;yE' );
define( 'NONCE_SALT',       '~W5lvsIh(YIH{~^8;~Z!lwns)+#9Y0a0B@[>GzXMFf!0x-R(*L#fH/z6hkvJcq9P' );

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
