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
define( 'DB_NAME', 'wp_local1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'MySQL-8.2' );

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
define( 'AUTH_KEY',         'JW^&4Gu4-td=,rJDi~Thp&<i@pO&e0y[pvLOQg#X1:R42%9ha*(kbF)kyN%ZpV.`' );
define( 'SECURE_AUTH_KEY',  '!~MGgg~~57&r)(N[@Mm)u!D,htWa}tmsqTVCoFcC$9~lh4>.]x^R2Vz9I}.Rn#%f' );
define( 'LOGGED_IN_KEY',    '~B4U^{#|=SS(PEDaly3EcPQ*z<Ilwjh_QR<[<$n/?Q}H{mWQ]Ez/Q)l74OT!#q2N' );
define( 'NONCE_KEY',        'Sv:.?>obC(bl,!52,^ZeRHHlfiOr]3-~6?jT{q~&2bC?s/p=XB[/e@Y81jitvbT%' );
define( 'AUTH_SALT',        '%XBvfhkIjlsR6B}rAAH1{-wXen~(NcqMb]6p[m7M6:DtLK*$CCj6m:b%/9XKKB`q' );
define( 'SECURE_AUTH_SALT', '}6.Nk4XekS5|{UU9OU^9%z4&Ee+mA:B/u+g*Y ]PP?kH7mi4(&jQgc]#x]e00S~9' );
define( 'LOGGED_IN_SALT',   '+Y#F`3vnf8}7?kPitEi5R*<y.Ftut;WT60`/2Tm+RTd~wW:EM*pfFO2-5QAD>fHj' );
define( 'NONCE_SALT',       'ddH-b]@C>RY3$D4P-+>3D<7:_u{JM6w~mD7=N4*=QZoFw<IK.I;nZ4G2#{85le4{' );

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
