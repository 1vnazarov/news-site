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
define( 'DB_NAME', '1995-21_64996' );

/** Database username */
define( 'DB_USER', '1995-21_64996' );

/** Database password */
define( 'DB_PASSWORD', '59bca980f4e4939595ed' );

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
define( 'AUTH_KEY',         'xBqtT$1{:;!2tJhcpNCmp])mN7j5OY3Df@1c(9KQo`<Wz1M(MZ6fS!*Yo]UV&}3&' );
define( 'SECURE_AUTH_KEY',  'h+>ZP#QgZ6yF0byX2k?wSL%Pr~ M`na{4Kt;v$epih9Q])$_x}{jC@,e5a/uIh2n' );
define( 'LOGGED_IN_KEY',    'Gj-rYk9f,jzNLA?IXHh{s[/xm9%/V[YASkpac/..UCwdH+=}=(u=QNh&QTj^hwO ' );
define( 'NONCE_KEY',        'sPA1^&F&>vvLCf:c2z7!ibpNrfYo[oKh:sv6&X9k+BBjzHciKRQ!:VV{dRQ9fd(n' );
define( 'AUTH_SALT',        '2Wen}Re)Z&OM7G=.5~)?=`_~k.5$0t?B*{n(#dYo=pyve[KP#auFy%*REo-{K%ob' );
define( 'SECURE_AUTH_SALT', 'RK[*pLm]vbV>5Oe{m*zbTy}spou,ColH$A@`6@)<@rX}78PzQY<QS}F%pl>c_p8K' );
define( 'LOGGED_IN_SALT',   'g-C{|s&HU1+vzEO0+~cLW81|`qM/88jWSU<7FW55IyFWas*^+MH-I(oIkVk)MZ0Z' );
define( 'NONCE_SALT',       '$H`a#i<+X1l<DoGQZr2)I,!RizEyc^G1RvQwY(#/CQW7<e&<7k8a:|:je*k^YmDJ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '9aR9i_';


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