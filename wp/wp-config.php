<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'esercitazionewp1' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7sO^t;gy})=vu`#F ,:8(vKssrVY?p4q?N6aVj9s:o[WiOY0D{n)a*jMBT{^Ja3c' );
define( 'SECURE_AUTH_KEY',  'N<z~bJtyBkyed^&615KY;ZeL6Gn6DC#/bHU1,mGL:Pagx?$!G-~l:N+GvM!5M9{3' );
define( 'LOGGED_IN_KEY',    '`!k,l)R=4(qFf8X+}*ZU6&3~H3Pjq!$:NeqP[!59n:aVP4pPy_/Z&Qd&zU!JH#l8' );
define( 'NONCE_KEY',        '{v~ &O)=wf250,@jV<fK?hmhkCXE8YmCGP#?I%R}!D&d#$RPL3+k`S:*dB J<[#A' );
define( 'AUTH_SALT',        'w~1s(e8RN5zff]Mf%G^0+3c~+EPfPPb+bIQ1I1QsAa.GX=gE79w94*x/|a?*[WRP' );
define( 'SECURE_AUTH_SALT', 'm3a2+hLuoOz&p/ E(!myFVOm|x+g@)gI zyiG9B$nC/^NoUaQJkt,29vkZnV3ii=' );
define( 'LOGGED_IN_SALT',   'zIKm.wfvJ7]4k.?.FAh<M!s|G96Ga0or?K!_vDS%T8MlSRlK 6q!6u>,aAKW0}<|' );
define( 'NONCE_SALT',       'FL316N%0uGQhbdHt~~-3V6|$2Xthg>v;f4)kD_DWa1njV4~EgeBt)(ezN{`MC24c' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
