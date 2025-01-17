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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         '*zb-v<KT>4r;3M$qM}H9qe_t)J4n%${mewp$E$aqCjMSq=IkZW)4QSvG3[Dfd8G:' );
define( 'SECURE_AUTH_KEY',  'R>tUVA^;t3Tid*k^X(%cXkGpGor{KmI]sEYx%#+0=]~lmjY>C}A`rmILaYnVZA#g' );
define( 'LOGGED_IN_KEY',    'Xg,-#h!{,+y@/DC6Hw9z/-![O1Tvv+Ghu$jfAm_LkG{D|8`+nO}-aXdFk?<6./|Z' );
define( 'NONCE_KEY',        'U6ollxLefKo`Jv0[EPzUQ.z/,}NOZJslF:c1fs)#~pYZ6_lTv-)jTg,(=A9EnQ#%' );
define( 'AUTH_SALT',        '-SHTl,vId;_j#}%4{S:1a[*SfMQWXp`Um-V=|r/4<M-/-n0CUTs6rK9y&?CW$;13' );
define( 'SECURE_AUTH_SALT', '3gy)w*B}BP+$1G]yJ|3Hr]=DZulm>TOmK?,)C/9g&,.1$1P[Xg6)H6{A0OL%w R`' );
define( 'LOGGED_IN_SALT',   '5k}p&6_lP:=gYl]4CWpkdy6~ATR*bu{;hZ{Iw8/*q<@En41~]G[qD.o8~NVE~>Gf' );
define( 'NONCE_SALT',       'Oms^qj7?9 f_w*8I_7^w/Mxy.oHsBEPdWt{pqmA>(tRMmJ5S8vQV bT`-nf#c.PF' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
