<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'gcons_homolog');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'EMf&3h4]lXHIh]#xCf*bRBP$`2~ZO+9QgMi@U:<`+bE#KpDPL,)%4RFL4N3x$P?}');
define('SECURE_AUTH_KEY',  'rV]9yq,sT:LH 6}!$6Uf$[iM@MDU?(r5p3FW6-[1Y(+NKZYqMu>G?:v7VF5t4eN*');
define('LOGGED_IN_KEY',    '+?@#Q(>@yo+7j5y5U[@=%Y^+/Izh;[2W8&XHzgoh;gRL#e`8!%B88=gIq,,0e7kv');
define('NONCE_KEY',        '3$:-]+KUsjYnmwo7aZfP-p@zp`,N1vX6-S!93Jk&+M.:Pdzn#<DK@ioBo1iln0EO');
define('AUTH_SALT',        'rPj{sEx5U~^ Z_p)R[5ZP>Pj0o9y39)J0OViV@O{XyBp`Yf59Bn$dqI-]^xu#^W8');
define('SECURE_AUTH_SALT', 'sqoZzaq]xv1KFv^vj%nx(w,1?6I $d=>ERWEq.HD=Eac%A:b9.,^]0tEkp1@3b23');
define('LOGGED_IN_SALT',   'cU;gc8OkVT_.t& <|~i~FD2)m!j%<Vu1+@OH)0ND%7:6@{+;KZF^c&Qm^8awfhsE');
define('NONCE_SALT',       '7mm$OhT+_KZ3F^ql(G|2Hf>qwy-Yy8^Sb<RL&U4I? Rrho?Q?<(n,D7|?7+|CF[/');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'gc_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
