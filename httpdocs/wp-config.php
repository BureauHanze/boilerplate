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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-5-8-1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '>t]kp:yG Xd?%j[{dN@VK+){OQfwYzk,I0amf$L;$?G+>7HO/g$Y[]8V~=p|r`2S' );
define( 'SECURE_AUTH_KEY',  ' <%W!qukMsIROxbd.H9s;qsaV 0S/u)oKs;2DC#QN^e.i)Vl;y}rOvQ6s`.sJ!dM' );
define( 'LOGGED_IN_KEY',    '*6QkF-s=>-FF_F/N51}]Ya(t^8^S&e/?7smzX{j6if!2F( Iz8/CD.O_k/64vN.;' );
define( 'NONCE_KEY',        'qFGoIBf l>NKb74!Q:x|H$#ITnEqZh3{zNZsXHvr,_Ua@sG,PR6/jp]#k:;p:gxL' );
define( 'AUTH_SALT',        '&)v tocPCe=q)=2AK}`;)&TR;YHnt>,w~E``;LX{kR)NHh,V:R+7/eJCL[WC(-[J' );
define( 'SECURE_AUTH_SALT', 'ab=!wE?q9hemddx5/)aI@jvI$-K=GZueSMY4X`tc%aC&T0z6%GmE.Fm5IO~vZkR;' );
define( 'LOGGED_IN_SALT',   ')Z,t5H8U_p&O9aae&xwfP|{?Y>)oc4X5n$g0I}<0?PlvT!(vAH?|f(>&S&ZulYLt' );
define( 'NONCE_SALT',       'n28hv2o.dadYnC=sugxkbu=L;U:_4Ee>u~u&3>N?e8V#iacy{nwlN%cMj^@&s,vP' );

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
