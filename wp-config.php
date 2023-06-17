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
define( 'DB_NAME', 'box' );

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
define( 'AUTH_KEY',         'v!.-V,T}8Tlec*9vG]Cg=(]ehcr3Lx=teCC.B8`#~?,&v{$_P~GF!w|zCys4&Nnq' );
define( 'SECURE_AUTH_KEY',  'fGOI^#<%P2g]Fs52ni2!S~>i4!+bos@0 +U)Ps%B#mX:ndIbe8rje_Win4yYUtdT' );
define( 'LOGGED_IN_KEY',    ']00y@fFzdFVS|6u4T73y=O3Ajcm7w60tf]^6%#*GG6Ic9J|y]uiGAczM1e!3c^/G' );
define( 'NONCE_KEY',        'Q|ZQlNal1p/D&]XFPO|j>FuzfEiOP|6r6aF4)8KzRy{CB-*UzXa[nm81zHjX4;qx' );
define( 'AUTH_SALT',        'rg;U;C.@1p%Li)OmudUb|[s[:DcR6z7~Ng,pULv%J#p~WXCKxad6t=8a*{G|Wx>$' );
define( 'SECURE_AUTH_SALT', 'iwO8GVBj+-p_K[FLUdy!cO39!GoJFfL[$Q;DD]xbfCJFod]|JN7zCfc@rnKZCya$' );
define( 'LOGGED_IN_SALT',   'YJXp3EmVE%b,A!Rgfr;=.S=794|_<GK<5p^W!|BX/S-/Ph>m?V*i58S VtEVN`bo' );
define( 'NONCE_SALT',       '&y](], 3[~XFC_{J.4;Nx3dMJ929/^0gIPfZ*Q/%E%1oiV];1Ka8@,K[Z5DC5T2B' );

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
