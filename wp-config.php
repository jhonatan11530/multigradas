<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.

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

define('UPLOADS', 'wp-content/themes/empresa/img');

// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', 'multig_radasArelis' );



/** MySQL database username */

define( 'DB_USER', 'multig_ArelisSilva' );



/** MySQL database password */

define( 'DB_PASSWORD', '&)3S)8eA3akB' );



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

define( 'AUTH_KEY',         '=*RL*Cf*Wygmm7]`)!|#0LC:kyvoac^}UO}&bJn6&7{L@<r7|a847*E#npfql85P' );

define( 'SECURE_AUTH_KEY',  ',#@-,HmRxBd&jXi5>;aSv,kvJELPw/:?p*BJ@%Q.f;PNw(X6CXe=yW?=A^>gx6e7' );

define( 'LOGGED_IN_KEY',    'a.t~#osx,u2dd<bgVE|t<:F1-V|s5jn;FxgZ.)jC|:b~;rS_y1;QN/vY|+_]!n &' );

define( 'NONCE_KEY',        'Ns8yE@b;&]w{s9(_Cc*#(WEUQX)cVIN+r}<h#0XT_G|@lvr}1r*Z4LFF;+u3o|>I' );

define( 'AUTH_SALT',        'botz5M)1i^SmK-[;;0?S Q`T(lmXQA`7J]duZ]?1iV-x$(*&(E?UxFj0L-VS+v6h' );

define( 'SECURE_AUTH_SALT', '!QN[|z?qnS+dT E1mR|@oPmHaS-oR]E`i#_zm6lGZ`0HH.8uI_oD3t8e7FIOFWE ' );

define( 'LOGGED_IN_SALT',   'cv2:3c?>H$4o?$,!T6G]bs7b$SKrjq?U  t-a cRdr4@aX2T78r=B7.D>,cpUY:-' );

define( 'NONCE_SALT',       'fc$SQeo_M9pe|*YPos7gq-6F(f&+@8UjiWSz@YfQ?_]! ZeJHhjHY4L(p]:,0a.p' );



/**#@-*/



/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'mgwp_';



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

