<?php
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
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

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
define('AUTH_KEY',         'dUZ`/1~!~7;[+|emD;&H<{-h-E~9Ry~r@5jR<t-Ct|AW4vb4O#1E4?bUs#X;b)wC');
define('SECURE_AUTH_KEY',  'fqnM2|Q ~F`nqP/]$~)ZB-i<t7x=A}_!K$hRk0Wk`n?3Z`K%btqzEv4w`t9aI_ao');
define('LOGGED_IN_KEY',    'u@B=*k9JOg6=vw*FS.|%,agOU?HIJ+[7>;Q=mi[|y[p[NiB@4LHdNMQ+/sW>,i{3');
define('NONCE_KEY',        '||M&C6a#{pa0l3dS9gUxb97z[+d22wIlDm16XJs19=b8BjTotr~hBn%&8uBO^lBl');
define('AUTH_SALT',        '-!w5g<{;eaN$WW8/ac~|-NkCh#{7}n+1K-s.Ou{$w)y$V5i{c?s7Ec^1Xc2sSQb-');
define('SECURE_AUTH_SALT', 'uIgFUtF9W#OV_)k.XVbdVJ{RN-X(Gw()>$acf}xN@:Y-|X6qg@?|-UJmWC[}AC!h');
define('LOGGED_IN_SALT',   '-}4(2=fx%[|`A>x9YF;~{I|A)Aqv#:IhfjoS7aNvGM-e1&hDl1=VoPW#y;ng%#}`');
define('NONCE_SALT',       '9>Eb.vjaTrtyKCXi8V82=zS_:B/qF1N}ao5=(dYJTL-e5Q!i:tz)WPw21q~}81(m');

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
