<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'index' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|a+t7&{$lVYW~:&r,!k:hr@0nw!(DxzA^G-y&{-fDY=1wxl|=!^-;oQ&.^Oz*.U6' );
define( 'SECURE_AUTH_KEY',  '+(2@e8tK(c[GS}j67%!BH|$d;!bN;{JgB~r[#nwL=6AY|+SP-@RtI9TfsVeK|kJV' );
define( 'LOGGED_IN_KEY',    'S?O1x*8~WWEA12nm&~@qbUTi1dP2f2]NG&}/znuJA{sv-lxrsonncg?S6!)/eKgW' );
define( 'NONCE_KEY',        '&:gbsVnC2Y$m}aX@$SNDlerp@IHzj-7)4`tQB7Jx>BW!q/_N_ I?IMZ(qSU:*b{B' );
define( 'AUTH_SALT',        '6M7y|N$8EI@oAty8.fouO,CftETJrf8iEU1;<y6xqZ!OtQ{Job=Y$,?X4r#KYY)=' );
define( 'SECURE_AUTH_SALT', '))_%Ocf^1TYAL2pGd%yS0Y9s-qUU!_!f5xWX=-;HGV7jYg@AG$=o6/2}_Egw}pU@' );
define( 'LOGGED_IN_SALT',   '?08C5A_GM+?fd.~f=~u!ie5Q>7sGinAP?F5Ky295w@FlJa_=H,7<r7+[fF%Q#{ `' );
define( 'NONCE_SALT',       'T?/UGr9lg[%2M#Rz{`kJ().zdfNcVV6dW:R}*Zjf HbR$(sxIDTLW4jgC1(@,gHh' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
