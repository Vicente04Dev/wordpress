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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'DRoXCxRh3NfX(4aM< TvMfuK6Ol]B0|Ei##r~bD[w@/VS/b=J3rj1LW8C`M;anJ*' );
define( 'SECURE_AUTH_KEY',  'KF4N3beNZ!2[swnstl6RADG>g;qj4jKr@(Qy?Q/`wxtOIXMe.ZIHbSH}U)^9{=J-' );
define( 'LOGGED_IN_KEY',    'B7Zx|:qh`?2~:5oBF|<5H6gJCb[xg8%<IHXwIHa|,a|^,tjstn`Q;e75RSZ95nLx' );
define( 'NONCE_KEY',        'd1Dm:&?`O@-ir8EtaTby=lh(N0 /~-#FyCRj#G-5C!(WT5Qc;>}3>62TwxfZFZ,:' );
define( 'AUTH_SALT',        'r=H$n-7$@Ae,&~]^b34EuOn: &[/GqGyAUV>>}XKOp^]@43:C%}(Kan+:X|DJr(4' );
define( 'SECURE_AUTH_SALT', 'Ct]@DQCDK1Jj?gCQ8ITJX?J4=9{?*5TfEwwGrF2kc)?zJG4qYG0&m8JNNVV;;poo' );
define( 'LOGGED_IN_SALT',   '1y%Q^UZ P2k!>eGAVy <9Vj{c42=S/Xo1H~d|..8nG)-*IZi1x8#{^Af}7*lx-7@' );
define( 'NONCE_SALT',       'R,v=8l}]4fJ,r`5`>8A?n.Z5_m:Hj`wxzMToE1vIN%Kqrwff|~>mNBI@8eWWQhkN' );

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
