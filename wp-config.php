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
define( 'DB_NAME', 'ecommerce' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'FA.HEq$ 9AVgHT *y*~f(/u<C&uVcLw*LO@dtr:YsAHtPrB6@O!2_i%H*VVi1iav' );
define( 'SECURE_AUTH_KEY',  '|UOIUiAuY,k%GjpM`9[>Y+nih~I(Tk93g}N{Qa@nK?(+vZunoP1It-$_:g}:y^ca' );
define( 'LOGGED_IN_KEY',    'gsOeBG5NEyMUvCy$f;#H/?W c,~9U0-8YH#FK|LY@2BsSb9h}y,dPw5::/2l[2+p' );
define( 'NONCE_KEY',        'vkwaF]&j]U7!OhA6JZ1*gB+2+&%T?3*KzH@3%g WgE,goI`#+S;YLv89$QFrI=Wu' );
define( 'AUTH_SALT',        '8( h2_tuX__7}~Ibv>[0E9< 4$Y^|uC(CkihP>i)FV:@Ye`ms%{Q@KTDc;^DFuad' );
define( 'SECURE_AUTH_SALT', '73.PC%$EMmLCOr#3s?z(`VG<FN82WybMsK=HAF fWP281rzUgF0)?,Leq^of$(i`' );
define( 'LOGGED_IN_SALT',   '$<*c;hsiG9eJIAg@h;%tcr!S9-@<i;f5mdukMvGZX@F}MZ7X:;wAF,8B-i_&*wUp' );
define( 'NONCE_SALT',       '30z95MgE_d{tOE#Pe`|~{00[4s@;R@zKVhiPegit7L$MO.P;(190Bt?.v=Vtl/K(' );
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
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
