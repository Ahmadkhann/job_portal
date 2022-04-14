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
define( 'DB_NAME', 'custom_job_portal' );

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
define( 'AUTH_KEY',         'oR$HY+p&8+]aHh/c-b&W6yWkfSA3+O@wEBZhHs8r},x}uLkSW$D2&7OjDa^JJ-;l' );
define( 'SECURE_AUTH_KEY',  'CB(opd6DyOSpAWGAkz1P[@Mjj8R~VgX#fJac*k0im_}G6~{j- $87[y%MeX]w}S#' );
define( 'LOGGED_IN_KEY',    'F687)dH8K|V$tImoUUo:n#-)!zB52Y01k#dX/!k:sPXjk/--c;CB+XALvB[~`B$|' );
define( 'NONCE_KEY',        ' }<OtY{)`{c}pAt =@mL^p?H=60Kj=S:-^^3_=kPMj@1?h$jy[~6*r=!d2p/gsD8' );
define( 'AUTH_SALT',        'd(u.:W`{(Cjb#*1X]8kO9tL4EX&1c:*!qyp3Z7V<YBDY|[`r%<fRKz]!S5{nN!}x' );
define( 'SECURE_AUTH_SALT', '1[=[|X$<,Jt_$3=un *RQ5D=afv.3D_l^B@C{_)n/.Pg2)LGOq^f)l2l9w+)9dC8' );
define( 'LOGGED_IN_SALT',   'Y[7V)d <Bf#fBTxo>P[tjUOOMv/m0?W WL{PEfh^fbq#Xds-O&a9C]2l[/^@3bqG' );
define( 'NONCE_SALT',       '5^Ld@0ynK)[QI$$=XyRY[=P2.F,ptm;C7r?E|;gN1hHazUy|uObubZj@7+45[hTz' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
