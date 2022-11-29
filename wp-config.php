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
define( 'DB_NAME', 'Portofilio' );

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
define( 'AUTH_KEY',         '& YPaipX!<u1b9~k(@pv3WoB&vxbra~&N$:~74b&Fs!S|*K72|NL}i#k(ro6Lbwx' );
define( 'SECURE_AUTH_KEY',  'R-dqaL>rZ>+9N`<nn 4ny<O0}jF|%_R& >-jwWpmrzG*^$iZ^*?Y7/^{dP364usL' );
define( 'LOGGED_IN_KEY',    's9m?r<RY?.=l&;FEbm@w3x/.+Wy/qZc5vW>X_vWo`!,7, 68WD_.S1:M/q3I]G2A' );
define( 'NONCE_KEY',        '&[;sIM(.wr>ek~)eCis]zR ZV(-1-R@MP&6DAbEgd0%Y%<&7+G+=ru%ck6ab]2?o' );
define( 'AUTH_SALT',        'BS$2Rt #B-9]t97GIX;VL>@)86RWzRe*o=WJH*rV)!U)4U3g[KH=ODUzpw0;~&sl' );
define( 'SECURE_AUTH_SALT', 'X%G9c?I{Hl+m/Ln$z1SP[:xZ8>^1eh+`>gpJA!(vdWD;b*_d<:J?e%jbe[oT<)cl' );
define( 'LOGGED_IN_SALT',   '`NHQ@EdI_`99DA!nk@(o77t:6yI`Vz]b|QC* ;W@4wge%6HJ#;<3v!f<oD[>etb-' );
define( 'NONCE_SALT',       '=6y|/G4{J2Awqw^Zj#F{gbbDsF-(DBMavN6i,]YN_iji`|!oaHq<PGXew7*M]vQL' );

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
