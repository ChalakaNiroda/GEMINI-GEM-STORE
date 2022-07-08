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
define( 'DB_NAME', 'projectfinal' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ')$uNPVRS#>=_u8:(,Uj#JkWQlAfnrnKw`Yc}dL^%rq=.a$/{QCq1g +9HF!dmSK|' );
define( 'SECURE_AUTH_KEY',  'h3oavZ!9t_XYxrqZ?!lgbH5/zHpM1D0iHh+8n?WB*4c #Li}pHa:usWrJaW@s}#e' );
define( 'LOGGED_IN_KEY',    'CytI^CZ}7~9!b6_EQ/^z_B`xbu:xj@>s6)/FR&tm1Y#5R-i-d,OBd1GpHXI8q)K!' );
define( 'NONCE_KEY',        'fi3yd&C]+%Z{P36^ZFQbKUR5Wo0),$]q2MRk29Hg.CQx2et*%4d FQCq)?apc7/s' );
define( 'AUTH_SALT',        'Xh:uW0hq>p,]}V3:7-;o=Fo7D~Z{66F#>zb|82>KHTn4 C{o?j.nd! t|ns$^C(4' );
define( 'SECURE_AUTH_SALT', '@;rt}IX@3pv9)et?V]z>B2Z_VjK>QKgy_i hGr|yu}_H2qAR?}VYHQR)B+auq%QQ' );
define( 'LOGGED_IN_SALT',   'pj6aNE*X`UYW<@k@yvJ?VZ~s5pyZ81o!0tzc1_-YVOQ@2*I}/&wbN6Ykz=~n}uNt' );
define( 'NONCE_SALT',       '?i,rEDo&=e;q/]CjEg~-<rqa{3+# &oUf&gqd:wuTkm/]NLOEh}h(q-FfB%,kWJS' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
