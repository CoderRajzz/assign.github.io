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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '>.iXZ[lL9HO%d2t>c9[I6c`PC6uqG5^{e~Na ZjokK$MaMc~RG(]iuS=AT1<Q)A)' );
define( 'SECURE_AUTH_KEY',  'IKVjnSdqUR$?7<DJFj]MR2/W1E3Jj#D5jt@!f{WtV8SO4}>!AbAY^ 6oMbmr&^F=' );
define( 'LOGGED_IN_KEY',    'D{i*h3OXY.m$>`rP>{i*Ae05}#a<QHkcg%1pgL3# /04/`e6]CCe@^n4Va6@=k[y' );
define( 'NONCE_KEY',        'j]mZ05x1.Jr&nd # :qsrMuSXUnZepnbf0o@B|}wJ_=zHya-[>1.eKVdt<n^JWXP' );
define( 'AUTH_SALT',        '-& @o!Um~9K!qQR8{lJ;>n,&>Sv483R$h0h76jp$qrq:/$EPxGLBQtUW^Z2k(76=' );
define( 'SECURE_AUTH_SALT', 'xwjtvQ1==9cy|0t8`}GGPV/V|43V32oIFI|Zf:rGWJ/N,P_Ok6=oFn-Zm8c^n2Ap' );
define( 'LOGGED_IN_SALT',   'yse;0z,{dMgK_vSnM/bEFtH|zu}%QnA>oL9;2Cy,:sps<3h7gtS{7+c<6W:[gs,7' );
define( 'NONCE_SALT',       ')HV( `dJ:l?%kvR3v1l`aoWIz&)ebMO.bo+?3i5orAZAe.f+pefKsa17L-^,{DB{' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
