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
define( 'DB_NAME', 'db504045_19' );

/** MySQL database username */
define( 'DB_USER', 'db504045_19' );

/** MySQL database password */
define( 'DB_PASSWORD', 'VN465_9NbaMoW4zQG5d83' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql5.springwork.de1.biz' );

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
define( 'AUTH_KEY',         '0RjL.6.=]NHVPesVhXjIXB +eAe#rduEONN9 O/+ri*E;/Dco{/oSMO?euwvZ-oG' );
define( 'SECURE_AUTH_KEY',  'diJQ3*u4T8Nh)kjAm.jyP+z,]NDJfa !pFY@eWT?KReG/i&,p27zd< Ps_ne-]Mc' );
define( 'LOGGED_IN_KEY',    'vq`0`- E6ghDT4W;8;[T7)F4EJO|E~rn9#Qb_*._<01~>@jm.VKSwa*I@=aeVhu4' );
define( 'NONCE_KEY',        'RwfOI;jMdIb,xgqU,=)vKjPohir/}=VLbk:(otBCWKe~S10BzZl/U<f=Pw,7ZPwX' );
define( 'AUTH_SALT',        '%`UG)Z5qm,Xel5tJT9bkAB2xuct}ri-gW?&7w0IPSL1xF* {^HZO%P6U/u|,u;l|' );
define( 'SECURE_AUTH_SALT', '<i;ZpFp{qL[=jlJJ/cj`sXa{` =Tnszom<@35.0c[f)qXZrZUgerN>+7_A`lq+ED' );
define( 'LOGGED_IN_SALT',   'u,B(@88oguz|Z%)$M`vEh2Wu5c1$FmYvaZD`(>J?%v%TU%n4Ux0.woRF$<N*^@c!' );
define( 'NONCE_SALT',       '[__Sj/E8mUqj$Em7pplY*~Xr By$^qn0Q4HX]]XGkjU],=96cs$.}3[C!6m16M[x' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
