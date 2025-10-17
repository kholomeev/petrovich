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
define( 'DB_NAME', 'petrovich' );

/** Database username */
define( 'DB_USER', 'Admin5' );

/** Database password */
define( 'DB_PASSWORD', 'giveme5' );

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
define( 'AUTH_KEY',         '0:8{aaiw.EWTL]_5gqw.WBj{VH]W01VFn@b^R<#6;d;XPG&gCvcYj_TgfhTOs%#_' );
define( 'SECURE_AUTH_KEY',  '?QKdq<8idd aE68&*>)5a,*0L[K}K/Hh,B6|H1 D#A7 8t@y&;Z}rCdjTCiZ@lB9' );
define( 'LOGGED_IN_KEY',    'BLxa/ITIZ,&#FKYA7b!sv]7WO+LY@/}E<iqe@EBC+,Qg566`?2& ^VIJ&efixFy3' );
define( 'NONCE_KEY',        '96I&VG=k>~#4Uuln;nQ~U[R|88#RP=h1D}}KIz;+hds_*is^M2>cJ@hj#j`L_(p ' );
define( 'AUTH_SALT',        'Y3Gq7j9|;3SnsEX|#=a*eL/>>k@.;Wa2uUZT2ts%!F?iq]Ruq^oe=]kd?e*[/U6D' );
define( 'SECURE_AUTH_SALT', '&S8X=y=(+l=k> ;qzDDzz?P3JP5a^b tkFWm^}U*RgLLgHWIm6eC5?S[7zFt]*R$' );
define( 'LOGGED_IN_SALT',   '@S2ZUn#WFFy.gpX$.zSvWRB&vnAEFs1x0/JEpD>L!cjh(k(qDRY*twzlZTK<S<-M' );
define( 'NONCE_SALT',       'CX]D`P0EgE,jgp]r+A0@ge/6;;LpIf&HbGb!/o_s*4+ns|y@7N#8pB8PCdyCHC9G' );

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
