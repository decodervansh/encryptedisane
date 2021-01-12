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
define( 'DB_NAME', 'encryptedisane_db' );

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
define( 'AUTH_KEY',         ',Ureklb~mN%40)V?LrZY21;inx{,CK8cj1^ii)qB+]n5;xbCL+m(q%BPYGn%4%YH' );
define( 'SECURE_AUTH_KEY',  '0&`]YHzmGA%$JrP5Ry`5[<Wd%RV6+8?f>r3#;yhL9hUfCR|cF>2MJ*Y(Wr,*P#`b' );
define( 'LOGGED_IN_KEY',    '3I!qkK2V~VSjGp2XqE2V5?B*lT>0F#sbDXW$HbQ@5W?-KKe./=-&afg<%q]$O|)!' );
define( 'NONCE_KEY',        '|UF6?]}A[C-d({4c_an2IF7%YG7{!_hk4IzZtH6pVgeU~)baS_oEiU]+F1kC&IqZ' );
define( 'AUTH_SALT',        'P}KG}~#$G{[$lU2GIyR<ij<78UHvj#5m;<o%#OAngH]GLZ(1p5]T#4u8s*Ofd6Bv' );
define( 'SECURE_AUTH_SALT', 'Z86p<YoXO4H*dAm31+l20_;2Kajemdp1@k{n&3,cq7BLT_A^[JvmG{3nMg1oF}IB' );
define( 'LOGGED_IN_SALT',   'Q{lk6T1RtCLO Hr4C>8~0j<;6SY:841H-iP[=[QVDaakKf1-x+A{Art#z9N)L{H4' );
define( 'NONCE_SALT',       '*mzgPbGxcCC2E =5x=lv&7+-Hh;0od |6]mO<6tttj/_|M[.^Mc>~e}]&Ahx,8;:' );

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
