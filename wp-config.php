<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'local' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',-CNF:NMeA?|A?${~6?nKieiUwi9n`z-ri>=m|0miNNQW.s7mN;hK4=EH7YjZ{>Z' );
define( 'SECURE_AUTH_KEY',  ')=Ir`}_9~cpX?pLCH[j &9{52p,S!Y^!<vberBi:P}6HnvCV9tr|@sI|P@@>[&!S' );
define( 'LOGGED_IN_KEY',    'rIo_A8JRSr!gDs3aM;*l@&9O?cRfo*7.Vlfn#AB(+m-]*f_R6/9hPi<:rhoZF14d' );
define( 'NONCE_KEY',        'Y`!NHN!JQaJmXBldc=;C-1)C.ro.p*@D(1R(wY@H(2(EplV>2j&T2m_g%ajO9|23' );
define( 'AUTH_SALT',        '!6Ln{(L`.C>.M}9Du:a[o}v$*QbZij7&:RHNYSAG6=(2oJv3j}9y^vZT1#|d MY*' );
define( 'SECURE_AUTH_SALT', ' iRvmsnX%LQLd/CO~MizG6c]@+Ln@/B|Th>mJybLQx`fJ>3Edpg^~<.EBc#1clsd' );
define( 'LOGGED_IN_SALT',   '(7V6syCLb5LIPUcDZBJnKX.][?;2{td/k&bA$EWnlR_x}siwJ9094|^|d3Hq/rGZ' );
define( 'NONCE_SALT',       '/O>[n`1XZ86+HTRuCm}yH)BOnRR/I$!2Pg*ugM]6WT*(C:}+axN5yBUe#8jF_%#x' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
