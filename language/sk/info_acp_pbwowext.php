<?php
/**
 *
 * PBWoW 3.2. An extension for the phpBB Forum Software package.
 * Slovak translation
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
	'ACP_PBWOWEXT_CONFIG'			=> 'Konfigurácia',

	// Extension requirements
	'EXTENSION_REQUIRES_330'		=> 'Toto rozšírenie vyžaduje phpBB 3.3.0 alebo novší.',

	'LOG_PBWOW_CONFIG'			=> '<strong>Zmenené nastavenia PBWoW</strong><br />&raquo; %s',

	'PBWOW_DB_CHECK'					=> 'Kontrola databázy PBWoW',
	'PBWOW_DB_GOOD'						=> 'Konfiguračná tabuľka PBWoW nájdená (%s)',
	'PBWOW_DB_BAD'						=> 'Konfiguračná tabuľka PBWoW nebola nájdená. Uistite sa, že tabuľka (%s) existuje vo vašej databáze phpBB.',
	'PBWOW_DB_BAD_EXPLAIN'				=> 'Skúste deaktivovať a znovu aktivovať rozšírenie PBWoW 3. Ak to nepomôže, deaktivujte rozšírenie a vymažte údaje. Potom skúste rozšírenie znovu aktivovať.',

	'PBWOW_DONATE_URL'                  => 'https://www.avathar.be/forum/app.php/page/donate',
	'PAYPAL_IMAGE_URL'                  => 'https://www.paypalobjects.com/webstatic/en_US/i/btn/png/silver-pill-paypal-26px.png',
	'PAYPAL_ALT'                        => 'Prispejte cez PayPal',
	'PBWOW_DONATE'						=> 'Prispejte na Avathar.be',
	'PBWOW_DONATE_SHORT'				=> 'Prispejte na Avathar.be',
	'PBWOW_DONATE_EXPLAIN'				=> 'PBWoW je 100% zadarmo. Je to hobby projekt, ktorému venujem svoj čas a peniaze, len tak pre radosť. Ak sa vám PBWoW páči, zvážte prosím príspevok. Naozaj by som si to vážil. Bez akýchkoľvek záväzkov.',

	// CONFIG //
	'PBWOW_CONFIG_TITLE'				=> 'Konfigurácia PBWoW',
	'PBWOW_CONFIG_TITLE_EXPLAIN'		=> 'Tu si môžete zvoliť niektoré možnosti na prispôsobenie vašej inštalácie PBWoW.',

	'PBWOW_LOGO'						=> 'Vlastné logo',
	'PBWOW_LOGO_ENABLE'					=> 'Povoliť vlastný obrázok loga',
	'PBWOW_LOGO_ENABLE_EXPLAIN'			=> 'Týmto povolíte vlastné logo pre všetky nainštalované štýly PBWoW (okrem hlavného štýlu PBWoW).',
	'PBWOW_LOGO_SRC'					=> 'Cesta k zdrojovému obrázku',
	'PBWOW_LOGO_SRC_EXPLAIN'			=> 'Cesta k obrázku v koreňovom adresári phpBB, napr. <samp>images/logo.png</samp>.<br />Dôrazne odporúčame použiť obrázok PNG s priehľadným pozadím.',
	'PBWOW_LOGO_SIZE'					=> 'Rozmery loga',
	'PBWOW_LOGO_SIZE_EXPLAIN'			=> 'Presné rozmery obrázku loga (šírka × výška v pixeloch).<br />Obrázky väčšie ako 350 × 200 sa neodporúčajú (kvôli responzívnemu rozloženiu).',
	'PBWOW_LOGO_MARGINS'				=> 'Okraje loga',
	'PBWOW_LOGO_MARGINS_EXPLAIN'		=> 'Nastavte CSS okraje vášho loga. To vám dá väčšiu kontrolu nad umiestnením obrázku. Použite platný CSS zápis, napr. <samp>10px 5px 25px 0</samp>.',

	'PBWOW_TOPBAR'						=> 'Horná lišta hlavičky',
	'PBWOW_TOPBAR_ENABLE'				=> 'Povoliť hornú lištu hlavičky',
	'PBWOW_TOPBAR_ENABLE_EXPLAIN'		=> 'Povolením tejto možnosti sa v hornej časti každej stránky zobrazí prispôsobiteľná lišta s výškou 40px.',
	'PBWOW_TOPBAR_CODE'					=> 'Kód hornej lišty hlavičky',
	'PBWOW_TOPBAR_CODE_EXPLAIN'			=> 'Zadajte svoj kód tu. Použite elementy &lt;span&gt; alebo &lt;a class="cell"&gt; na oddelenie blokov ohraničením. Na použitie ikon použite bloky &lt;img&gt; alebo definujte špeciálne CSS triedy vo svojom súbore custom.css (lepšia voľba).',
	'PBWOW_TOPBAR_FIXED'				=> 'Fixovať navrchu',
	'PBWOW_TOPBAR_FIXED_EXPLAIN'		=> 'Fixovanie hornej lišty k hornej časti obrazovky ju udrží viditeľnú a na mieste, aj pri posúvaní stránky.<br />Toto sa nevzťahuje na mobilné zariadenia. Na malých obrazovkách sa vráti do predvoleného režimu (posúvanie).',

	'PBWOW_HEADERLINKS'					=> 'Vlastné odkazy v hlavičke',
	'PBWOW_HEADERLINKS_ENABLE'			=> 'Povoliť vlastné odkazy v hlavičke',
	'PBWOW_HEADERLINKS_ENABLE_EXPLAIN'	=> 'Povolením tejto možnosti sa HTML kód zadaný nižšie zobrazí vnútri poľa v pravom hornom rohu obrazovky (na riadku pred odkazom FAQ). To je užitočné pre odkazy na portál a DKP (niektoré budú rozpoznané automaticky).',
	'PBWOW_HEADERLINKS_CODE'			=> 'Kód vlastných odkazov v hlavičke',
	'PBWOW_HEADERLINKS_CODE_EXPLAIN'	=> 'Zadajte svoje vlastné odkazy tu. Mali by byť zabalené v elementoch &lt;li&gt;. Na použitie ikon prosím definujte CSS triedy vo svojom súbore custom.css.',

	'PBWOW_VIDEOBG'						=> 'Nastavenia pozadia (video)',
	'PBWOW_VIDEOBG_ENABLE'				=> 'Povoliť animované video pozadia',
	'PBWOW_VIDEOBG_ENABLE_EXPLAIN'		=> 'Nasledujúce štýly PBWoW podporujú animované video pozadia: Battlecry, Diablo, Garrison, Heroes, Legion, Pandaria, TBC, Tribute, Warlords, WotLK a Xmas. Môžete ich povoliť pre skvelý efekt, alebo zakázať na úsporu prenosového pásma (alebo ak máte problémy).',
	'PBWOW_VIDEOBG_ALLPAGES'			=> 'Zobraziť video pozadia na všetkých stránkach?',
	'PBWOW_VIDEOBG_ALLPAGES_EXPLAIN'	=> 'Štandardne PBWoW načítava video pozadia (ak sú k dispozícii) iba na stránkach <u>index.php</u>. Môžete ich povoliť pre všetky stránky, ale to môže ovplyvniť rýchlosť prehliadania vašich návštevníkov (vo všeobecnosti však nie šírku pásma vášho servera, pretože sú ukladané lokálne do vyrovnávacej pamäte). [platí iba ak je video povolené]',

	'PBWOW_FIXEDBG'						=> 'Fixovaná pozícia pozadia',
	'PBWOW_FIXEDBG_EXPLAIN'				=> 'Fixovanie pozície pozadia (vrátane videa) zabráni jeho posúvaniu spolu so zvyškom obsahu. Majte na pamäti, že niektoré zariadenia s nižším rozlíšením nebudú môcť zobraziť celý obrázok pozadia.',
));
