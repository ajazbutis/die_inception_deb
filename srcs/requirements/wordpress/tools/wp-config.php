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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpress' );

/** Database username */
define( 'DB_USER', 'ajazbuti' );

/** Database password */
define( 'DB_PASSWORD', 'pass' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8_general_ci' );

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
define( 'AUTH_KEY',          '[#WwrvapjWJ*;^3*KQ5+:6d%Dy/Ctn<3^S~*PD`>Ae~Z#1D`B}t}Eca}n5BGBoU}' );
define( 'SECURE_AUTH_KEY',   '/OlV4ePR#?N=[RHv]XxFre?YO8Of2d$HZ /we)tyD5T8I^JeWg5m_KGfVo@3$-Q>' );
define( 'LOGGED_IN_KEY',     '?7cV[RBUtcIN5-K6q(!`Ymgt4O}Z,;G[KMdM0Drf!05Q1lTu$:a(S~ M)}SySwV=' );
define( 'NONCE_KEY',         '#;?i I}WQ-Z<{mvR3~C6~wiM^9AyxvV,O]a=Xog%Zu;94/jnp(ieAjP$.I@v.Xf)' );
define( 'AUTH_SALT',         ';BtslwI<O o~_vRA<p-RbyUg$ l>|h|q_np,!Ic3 ZxdO06X)o/= UE)AHG2EX>O' );
define( 'SECURE_AUTH_SALT',  '`7K`1M(GfDEmw:(Swku@{i:mZ@p9:3oq:mKqBQqS*][~#{@g~sYD}%;xq/c{|=Hg' );
define( 'LOGGED_IN_SALT',    'VcLh }6YMckikye0JO:3+/<0J6d%@=u]I2k#pF0hb-h:, au8#leMN<i/o,A@Ou$' );
define( 'NONCE_SALT',        ')69B|t+sJlynnPLw:t|<AYcucClsNNoThP8%vNxB(bLI8cRh@){B2$QLGzksiC%4' );
define( 'WP_CACHE_KEY_SALT', 'ZR,X),^-ZMWT1_$G7rx(<q,r&!I1p?`{*BR$jr|bMeX@2oNCW :EZ=Op70AlI-@H' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
