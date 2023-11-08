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
define( 'DB_NAME', 'proyecto_alfa' );

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
define( 'AUTH_KEY',         'O:@Dh3J0OKT1&tdq9]_X{B9D`A0R;F~|eK/N-pIhLB[@yn[!9a/*o>Lp7YayPYN5' );
define( 'SECURE_AUTH_KEY',  'n4<3CQg;3g#`:X|iypY=l &) YV!|.$qIzm{/BR[dK[|5qUV];.XS$S@^HFk4UNg' );
define( 'LOGGED_IN_KEY',    'ELZ;.Ef+~=}px8ZN/zCfOV&bc@X/d%Diq*m4UFVg`qQkRx6i^Z/K+l;W~TBE?y?l' );
define( 'NONCE_KEY',        'hj364xi9erW8HuFNrYe$0k#.?77-ayw6Vxq9aQV!F<VWpd.1k5o/*bzjR}!O{4(X' );
define( 'AUTH_SALT',        'iJg]s80 IsqWU_-=11ww3CFCO_#-WC,6uzo^94A#=(4Mm_fLWMhpbw<64&pp&%|e' );
define( 'SECURE_AUTH_SALT', 'y;oIh{EWyu?p0>j%Cp%vl~1:J#:27AK>#NzrB9&gn2sSIDh%?=!_z&8v)e AnNnR' );
define( 'LOGGED_IN_SALT',   '>C,m@7b:5w!XC:;nd}7aAWl(&_ajjL/~/9U?oN_vUzAfc_oioO&X+}@-56.G3}DS' );
define( 'NONCE_SALT',       '|mv`ZK_Uu[7}0WtrzxFDzPD7y1>`HfB#qwSrjaSHo:)g:BGbOTq3sh(LM?}L*e`b' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pa_';

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
//Para que no te pidan los datos ftp
define('FS_METHOD', 'direct');




/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
