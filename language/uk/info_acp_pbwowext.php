<?php
/**
 *
 * @package PBWoW Extension
 * Ukrainian translation
 *
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
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

$lang = array_merge($lang, array(
	// Extension modules
	'ACP_PBWOWEXT_CATEGORY'		=> 'PBWoW 3',
	'ACP_PBWOWEXT_CONFIG'			=> 'Налаштування',

	// Extension requirements
	'PBWOW_PHP_VERSION_FAIL'		=> 'Це розширення вимагає PHP %1$s або вище. У вас встановлено PHP %2$s.',
	'PBWOW_PHPBB_VERSION_FAIL'	=> 'Це розширення вимагає phpBB %1$s або вище. У вас встановлено phpBB %2$s.',

	'LOG_PBWOW_CONFIG'			=> '<strong>Змінено налаштування PBWoW</strong><br />&raquo; %s',

	'PBWOW_DB_CHECK'					=> 'Перевірка бази даних PBWoW',
	'PBWOW_DB_GOOD'						=> 'Таблицю конфігурації PBWoW знайдено (%s)',
	'PBWOW_DB_BAD'						=> 'Таблицю конфігурації PBWoW не знайдено. Переконайтеся, що таблиця (%s) існує у вашій базі даних phpBB.',
	'PBWOW_DB_BAD_EXPLAIN'				=> 'Спробуйте вимкнути та знову увімкнути розширення PBWoW 3. Якщо це не допоможе, вимкніть розширення та видаліть дані. Потім спробуйте увімкнути його знову.',

	'PBWOW_DONATE_URL'                  => 'https://www.avathar.be/forum/app.php/page/donate',
	'PAYPAL_IMAGE_URL'                  => 'https://www.paypalobjects.com/webstatic/en_US/i/btn/png/silver-pill-paypal-26px.png',
	'PAYPAL_ALT'                        => 'Пожертвувати через PayPal',
	'PBWOW_DONATE'						=> 'Пожертвувати на Avathar.be',
	'PBWOW_DONATE_SHORT'				=> 'Зробити пожертву на Avathar.be',
	'PBWOW_DONATE_EXPLAIN'				=> 'PBWoW є 100% безкоштовним. Це хобі-проєкт, на який я витрачаю свій час та гроші, просто заради задоволення. Якщо вам подобається PBWoW, будь ласка, розгляньте можливість зробити пожертву. Я буду дуже вдячний. Без жодних зобов&#39;язань.',

	// CONFIG //
	'PBWOW_CONFIG_TITLE'				=> 'Налаштування PBWoW',
	'PBWOW_CONFIG_TITLE_EXPLAIN'		=> 'Тут ви можете обрати деякі параметри для налаштування вашої інсталяції PBWoW.',

	'PBWOW_LOGO'						=> 'Власний логотип',
	'PBWOW_LOGO_ENABLE'					=> 'Увімкнути власне зображення логотипу',
	'PBWOW_LOGO_ENABLE_EXPLAIN'			=> 'Це увімкне ваш власний логотип для всіх встановлених стилів PBWoW (крім головного стилю PBWoW).',
	'PBWOW_LOGO_SRC'					=> 'Шлях до зображення',
	'PBWOW_LOGO_SRC_EXPLAIN'			=> 'Шлях до зображення в кореневій директорії phpBB, наприклад <samp>images/logo.png</samp>.<br />Наполегливо рекомендуємо використовувати зображення PNG з прозорим фоном.',
	'PBWOW_LOGO_SIZE'					=> 'Розміри логотипу',
	'PBWOW_LOGO_SIZE_EXPLAIN'			=> 'Точні розміри зображення логотипу (ширина x висота в пікселях).<br />Зображення більші за 350 x 200 не рекомендуються (через адаптивну верстку).',
	'PBWOW_LOGO_MARGINS'				=> 'Відступи логотипу',
	'PBWOW_LOGO_MARGINS_EXPLAIN'		=> 'Встановіть CSS-відступи вашого логотипу. Це дасть більше контролю над позиціонуванням зображення. Використовуйте дійсний CSS-запис, наприклад <samp>10px 5px 25px 0</samp>.',

	'PBWOW_TOPBAR'						=> 'Верхня панель заголовку',
	'PBWOW_TOPBAR_ENABLE'				=> 'Увімкнути верхню панель заголовку',
	'PBWOW_TOPBAR_ENABLE_EXPLAIN'		=> 'Увімкнення цієї опції відобразить настроювану панель висотою 40px у верхній частині кожної сторінки.',
	'PBWOW_TOPBAR_CODE'					=> 'Код верхньої панелі заголовку',
	'PBWOW_TOPBAR_CODE_EXPLAIN'			=> 'Введіть ваш код тут. Використовуйте елементи &lt;span&gt; або &lt;a class="cell"&gt; для розділення блоків рамками. Для використання іконок використовуйте блоки &lt;img&gt; або визначте спеціальні CSS-класи у вашому файлі custom.css (краще).',
	'PBWOW_TOPBAR_FIXED'				=> 'Зафіксувати вгорі',
	'PBWOW_TOPBAR_FIXED_EXPLAIN'		=> 'Фіксація верхньої панелі у верхній частині екрану залишить її видимою та закріпленою на місці, навіть при прокручуванні сторінки.<br />Це не стосується мобільних пристроїв. На малих екранах вона повернеться до стандартного режиму (прокручування).',

	'PBWOW_HEADERLINKS'					=> 'Власні посилання у блоці заголовку',
	'PBWOW_HEADERLINKS_ENABLE'			=> 'Увімкнути власні посилання у блоці заголовку',
	'PBWOW_HEADERLINKS_ENABLE_EXPLAIN'	=> 'Увімкнення цієї опції відобразить HTML-код, введений нижче, всередині блоку у верхньому правому куті екрану (в рядку перед посиланням FAQ). Це корисно для посилань на портал та DKP (деякі з них будуть виявлені автоматично).',
	'PBWOW_HEADERLINKS_CODE'			=> 'Код власних посилань у заголовку',
	'PBWOW_HEADERLINKS_CODE_EXPLAIN'	=> 'Введіть ваші власні посилання тут. Вони повинні бути обгорнуті в елементи &lt;li&gt;. Для використання іконок, будь ласка, визначте CSS-класи у вашому файлі custom.css.',

	'PBWOW_VIDEOBG'						=> 'Налаштування фону (відео)',
	'PBWOW_VIDEOBG_ENABLE'				=> 'Увімкнути анімовані відеофони',
	'PBWOW_VIDEOBG_ENABLE_EXPLAIN'		=> 'Наступні стилі PBWoW підтримують анімовані відеофони: Battlecry, Diablo, Garrison, Heroes, Legion, Pandaria, TBC, Tribute, Warlords, WotLK та Xmas. Ви можете увімкнути їх для чудового ефекту, або вимкнути для економії пропускної здатності (або якщо у вас виникають проблеми).',
	'PBWOW_VIDEOBG_ALLPAGES'			=> 'Відображати відеофони на всіх сторінках?',
	'PBWOW_VIDEOBG_ALLPAGES_EXPLAIN'	=> 'За замовчуванням PBWoW завантажує відеофони (якщо доступні) тільки на сторінках <u>index.php</u>. Ви можете увімкнути їх для всіх сторінок, але це може вплинути на швидкість перегляду ваших відвідувачів (але загалом не на пропускну здатність вашого сервера, оскільки вони кешуються локально). [застосовується лише якщо відео увімкнено]',

	'PBWOW_FIXEDBG'						=> 'Фіксована позиція фону',
	'PBWOW_FIXEDBG_EXPLAIN'				=> 'Фіксація позиції фону (включаючи відео) запобігатиме його прокручуванню разом з іншим вмістом. Майте на увазі, що деякі пристрої з нижчою роздільною здатністю не зможуть відобразити повне фонове зображення.',
));
