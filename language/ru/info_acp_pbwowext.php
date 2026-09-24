<?php
/**
 *
 * PBWoW 3.2. An extension for the phpBB Forum Software package.
 * Russian translation
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
	'ACP_PBWOWEXT_CONFIG'			=> 'Конфигурация',

	// Extension requirements
	'EXTENSION_REQUIRES_330'		=> 'Для этого расширения требуется phpBB 3.3.0 или выше.',

	'LOG_PBWOW_CONFIG'			=> '<strong>Настройки PBWoW изменены</strong><br />&raquo; %s',

	'PBWOW_DB_CHECK'					=> 'Проверка базы данных PBWoW',
	'PBWOW_DB_GOOD'						=> 'Таблица конфигурации PBWoW найдена (%s)',
	'PBWOW_DB_BAD'						=> 'Таблица конфигурации PBWoW не найдена. Убедитесь, что таблица (%s) существует в базе данных вашего форума phpBB.',
	'PBWOW_DB_BAD_EXPLAIN'				=> 'Попробуйте отключить и снова включить расширение PBWoW 3. Если это не поможет, отключите расширение и удалите его данные. Затем попробуйте включить его снова.',

	'PBWOW_DONATE_URL'                  => 'https://www.avathar.be/forum/app.php/page/donate',
	'PAYPAL_IMAGE_URL'                  => 'https://www.paypalobjects.com/webstatic/en_US/i/btn/png/silver-pill-paypal-26px.png',
	'PAYPAL_ALT'                        => 'Пожертвовать через PayPal',
	'PBWOW_DONATE'						=> 'Пожертвовать на Avathar.be',
	'PBWOW_DONATE_SHORT'				=> 'Сделать пожертвование на Avathar.be',
	'PBWOW_DONATE_EXPLAIN'				=> 'PBWoW является полностью бесплатным. Это хобби-проект, на который я трачу своё время и деньги, просто ради удовольствия. Если вам нравится PBWoW, пожалуйста, рассмотрите возможность сделать пожертвование. Я буду очень признателен. Без каких-либо обязательств.',

	// CONFIG //

	'PBWOW_CONFIG_TITLE'				=> 'Конфигурация PBWoW',
	'PBWOW_CONFIG_TITLE_EXPLAIN'		=> 'На этой странице вы можете настроить параметры персонализации стиля PBWoW.',

	'PBWOW_LOGO'						=> 'Пользовательский логотип',
	'PBWOW_LOGO_ENABLE'					=> 'Включить свой пользовательский логотип',
	'PBWOW_LOGO_ENABLE_EXPLAIN'			=> 'Включение этой опции позволит использовать свой собственный логотип для всех установленных стилей PBWoW (кроме основного стиля PBWoW).',
	'PBWOW_LOGO_SRC'					=> 'Путь к файлу изображения',
	'PBWOW_LOGO_SRC_EXPLAIN'			=> 'Путь к изображению относительно корневой директории вашего форума phpBB, например <samp>images/logo.png</samp>.<br />Настоятельно рекомендуется использовать изображение в формате PNG с прозрачным фоном.',
	'PBWOW_LOGO_SIZE'					=> 'Размеры логотипа',
	'PBWOW_LOGO_SIZE_EXPLAIN'			=> 'Точные размеры изображения вашего логотипа (Ширина x Высота в пикселях).<br />Изображения размером более 350 x 200 не рекомендуются (из-за адаптивной верстки).',
	'PBWOW_LOGO_MARGINS'				=> 'Отступы логотипа',
	'PBWOW_LOGO_MARGINS_EXPLAIN'		=> 'Установите CSS-отступы для вашего логотипа. Это даст больше контроля над расположением изображения. Используйте корректный CSS-синтаксис, например <samp>10px 5px 25px 0</samp>.',

	'PBWOW_TOPBAR'						=> 'Верхняя панель заголовка',
	'PBWOW_TOPBAR_ENABLE'				=> 'Включить верхнюю панель заголовка',
	'PBWOW_TOPBAR_ENABLE_EXPLAIN'		=> 'При включении этой опции настраиваемая панель высотой 40px будет отображаться в верхней части каждой страницы.',
	'PBWOW_TOPBAR_CODE'					=> 'Код верхней панели заголовка',
	'PBWOW_TOPBAR_CODE_EXPLAIN'			=> 'Введите ваш код здесь. Используйте элементы &lt;span&gt; или &lt;a class="cell"&gt; для разделения блоков с рамками. Для использования значков применяйте блоки &lt;img&gt; или определите специальные CSS-классы в файле стилей custom.css (предпочтительнее).',
	'PBWOW_TOPBAR_FIXED'				=> 'Закрепить вверху',
	'PBWOW_TOPBAR_FIXED_EXPLAIN'		=> 'Закрепление верхней панели в верхней части экрана позволит ей оставаться видимой и зафиксированной на месте даже при прокрутке страницы.<br />Это не применяется к мобильным устройствам. На экранах малого размера панель вернётся в режим по умолчанию (прокрутка).',

	'PBWOW_HEADERLINKS'					=> 'Пользовательские ссылки в блоке заголовка',
	'PBWOW_HEADERLINKS_ENABLE'			=> 'Включить пользовательские ссылки в блоке заголовка',
	'PBWOW_HEADERLINKS_ENABLE_EXPLAIN'	=> 'При включении этой опции HTML-код, введённый ниже, будет отображаться внутри блока в правом верхнем углу экрана (в строке перед ссылкой FAQ). Это полезно для ссылок на портал и DKP (некоторые из них будут обнаружены автоматически).',
	'PBWOW_HEADERLINKS_CODE'			=> 'Код пользовательских ссылок заголовка',
	'PBWOW_HEADERLINKS_CODE_EXPLAIN'	=> 'Введите ваши пользовательские ссылки здесь. Они должны быть обёрнуты в элементы &lt;li&gt;. Для использования значков определите CSS-классы в файле стилей custom.css.',

	'PBWOW_VIDEOBG'						=> 'Настройки фона (Видео)',
	'PBWOW_VIDEOBG_ENABLE'				=> 'Включить анимированные видеофоны',
	'PBWOW_VIDEOBG_ENABLE_EXPLAIN'		=> 'Следующие стили PBWoW поддерживают анимированные видеофоны: Battlecry, Diablo, Garrison, Heroes, Legion, Pandaria, TBC, Tribute, Warlords, WotLK и Xmas. Вы можете включить их для эффектного оформления или отключить для экономии трафика (или при возникновении проблем).',
	'PBWOW_VIDEOBG_ALLPAGES'			=> 'Отображать видеофоны на всех страницах',
	'PBWOW_VIDEOBG_ALLPAGES_EXPLAIN'	=> 'По умолчанию PBWoW загружает видеофоны (если доступны) только на страницах <u>index.php</u>. Вы можете включить их для всех страниц, но это может повлиять на скорость просмотра для ваших посетителей (но, как правило, не на пропускную способность сервера, так как они кэшируются локально). [применяется только при включённом видео]',
	'PBWOW_FIXEDBG'						=> 'Фиксированное положение фона',
	'PBWOW_FIXEDBG_EXPLAIN'				=> 'Фиксация положения фона (включая видео) предотвращает его прокрутку вместе с остальным содержимым. Имейте в виду, что на устройствах с низким разрешением невозможно будет увидеть фоновое изображение целиком.',
));
