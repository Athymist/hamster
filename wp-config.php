<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'centre');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+o&F2g[v>*q1y S$=zp_XZqS7q,]pL@(~+j6(ugOb<=G%L6v6SM`rRoA=ZKNSG<n');
define('SECURE_AUTH_KEY',  '/qg-4D&sdE9j>M}]5sfhj 1qkh=}-hqU3otcx+;dKR-]x-`42pIMwYk0fK@PU.v(');
define('LOGGED_IN_KEY',    '$+-;.fhV6)|R2Ipe[G)?]ww1u;+&=+Y>DB%|x2i->5*iZ|{ko-Z|F-vEaFkl{O@^');
define('NONCE_KEY',        '7#iz((-cU.FkVzEVt1yF-d1IXN|e*W4_A{&nP)|^Cg1j;Hq<xVto%% {;d9((C|.');
define('AUTH_SALT',        ' Es~&x?-z9Q+b+l|jnhUj+0j^>r|r?>b|;:ry(XRCZ]Lg,:f}$x~MzXz:IcyN3VR');
define('SECURE_AUTH_SALT', 'Ig_cX{_}%Cz4aYC|$>0~Sz?/so@Yvyp|qwb@[w!7u{QWb(c!L|TT?jKYdxXPKJcb');
define('LOGGED_IN_SALT',   '8W_!TTywq]uvxFEy-Ht|-VT1YJ+PHopxJgH- d(&nraQOE_!!.aZ1/)YMH5vv?BX');
define('NONCE_SALT',       '+FQEm%n=Npy@z31o;[y;gsPp@|!^Bg|):G`Db6*[]#v-^{o]=W-?uw3H.6}O/+OW');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'gmcc_wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');