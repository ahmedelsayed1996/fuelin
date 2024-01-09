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
define( 'DB_NAME', 'fuelindb' );

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
define( 'AUTH_KEY',         '.J11!R)7+A@iOL#O;sWL|6r6@4==GDH+BZF:y3miGl1X2Au#TTTqj=Aj!BN:2KXt' );
define( 'SECURE_AUTH_KEY',  'InC&=/Wzn>%:aVaX!BernNce{K}fN8r#;g*)?dKu [oF`bEHtyt-f}oVkuuUKeE4' );
define( 'LOGGED_IN_KEY',    'UD60Xl<n9)a%uky1Fr ]J9)H6K|Is}@.I%#[9v@C}>|5&+Q[>X=[Sy>roWvl{23j' );
define( 'NONCE_KEY',        'X~ddwt!n0#8 Zy&/V)4Xy|/qY5&)>HV4jkTy562;bg<tRKiCCkK^QhCxmT^sEj( ' );
define( 'AUTH_SALT',        'TS_h{|eu%=dQ4vaQLa}y6-4JY/$H=Y cT*~f#dTySdcnM,l7F<K:b=ZXrD^Jn(kR' );
define( 'SECURE_AUTH_SALT', 'w^vh2NWKK=jRk,]nH>AU4rU<FE?CBn`tdj=W5=5QbaZ2QhdOwxUN.rYSx/|/k<Af' );
define( 'LOGGED_IN_SALT',   'Qyc/)VSXmb~[DsUv{p9~Mn62?)t_>5pawObiv$R5Ktgn$<6^s]N>@ph;ZRzAk#3F' );
define( 'NONCE_SALT',       'Wy?[TM$~E#G:GJS#)?ND$>+&8,cKMjT;vH& LMqg[VJ{hQxYN$!Uw3o%,O4ApIuM' );

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
