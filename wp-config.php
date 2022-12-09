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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
if(isset($_ENV[`CLEARDB_NAVY_URL`])) {
    $db = parse_url($_ENV[`CLEARDB_NAVY_URL`]);
    define(‘DB_NAME’, trim($db[`path`],`/`));
    define(‘DB_USER’, $db[`user`]);
    define(‘DB_PASSWORD’, $db[`pass`]);
    define(‘DB_HOST’, $db[`host`]);
    define(‘DB_CHARSET’, ‘utf8’);
    define(‘DB_COLLATE’, ‘’);
} else {
    die(‘No Database credentials!’);
}

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
define('AUTH_KEY',         'x^8u{(+>~=r#iN>~[Ss*XqW|Q3}H<~G:u)<8pgV+?bDNO)H(S6/Ny%<CWANs*QqO');
define('SECURE_AUTH_KEY',  '<kK)= Z964z(&x<Hizkpz-i;A{h?|@!|40:oh=YaW:|94Tm/; BJzC_j1*L@KE:h');
define('LOGGED_IN_KEY',    'SQl9_|F*:}o0H3n%2KhrO~4)=hb*Y5x?=Q(q;^*IUS#![D0gqLYWF<[^qJn*4dX8');
define('NONCE_KEY',        'Lvx*dT88>dxCx0=nUK=UHQu5Ogitd$^)/|Z1q^StVVF}IHix#jqp<<`dUY | Ov>');
define('AUTH_SALT',        'o-~KF(VWTCazm;<WeuP`4J<3jB8n)?s+b& 6MbP]de`=>F1a#|;H&zId]]7j@-X-');
define('SECURE_AUTH_SALT', '|1dUFP>k|HJ%[/.S&?dmZ!b#/yBe9o-bLL#{F/H=U@Mp-s 7jiG^x3jo$fYNH4W^');
define('LOGGED_IN_SALT',   '`*D~AA:/|a1ovId8W$Z;oA;:31Qp_hxO+ Iwvp]S P6~5R|2O[N38^}S72N*^Yv`');
define('NONCE_SALT',       '|Wse<0O>M0c`4|~-2WSx1&IWW1p%Y4Wd?CT:Y|?RJ+;f&iv8eiSy;$I@%3/.,(n)');
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
