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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ChildrenSchool' );

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
define( 'AUTH_KEY',         'c`[2^lq(|e5>(O}.34]UZv=8W#jVR|CnO<NNTh7iY4w}u(EeFFK`1sVPh+_+Q<XR' );
define( 'SECURE_AUTH_KEY',  'j>uT_2Y`gz}Bn0h^Yi&?cWr6}&LUEdHgI%mNKPAZ{omyP{QGs=&LGKCqqNBav9pP' );
define( 'LOGGED_IN_KEY',    'jC[/E^]yv]@OL/ZErO:bN:Z(03EudNn*3@N>Byk:fJH!D{)#Gn%e?m=Iz%&2g*{U' );
define( 'NONCE_KEY',        '5s+ZR`{qv{c%6GP^/epS_x19N>;&dP[7^R|8-l-)Ocnts8A&WU}Vn(-zl&!7vm9`' );
define( 'AUTH_SALT',        '@^<KEl5pZU]Y/h=0tI?9Q;{[+_7d5,G_E o^yAt8i<w9L.U87kghNZSm@_h&ywwo' );
define( 'SECURE_AUTH_SALT', '*s2bu#z+9`XGm6moAp5VE/40PS9cY%!h9|%Y[USCgrg[>Cs08{rVRl VILN-p9!}' );
define( 'LOGGED_IN_SALT',   'F.dWoW)7&qK;msW0(r+*}6;TO`9x((St.F.{EyUS+IRQ2sks]@>@7H%0Q@F4i,ZQ' );
define( 'NONCE_SALT',       'qozbVqUnJe2P.w<2d}ZOVArD<1J]^QO54=+moLy/]q9 9$k<:aQ}/Sn6UI<htsfH' );

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
