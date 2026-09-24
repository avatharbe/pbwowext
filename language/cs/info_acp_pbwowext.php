<?php
/**
 *
 * PBWoW 3.2. An extension for the phpBB Forum Software package.
 * Czech translation
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
	'ACP_PBWOWEXT_CONFIG'			=> 'Konfigurace',

	// Extension requirements
	'PBWOW_PHP_VERSION_FAIL'		=> 'Toto rozšíření vyžaduje PHP %1$s nebo vyšší. Používáte PHP %2$s.',
	'PBWOW_PHPBB_VERSION_FAIL'	=> 'Toto rozšíření vyžaduje phpBB %1$s nebo vyšší. Používáte phpBB %2$s.',

	'LOG_PBWOW_CONFIG'			=> '<strong>Změněno nastavení PBWoW</strong><br />&raquo; %s',

	'PBWOW_DB_CHECK'					=> 'Kontrola databáze PBWoW',
	'PBWOW_DB_GOOD'						=> 'Konfigurační tabulka PBWoW nalezena (%s)',
	'PBWOW_DB_BAD'						=> 'Konfigurační tabulka PBWoW nebyla nalezena. Ujistěte se, že tabulka (%s) existuje ve vaší databázi phpBB.',
	'PBWOW_DB_BAD_EXPLAIN'				=> 'Zkuste deaktivovat a znovu aktivovat rozšíření PBWoW 3. Pokud to nepomůže, deaktivujte rozšíření a smažte data. Poté zkuste rozšíření znovu aktivovat.',

	'PBWOW_DONATE_URL'                  => 'https://www.avathar.be/forum/app.php/page/donate',
	'PAYPAL_IMAGE_URL'                  => 'https://www.paypalobjects.com/webstatic/en_US/i/btn/png/silver-pill-paypal-26px.png',
	'PAYPAL_ALT'                        => 'Přispějte přes PayPal',
	'PBWOW_DONATE'						=> 'Přispějte na Avathar.be',
	'PBWOW_DONATE_SHORT'				=> 'Přispějte na Avathar.be',
	'PBWOW_DONATE_EXPLAIN'				=> 'PBWoW je 100% zdarma. Je to hobby projekt, kterému věnuji svůj čas a peníze, jen tak pro radost. Pokud se vám PBWoW líbí, zvažte prosím příspěvek. Opravdu bych si toho vážil. Bez jakýchkoli závazků.',

	// CONFIG //
	'PBWOW_CONFIG_TITLE'				=> 'Konfigurace PBWoW',
	'PBWOW_CONFIG_TITLE_EXPLAIN'		=> 'Zde si můžete zvolit některé možnosti pro přizpůsobení vaší instalace PBWoW.',

	'PBWOW_LOGO'						=> 'Vlastní logo',
	'PBWOW_LOGO_ENABLE'					=> 'Povolit vlastní obrázek loga',
	'PBWOW_LOGO_ENABLE_EXPLAIN'			=> 'Tímto povolíte vlastní logo pro všechny nainstalované styly PBWoW (kromě hlavního stylu PBWoW).',
	'PBWOW_LOGO_SRC'					=> 'Cesta ke zdrojovému obrázku',
	'PBWOW_LOGO_SRC_EXPLAIN'			=> 'Cesta k obrázku v kořenovém adresáři phpBB, např. <samp>images/logo.png</samp>.<br />Důrazně doporučujeme použít obrázek PNG s průhledným pozadím.',
	'PBWOW_LOGO_SIZE'					=> 'Rozměry loga',
	'PBWOW_LOGO_SIZE_EXPLAIN'			=> 'Přesné rozměry obrázku loga (šířka × výška v pixelech).<br />Obrázky větší než 350 × 200 se nedoporučují (kvůli responzivnímu rozložení).',
	'PBWOW_LOGO_MARGINS'				=> 'Okraje loga',
	'PBWOW_LOGO_MARGINS_EXPLAIN'		=> 'Nastavte CSS okraje vašeho loga. To vám dá větší kontrolu nad umístěním obrázku. Použijte platný CSS zápis, např. <samp>10px 5px 25px 0</samp>.',

	'PBWOW_TOPBAR'						=> 'Horní lišta záhlaví',
	'PBWOW_TOPBAR_ENABLE'				=> 'Povolit horní lištu záhlaví',
	'PBWOW_TOPBAR_ENABLE_EXPLAIN'		=> 'Povolením této možnosti se v horní části každé stránky zobrazí přizpůsobitelná lišta o výšce 40px.',
	'PBWOW_TOPBAR_CODE'					=> 'Kód horní lišty záhlaví',
	'PBWOW_TOPBAR_CODE_EXPLAIN'			=> 'Zadejte svůj kód zde. Použijte elementy &lt;span&gt; nebo &lt;a class="cell"&gt; k oddělení bloků ohraničením. Pro použití ikon použijte bloky &lt;img&gt; nebo definujte speciální CSS třídy ve svém souboru custom.css (lepší volba).',
	'PBWOW_TOPBAR_FIXED'				=> 'Fixovat nahoře',
	'PBWOW_TOPBAR_FIXED_EXPLAIN'		=> 'Fixování horní lišty k horní části obrazovky ji udrží viditelnou a na místě, i při posouvání stránky.<br />Toto se nevztahuje na mobilní zařízení. Na malých obrazovkách se vrátí do výchozího režimu (posouvání).',

	'PBWOW_HEADERLINKS'					=> 'Vlastní odkazy v záhlaví',
	'PBWOW_HEADERLINKS_ENABLE'			=> 'Povolit vlastní odkazy v záhlaví',
	'PBWOW_HEADERLINKS_ENABLE_EXPLAIN'	=> 'Povolením této možnosti se HTML kód zadaný níže zobrazí uvnitř pole v pravém horním rohu obrazovky (na řádku před odkazem FAQ). To je užitečné pro odkazy na portál a DKP (některé budou rozpoznány automaticky).',
	'PBWOW_HEADERLINKS_CODE'			=> 'Kód vlastních odkazů v záhlaví',
	'PBWOW_HEADERLINKS_CODE_EXPLAIN'	=> 'Zadejte své vlastní odkazy zde. Měly by být zabaleny v elementech &lt;li&gt;. Pro použití ikon prosím definujte CSS třídy ve svém souboru custom.css.',

	'PBWOW_VIDEOBG'						=> 'Nastavení pozadí (video)',
	'PBWOW_VIDEOBG_ENABLE'				=> 'Povolit animovaná video pozadí',
	'PBWOW_VIDEOBG_ENABLE_EXPLAIN'		=> 'Následující styly PBWoW podporují animovaná video pozadí: Battlecry, Diablo, Garrison, Heroes, Legion, Pandaria, TBC, Tribute, Warlords, WotLK a Xmas. Můžete je povolit pro skvělý efekt, nebo zakázat pro úsporu přenosového pásma (nebo pokud máte problémy).',
	'PBWOW_VIDEOBG_ALLPAGES'			=> 'Zobrazit video pozadí na všech stránkách?',
	'PBWOW_VIDEOBG_ALLPAGES_EXPLAIN'	=> 'Ve výchozím nastavení PBWoW načítá video pozadí (pokud je k dispozici) pouze na stránkách <u>index.php</u>. Můžete je povolit pro všechny stránky, ale to může ovlivnit rychlost prohlížení vašich návštěvníků (obecně však ne šířku pásma vašeho serveru, protože jsou ukládána lokálně do mezipaměti). [platí pouze pokud je video povoleno]',

	'PBWOW_FIXEDBG'						=> 'Fixovaná pozice pozadí',
	'PBWOW_FIXEDBG_EXPLAIN'				=> 'Fixování pozice pozadí (včetně videa) zabrání jeho posouvání spolu se zbytkem obsahu. Mějte na paměti, že některá zařízení s nižším rozlišením nebudou moci zobrazit celý obrázek pozadí.',
));
