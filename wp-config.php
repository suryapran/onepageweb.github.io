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
define( 'DB_NAME', 'onepage' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'D]FqXsv<YEXh?L<`Nyuju4fs|4v=z BtrvB~^u1Hgo$z9|Y.;>?ZvnbCO{kkLYQ|' );
define( 'SECURE_AUTH_KEY',  'y<)3H5C9T&U05P9e2WQU7HY#sU>:gQZy`=_8E3GRyY2`OGb7Ota3ZXWX%SmNGY{d' );
define( 'LOGGED_IN_KEY',    '^VE7/d<eGZA-lLvf2s5&_ykS=/t%~=pd@{|2cpC(R*hFTjn>Uq*ZItf~A3pJolgp' );
define( 'NONCE_KEY',        'l;?WslD?;2SMQTKJiQ;$9C5C_dbXxdCeg0~x%9QTl&y#Nl/}$HGN~bIArk<BW$Gi' );
define( 'AUTH_SALT',        'e(-s*pGUCwZW`!J-wZi?aH_ciOeKy0e)4A-D+{5qT:i-v^>ovmDRq4ENzB*xjpP1' );
define( 'SECURE_AUTH_SALT', 'cQt$Zhv&v$[[`y*2VL<OFV^~+%qr+QX(]Y<fehaQwKi|S Rw?b`H8tyQW1dSM}#b' );
define( 'LOGGED_IN_SALT',   ']Y#oEitWuugxOH~9.Dy&+CxSz-fk~<b)3kNB;FZ8rLwPJK9y}k b~):m KsSH,9T' );
define( 'NONCE_SALT',       '>;A`8`I[>BkI1|<5m,4NE7sQ:z8vvP?@_AIcWI]oNUP/b|Ai)BI8q2JNV?OtxRuZ' );

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
