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
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         'VtU4]UNeCM[TX+}yql &qVz j=pfPanw3m%)dvP@8N> wD7~vu[vxWO1h6ew^teN' );
define( 'SECURE_AUTH_KEY',  ';J+rX)<D_!<W]d>4gwr0>2D`>oWqM;WSP4S;[fE490#d3mtd<ruYn>Jo`{*GVIr<' );
define( 'LOGGED_IN_KEY',    'X-DAG7vzVE^[W49ul4A^(f,M<Pl5ALq#}()mRlKsGjl}[r4To6a8r8>WY^qQh%GP' );
define( 'NONCE_KEY',        ',@_G9=I{ApHeJ~I!h!I(Y#>uGJ [t$776LmScI&(@#XMOkc./8;BhSFWx]4R?+5V' );
define( 'AUTH_SALT',        '2mb}3^-;Y>L/JaWNruDzd]w&GTd|XEXD_uP)UaVr#e_M..Gpo5 ].]hZ:N|b1fpp' );
define( 'SECURE_AUTH_SALT', '(2#61#cV}5]s1qPpL7Bj!T:gj2r&cgLhjZ3!GIsw8W,3BLu`bKe2H<U5P@QqXCs`' );
define( 'LOGGED_IN_SALT',   '+e6LMeSXBtnubUvd@ e|agETzhFzP+(+%Oom=is[YT{9SMV8/zv`L:wHhzIv:sqq' );
define( 'NONCE_SALT',       '?:9VtE]#24U>^&CahSCx:5uf1L&mBz8wVDvRpQS<<=3R:B,<yWpib%36Heum-;Vs' );

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
