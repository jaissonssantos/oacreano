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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'oacreano');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

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
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')tZyvicOZs8y$G@kXO!Zm{Dpz=>{QW&*$SywuR&iqIzatT,yKXsU],k9|ETLTM~<');
define('SECURE_AUTH_KEY',  '<Vedxs1]72rxZ<nJn}(:03l$6hSzS?D%>*`Z|{0bt@1n8G5sM$cam=ozdgm!@aO%');
define('LOGGED_IN_KEY',    'jD9%aS]{jXMWb|V:mNk-ix/@=o+#9e kK)?FB#?/0tm<{^3N{ hA|A]r8cIVI7|6');
define('NONCE_KEY',        '^@P)>M}-xc:to<;y3[`5n2MIhJUf{GH#}kL#f;kdLxRT]1 O}obOH4Pd]gw[_E{&');
define('AUTH_SALT',        ',aUl64Hvx9DT5lzn2Wq[syFOyj6B PEP|M,@7[#SgTa&FSq8,Z{>}4SSwm]Mp8FQ');
define('SECURE_AUTH_SALT', 'aVs?H?P{lsQM`}nrpJ&x[l/u(O.2!# 0(}>d]z.cF^)c;x#(~6wnmY}-.A}I;Uq@');
define('LOGGED_IN_SALT',   '{J(w29wEpkA{#[m^lx%0vEV`= `N|m/+U;U^h4d`ylCJLz~+UID_}O&5 10S;wlR');
define('NONCE_SALT',       '`v7^&x2@jmvCO|]$-p}^KThW<0SA $GHC_4G:kW0sL8fZ;-gD}?dP}17Q,bkos=|');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
