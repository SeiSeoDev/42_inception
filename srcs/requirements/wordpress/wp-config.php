<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
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
define( 'DB_NAME', 'wpwordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'lol' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'mysql' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 * */
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
define('AUTH_KEY',         '+^`I_eQR-,#wDL-CEf+g_w~+=8fA?c8= Cx?^5Shk|JJAM~jH4|o{j31{-J*_vZV');
  define('SECURE_AUTH_KEY',  'c6 iA>__X/M^1Do)KYO$%{@D>$t6GNjK!>qsyDft99<t#ilG_J`fiH}k_cg(jth ');
  define('LOGGED_IN_KEY',    '9f6~`w2zf2LO^|ENBrU/]J+Ia}|[1Ta3rxlw-q6C>oc>Ia<! *2[{Qn$}GuKu&Y3');
  define('NONCE_KEY',        'Swlh&|SsP+Q_*ptB&xV#i)Y#pp)!K&$~mf45~|Ta|S6pVO&#,ZA#mM9akx{vD@aE');
  define('AUTH_SALT',        '_bB)ajbLT,.S<K`Ssnu|$3EPWg!YsuEcWk5Fo6$4}EbQ-X2?|&C?NgHR?{>GqtWb');
  define('SECURE_AUTH_SALT', '@7{|_T1M]3K$$p`CQlc=Q}?%QPLBoC4yaJDW#93e}7TD^wlA6o V&QNF@ks#m.yK');
  define('LOGGED_IN_SALT',   'f=&=x?IuD<J6nN?-E$Sa*ZYV!4JHF~`l#||w1%v!T6-]#c^`DL/D=g+v8HzEl7ec');
  define('NONCE_SALT',       ',sx6L+}v(f( >llp@?!xzSuqItQZ_)&Im)BoC034~.{IOq-U6)wZ#&AV+wXM-^{s');

/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
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
