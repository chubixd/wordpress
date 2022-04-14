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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gatito' );

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
define( 'AUTH_KEY',         's{e(BAkZ)t_qr-j6zFfhbM)YN34f}hP%ax]?EZzNxa@N`piV3P,?^%@D!ByH!j=.' );
define( 'SECURE_AUTH_KEY',  ' 6p.><`47ox0]b)%iQLQu~-[p6U+kGYGwZ}Pv5e)ieG6.d>F@luO5SnEPYH?,Jn3' );
define( 'LOGGED_IN_KEY',    'U%}iQ0^jH`12R{tm}uxo5EQ<&{c7xSNBrcRP}Z%*hS{f?|f7Q5|X+%daA9D4?M7m' );
define( 'NONCE_KEY',        'kkKbF_rYTc%!nB:CtGvv+ts `A;M$,8?RA{9p,NsB6O~?5iB[0;[A)ce5U-6B(Vv' );
define( 'AUTH_SALT',        '}8ngA`RY.<1#]tdaQP^5QNE=gxK3%N?rez]9cb 2LgRZwMDn%F><j:mkn2q*L#M3' );
define( 'SECURE_AUTH_SALT', '<3,Z|zasiMk>[~i.xGKd48m<~s/tJ7S.$daAe9*jQPW8i9N1b/Ap&#!Zg?%QQ7W;' );
define( 'LOGGED_IN_SALT',   'CCG-t[v3tiVK6;L%@]x!?<!H*T8Sq2V-=>lM4bqRNAt4O|w=8|VQnub<6?zIALJ0' );
define( 'NONCE_SALT',       '%)bP-/:/&|Q)AVOvGRv?@oXZzTdxWj2v[/kARk;Aa,,au!M40OB-V7v`&EPaJ MC' );

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
