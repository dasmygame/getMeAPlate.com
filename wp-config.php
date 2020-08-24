<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nyeruajb_GetMeAPlate' );

/** MySQL database username */
define( 'DB_USER', 'nyeruajb_dasmygame' );

/** MySQL database password */
define( 'DB_PASSWORD', 'MJthebeast23' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8?{!vZ*!]Fp.zlZ+aYSAx?05})<S(&sM3DW`,0fRpHq~F7lPs{EwV3M.-`nOrtJk' );
define( 'SECURE_AUTH_KEY',  'm1H}x<DJQ_iAboM~:V/ f`.cR:TSm2K{%:}DO(dzq`h<QICt@[&GxRHU-Z@UTQ[$' );
define( 'LOGGED_IN_KEY',    '-n,Y5Fanl>1)}3|n@[jY=}[#^RECV#Jb2hYo/l 5b4J0zW#cKlO$$TZAb~l=E@#E' );
define( 'NONCE_KEY',        '=yc>B7=NErlWNL{B(,n*!v1PJEarc|mieSeL7P:WrXF$fiyRp3[j:bj(c2)!EyD}' );
define( 'AUTH_SALT',        'M!zt>UUWahRWL[-fcAR?(E(#<Eat#th;C^l|p<SP>(K00Ck/;[PX?IK0IsxZSN8M' );
define( 'SECURE_AUTH_SALT', 'XsluNR7%S<62NZPSn1  Z0/,ksBi)#E@%@|i7;Xp~k_&_MQ[77+Nr.?#%uQ[qB_p' );
define( 'LOGGED_IN_SALT',   '~P6g?r_=ooz|n6%Q>.{#%_@sj?b`;cM8v[j55ncT%, ,~#mS1Xqu7~Ef{FzbD(C;' );
define( 'NONCE_SALT',       '@cb2lMSN1.4_`nQ!8dh`VF[qz<~G`z3A7D_)j@M7N}A 737,63&=_|4sX`zt%0KE' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
