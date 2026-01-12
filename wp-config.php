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
define( 'DB_NAME', 'abasiaba-okono.com_db' );

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
define( 'AUTH_KEY',         'b4WZ![e2hM[d|X~b!@0tvp%?. }(f2 We0ia{%T32{]5W}2K/s~2ay&(h={z_Btb' );
define( 'SECURE_AUTH_KEY',  'lc^6Lj{sr%c]4LNT>Y1:.aRM7;lR:(^@o++[K@zV)KG4t.f?7h74`%=$,azMnxNQ' );
define( 'LOGGED_IN_KEY',    '1Qs[`UqW2{1?zqXt)A]B:v^q_aWs,|rm)vgk-xUlYxg?6,{tH~AYew;69)52y%ew' );
define( 'NONCE_KEY',        'dWy2uF<;WB_,EJ1c7Yw9A]qA0gsx/kCbp.(#C4[S^@qM*B]FL>`>c8Z~~YRq4#p#' );
define( 'AUTH_SALT',        'G.+]+x:>%ssvK=:$LS-M&WOVZ5i#ZmwglGuHkhH_QAd5%(VVbj&8Ey6J.! q%4/6' );
define( 'SECURE_AUTH_SALT', '|H7bWRSz#WO0P&++d[l]+R!> ~B513j%@:@J9cVJBn-&@n_<|&7L:kTJo?XI:m|(' );
define( 'LOGGED_IN_SALT',   'MYqca.grWTi<24;1=MXSQpc@h&#V6$mT5MUO[I43^ 9GS: !gxG?wRKHAM}^w|Z9' );
define( 'NONCE_SALT',       'Jo4<c6+9VPXTW?m4hcrnZ_x9|P[[;{|!KlN,oC]8/4iHub=a7ICtl9!),U2QnsnL' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
