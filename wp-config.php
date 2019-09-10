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
define( 'DB_NAME', 'custo_brasil' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'G)x+;zm6XYg|OfuS9]9[/`o?4a3.=z0GCC0{o1^2=Sl0;.d]]u]9{FOMEafP6w*;' );
define( 'SECURE_AUTH_KEY',  '.!,Ev>yV_!w{u1a=r)b{OgV^!*{mI~V{1UQT?)F9z;nh[`5?4K:Ph:}4Ke8zDE&k' );
define( 'LOGGED_IN_KEY',    'shUfE&}_p@Z.A02.pk)|t(zIfY28p5}d,zAc&!COGq[4v:cqg0m&IAx;=t&he>Fa' );
define( 'NONCE_KEY',        'kv{(%-!LNP@Os%v<^$]<3D VBX,Meq99ei#^xsp1Juq16L-]Xgt&(~<~`< c,w*V' );
define( 'AUTH_SALT',        ']1ytl>lYdfZo@i|F],<VY*~?+cQo9/Gf2WccX_OD)~a$&6F4aAZa0i: u(9FsUW~' );
define( 'SECURE_AUTH_SALT', '8jsT[x%Wm{7-[x=XS,p`kp9gpbf{+jNXs,UoP)dOMCt#d~z=!vj(/9%`#P&{WW*J' );
define( 'LOGGED_IN_SALT',   '?~/i`. g@ 3.&%C`H1v|Nqs|)`!sc4,M/073btNJu$@utpJ;`ns,!eYnoT4}%DvU' );
define( 'NONCE_SALT',       '@On8Y&x$/t&{-W#vD&GWUT/!H?zb@x#7q-u5C^sJD(z3OYl{cv{yW8U|SWJ|%wE}' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'custo_brasil';

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
