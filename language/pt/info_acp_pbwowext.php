<?php
/**
 *
 * PBWoW 3.2. An extension for the phpBB Forum Software package.
 * Portuguese translation
 *
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ' « » " " …
//

$lang = array_merge($lang, array(
	// Extension modules
	'ACP_PBWOWEXT_CATEGORY'		=> 'PBWoW 3',
	'ACP_PBWOWEXT_CONFIG'			=> 'Configuração',

	// Extension requirements
	'EXTENSION_REQUIRES_330'		=> 'Esta extensão requer o phpBB 3.3.0 ou superior.',

	'LOG_PBWOW_CONFIG'			=> '<strong>Definições do PBWoW alteradas</strong><br />&raquo; %s',

	'PBWOW_DB_CHECK'					=> 'Verificação da base de dados do PBWoW',
	'PBWOW_DB_GOOD'						=> 'Tabela de configuração do PBWoW encontrada (%s)',
	'PBWOW_DB_BAD'						=> 'Não foi encontrada nenhuma tabela de configuração do PBWoW. Certifique-se de que a tabela (%s) existe na base de dados do seu fórum phpBB.',
	'PBWOW_DB_BAD_EXPLAIN'				=> 'Tente desativar e reativar a extensão PBWoW 3. Se isso não funcionar, desative a extensão e elimine os dados. Em seguida, tente ativá-la novamente.',

	'PBWOW_DONATE_URL'                  => 'https://www.avathar.be/forum/app.php/page/donate',
	'PAYPAL_IMAGE_URL'                  => 'https://www.paypalobjects.com/webstatic/en_US/i/btn/png/silver-pill-paypal-26px.png',
	'PAYPAL_ALT'                        => 'Donativo via PayPal',
	'PBWOW_DONATE'						=> 'Fazer um donativo ao Avathar.be',
	'PBWOW_DONATE_SHORT'				=> 'Fazer um donativo ao Avathar.be',
	'PBWOW_DONATE_EXPLAIN'				=> 'O PBWoW é 100% gratuito. É um projeto pessoal no qual invisto o meu tempo e dinheiro, apenas por prazer. Se gosta de utilizar o PBWoW, considere fazer um donativo. Ficarei muito agradecido. Sem compromisso.',

	// CONFIG //

	'PBWOW_CONFIG_TITLE'				=> 'Configuração do PBWoW',
	'PBWOW_CONFIG_TITLE_EXPLAIN'		=> 'A partir desta página pode configurar as opções de personalização da sua instalação PBWoW.',

	'PBWOW_LOGO'						=> 'Logótipo personalizado',
	'PBWOW_LOGO_ENABLE'					=> 'Ativar o seu logótipo personalizado',
	'PBWOW_LOGO_ENABLE_EXPLAIN'			=> 'Ao ativar esta opção, o seu logótipo personalizado será utilizado em todos os estilos PBWoW instalados (exceto o estilo principal do PBWoW).',
	'PBWOW_LOGO_SRC'					=> 'Caminho da imagem de origem',
	'PBWOW_LOGO_SRC_EXPLAIN'			=> 'Caminho da imagem a partir do diretório raiz do seu fórum phpBB, por exemplo <samp>images/logo.png</samp>.<br />Recomenda-se vivamente a utilização de uma imagem PNG com fundo transparente.',
	'PBWOW_LOGO_SIZE'					=> 'Dimensões do logótipo',
	'PBWOW_LOGO_SIZE_EXPLAIN'			=> 'Dimensões exatas da imagem do seu logótipo (Largura x Altura em píxeis).<br />Imagens superiores a 350 x 200 não são recomendadas (devido ao layout responsivo).',
	'PBWOW_LOGO_MARGINS'				=> 'Margens do logótipo',
	'PBWOW_LOGO_MARGINS_EXPLAIN'		=> 'Defina as margens CSS do seu logótipo. Isto permitirá um maior controlo sobre o posicionamento da sua imagem. Utilize marcação CSS válida, por exemplo <samp>10px 5px 25px 0</samp>.',

	'PBWOW_TOPBAR'						=> 'Barra superior do cabeçalho',
	'PBWOW_TOPBAR_ENABLE'				=> 'Ativar a barra superior do cabeçalho',
	'PBWOW_TOPBAR_ENABLE_EXPLAIN'		=> 'Ao ativar esta opção, uma barra personalizável com 40px de altura será apresentada no topo de cada página.',
	'PBWOW_TOPBAR_CODE'					=> 'Código da barra superior do cabeçalho',
	'PBWOW_TOPBAR_CODE_EXPLAIN'			=> 'Introduza o seu código aqui. Utilize elementos &lt;span&gt; ou &lt;a class="cell"&gt; para separar blocos com bordas. Para utilizar ícones, use blocos &lt;img&gt; ou defina classes CSS especiais na sua folha de estilos custom.css (melhor opção).',
	'PBWOW_TOPBAR_FIXED'				=> 'Fixar no topo',
	'PBWOW_TOPBAR_FIXED_EXPLAIN'		=> 'Fixar a barra superior do cabeçalho no topo do ecrã mantê-la-á visível e fixa, mesmo ao deslocar a página.<br />Isto não se aplica a dispositivos móveis. A barra reverterá para o modo predefinido (deslocamento) quando visualizada em ecrãs pequenos.',

	'PBWOW_HEADERLINKS'					=> 'Ligações personalizadas da caixa do cabeçalho',
	'PBWOW_HEADERLINKS_ENABLE'			=> 'Ativar ligações personalizadas na caixa do cabeçalho',
	'PBWOW_HEADERLINKS_ENABLE_EXPLAIN'	=> 'Ao ativar esta opção, o código HTML introduzido abaixo será apresentado dentro da caixa no canto superior direito do ecrã (na linha antes da ligação FAQ). Isto é útil para ligações de portal e DKP (algumas das quais serão detetadas automaticamente).',
	'PBWOW_HEADERLINKS_CODE'			=> 'Código das ligações personalizadas do cabeçalho',
	'PBWOW_HEADERLINKS_CODE_EXPLAIN'	=> 'Introduza as suas ligações personalizadas aqui. Estas devem ser envolvidas em elementos &lt;li&gt;. Para utilizar ícones, defina classes CSS na sua folha de estilos custom.css.',

	'PBWOW_VIDEOBG'						=> 'Definições de fundo (Vídeo)',
	'PBWOW_VIDEOBG_ENABLE'				=> 'Ativar fundos de vídeo animados',
	'PBWOW_VIDEOBG_ENABLE_EXPLAIN'		=> 'Os seguintes estilos PBWoW suportam fundos de vídeo animados: Battlecry, Diablo, Garrison, Heroes, Legion, Pandaria, TBC, Tribute, Warlords, WotLK e Xmas. Pode ativá-los para um efeito original ou desativá-los para poupar largura de banda (ou se estiver a ter problemas).',
	'PBWOW_VIDEOBG_ALLPAGES'			=> 'Apresentar fundos de vídeo em todas as páginas',
	'PBWOW_VIDEOBG_ALLPAGES_EXPLAIN'	=> 'Por predefinição, o PBWoW apenas carrega os fundos de vídeo (se disponíveis) nas páginas <u>index.php</u>. Pode ativá-los para todas as páginas, mas isso poderá afetar a velocidade de navegação dos seus visitantes (mas em geral não a largura de banda do seu servidor, pois são armazenados localmente em cache). [aplica-se apenas se o vídeo estiver ativado]',
	'PBWOW_FIXEDBG'						=> 'Posição de fundo fixa',
	'PBWOW_FIXEDBG_EXPLAIN'				=> 'Fixar a posição do fundo (incluindo vídeo) impedirá que este se desloque juntamente com o restante conteúdo. Tenha em atenção que alguns dispositivos com menor resolução não terão possibilidade de visualizar a imagem de fundo por completo.',
));
