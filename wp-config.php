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
define( 'DB_NAME', 'xlogicso_book_store' );

/** MySQL database username */
define( 'DB_USER', 'xlogicso_bokstor' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bookstore123' );

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
define( 'AUTH_KEY',         '6Qm.#CMu4fC2B[Qs9[btNTu|{wYIf4/BktbLTeE%>H0ZtXA&}&@35_3MrkC#/}]Q' );
define( 'SECURE_AUTH_KEY',  'SJ~%1cYBJs;cz1/;/4(1:eFXq%(s<cMG(TmQ0Z8o!6[&[7]TP7}#bJD(&q&p-]_n' );
define( 'LOGGED_IN_KEY',    'r7W$n/+ 9CK:X3#7,$>iB.CSR>5MHf.nx@8rId{<OVUO8_)%HIw3C<l=rU7$Wj]i' );
define( 'NONCE_KEY',        ']gTC/GREL%uz4Ub`%>^(gNOil`M$W`Vz%kffwTK=Hr%Hrl.)]F*ZWi gf|wKd.=c' );
define( 'AUTH_SALT',        'Y#SR#yR9)5_otM`d9Sr[ez4:`/r$.r-W0$a{/~|/K uKJN$K4+We,=}<(0J}C}LZ' );
define( 'SECURE_AUTH_SALT', 'UH$g+,0V^/r!,5B(WoHj+r&pq593@<fgwlU|:7O@z+zNb>Y6<?3r}R_n;C0X66WX' );
define( 'LOGGED_IN_SALT',   'j:f+:^[hMu[dIg`.L;TldG8fHe$IG@ O|^4X[H_%/U4*@N{ysu|l`-o-03$i7-ff' );
define( 'NONCE_SALT',       'CwrZ}qS,P{Zx`%F7Z4,f`|PFsb^UUG^~mc#1BLJ=?t)jYB*oC/ >hveyS+FS-2!Y' );

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
