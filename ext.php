<?php
/**
 *
 * @package PBWoW Extension
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace paybas\pbwowext;

class ext extends \phpbb\extension\base
{
	const MIN_PHP_VERSION = '8.1.0';
	const MIN_PHPBB_VERSION = '3.3.0';

	public function is_enableable()
	{
		$errors = [];

		$user = $this->container->get('user');
		$user->add_lang_ext('paybas/pbwowext', 'info_acp_pbwowext');

		if (version_compare(PHP_VERSION, self::MIN_PHP_VERSION, '<'))
		{
			$errors[] = $user->lang('PBWOW_PHP_VERSION_FAIL', self::MIN_PHP_VERSION, PHP_VERSION);
		}

		if (phpbb_version_compare(PHPBB_VERSION, self::MIN_PHPBB_VERSION, '<'))
		{
			$errors[] = $user->lang('PBWOW_PHPBB_VERSION_FAIL', self::MIN_PHPBB_VERSION, PHPBB_VERSION);
		}

		return empty($errors) ? true : $errors;
	}
}
