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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Q/gJLTsLdOg0/MUHOFvCIJT9fc6XI+RwKoEyS3V7ORbfFyy7CM6rGlX9dEMrt/EoYrKOg6VH+OWpfDYHoBF+Tw==');
define('SECURE_AUTH_KEY',  '7Dtb3EpejMVgAErid9tCmhloqF2+QZw902dH/qZ00ZcaM0XuYfhJADUOgCW4GP9x3yVeyNXqpsM6RuHwmBX67Q==');
define('LOGGED_IN_KEY',    'PoEWVMvJICL4QIAZXOdGwqepKoRcRr7co3YYsyUViuDhoAxZEeXevTLrX5trAcAlb6XYnxMfp8Z/iD97kBUDwg==');
define('NONCE_KEY',        '32VpdzAe42BAKTiUJYdHLj7XZhp34gdSAo49fIM3YBmBtL8XpQvsJhriWoLsJKG1MJDPaNglhrjSnOsY3QcYzg==');
define('AUTH_SALT',        '8XNuZ0GVS/t3voLUbrqk/qR8VwoQVVIiev4/U/83pjJBjRmIIj5rhzyA88ZrgBio7loFAYND+ve0BfK0R0T4Dg==');
define('SECURE_AUTH_SALT', 'y+pE0tKTZS+Erlac8pvmRPiG/StQV1d4TmV6Y8my9CDM+b94zPArnxtGsSMUA0zFYXw1HIgp2Bpn3KSJJjfZQA==');
define('LOGGED_IN_SALT',   'IK0UVOiguIwImMDQuslsWa/ctWvFK2H/iRKiDgvimo9F/j7V1jtC0tqle6tIOs5P2yYBw0JkMWEvsCFh/e1PtQ==');
define('NONCE_SALT',       'B42k5N7j04K+Os77tTYm1YFnuijO0Hgqo4qNWJVAI4t+aLThJSPrzUAuLoFlzH1F4qp+p5jCcPRZnB95InKTaQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
