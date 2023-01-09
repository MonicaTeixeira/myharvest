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
define( 'DB_NAME', 'myhaccp' );

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
define( 'AUTH_KEY',         'j?s}^$zL}-*  U15Rakd!oAp10ks! >HkT1{0l`z?&jh9V|A=C6I]O4&HeP~gn@V' );
define( 'SECURE_AUTH_KEY',  'JI;fhl&%;<RD}|m}.56bV?%(]CY3BQ+g5K%Mtlp|{+sx9z0JCx.lwK#8;<4|OqS}' );
define( 'LOGGED_IN_KEY',    '4ur}1ti~FHVNJCtU/^0s&+.u<re0I[;@!oS:5`h<_QU9G(6YHQfu(+K<Q+vwd5v!' );
define( 'NONCE_KEY',        '.*4] I)%J5yk3+18 ZqQjnpIP+8&>%E_;zi!)c9XdKW|n&COuNQBRROco_a`}FMP' );
define( 'AUTH_SALT',        '5Z!%X(;#==E!>lk40s.bmI=uso?HPf_`a5gg<?ZDB-q0]};hcIQgZhb4-iXT#W9r' );
define( 'SECURE_AUTH_SALT', 'y$#,_19SM!aX)BR[Maqp(=Pr8s?]NWm?~:xxom=VZC|p?4Ur_MiM]00$[v::lz.C' );
define( 'LOGGED_IN_SALT',   ' h!VGNZ&g,wDnGm4) 2(R9tk`1@Xrc4myu;PZ,/0G0)kc[RpDs$taNiao(toI+7t' );
define( 'NONCE_SALT',       't{u{K9`DIL)K)7RzkPM>u{&G`{L?+ 53B7/^eFu(IVCTZ*:a^qYde3#&1bHUxdhA' );

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
