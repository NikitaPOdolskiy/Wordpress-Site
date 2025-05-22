<?php
define( 'WP_CACHE', true ); 
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'internet_magazin' );
/** Database username */
define( 'DB_USER', 'root' );
/** Database password */
define( 'DB_PASSWORD', '' );
/** Database hostname */
define( 'DB_HOST', 'MySQL-8.0' );
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
define( 'AUTH_KEY',         'g57)0+F/IJIHzL-nB[eH_%4 &Rty)(Y-mpJaFC%NzB|9zS+)Z(=cC_{|Z&.^}QPV' );
define( 'SECURE_AUTH_KEY',  'k@@Ns3f3&K5Irerm#mKQs?l Wbn$qanNCOq:xbC>|<38&z`0t[O;)x@c;x(0/Bjr' );
define( 'LOGGED_IN_KEY',    'q+6mZJ`/|C<V%*k.:J!q{?/C/aRYD:0NRn!+D3r4;/i9q|bd}H6Ba5[voAD zG}6' );
define( 'NONCE_KEY',        '3n;Mr^G+W;]NzHWIX:lwh C7T=GWn;LdeueJfLKpWS7qFLWq?9}?Cj@saE%0!=+E' );
define( 'AUTH_SALT',        '!wK*dyS~uyw.Q}$S=NI4R|d|Z;m&P|E9SKA3.,Cey~;T-*}M arwWM4u@Fz_ 5|;' );
define( 'SECURE_AUTH_SALT', '3k^as-%a01J3n_hmx|J6i//<ukdTR(TyLlwux0NA7]J6g/f{4>z+5+r`UPT|LH&C' );
define( 'LOGGED_IN_SALT',   '@X#td0cNla8}P|A3dG!j*7h2]*!j#fF8mBM=ECS{ix.X`ex@Y6!ayMd`sH^hf(j3' );
define( 'NONCE_SALT',       'RF[xF*K]5%F|O?Yz^DGO<`&/K``X vo@.:@[!C)C@&4jUCN1Jw4>GWNGWdV?4I{[' );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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