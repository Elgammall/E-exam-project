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
define( 'DB_NAME', 'E-exam' );

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
define( 'AUTH_KEY',         '* 8rmRvEeE?E#nyV,Z^A7:wSQ7P{rfs^>Ha7%omN&W2mq32kS0=C*n(Iuen5Ft_5' );
define( 'SECURE_AUTH_KEY',  '$YF5F.9*_Bg9#}UfRt0qQM~ Z@nlYR5kTFeskU+Tk{B{m,usJU*]T_Z|uS`MXdI3' );
define( 'LOGGED_IN_KEY',    '772`C$igy}*(zC?j1.DQWx1xuFdI.-M6g2Hi3f9gHNsGdnvvrPzAPF!1TCeVyaD^' );
define( 'NONCE_KEY',        '8y+2AVE.R;axN N_D](yG^teawWL&k6%`rSN,NK.!{fEOKaqki@r4JF7p?A8W7Cn' );
define( 'AUTH_SALT',        '^wWQP9I#GTJ(V,_cqvi|PbEq~ +@!AOg+lmc.5Gd)nNO6e csY|6j&?y47=NCSJ$' );
define( 'SECURE_AUTH_SALT', 'IQs=k~}4$Apx@%yQ.I!8W4Fvu^&6RjZ;/b>/2N?C<tc%CW,jVN:R|>`2CsT8h-aI' );
define( 'LOGGED_IN_SALT',   'gghS~lR>O!lkP@XDFG!r_?Um/a.z9=MH7CD:c$LGlqnIHRtAF1^`4knK}KJIU2 y' );
define( 'NONCE_SALT',       'M:(i4+vL<4i^1]L?gzq|L|tgF6ii5gAhE0empO~Zui19M-2m$#U]m_<I4eXL)dCX' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_exam';

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
