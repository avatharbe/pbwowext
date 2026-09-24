<?php
/**
 *
 * @package PBWoW Extension
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace paybas\pbwowext\acp;

/**
 * Class pbwow_module
 *
 * @package paybas\pbwowext\acp
 */
class pbwow_module
{
	public $u_action;

	protected $pbwow_config_table;
	protected $pbwow_config;

	/**
	 * @param $id
	 * @param $mode
	 */
	public function main($id, $mode)
	{
		global $cache, $request, $template, $user;
		global $phpbb_log, $table_prefix, $phpbb_container;

		$this->tpl_name = 'acp_pbwow3';

		$db_tools = $phpbb_container->get('dbal.tools');

		$this->pbwow_config_table = $phpbb_container->getParameter('tables.pbwowext_config');

		$dbokay = $new_config = false;

		// if yes, check if the config table exists
		// if yes, load the config variables
		if ($this->pbwow_config_table == ($table_prefix . 'pbwowext_config'))
		{
			if ($db_tools->sql_table_exists($this->pbwow_config_table))
			{
				$dbokay = true;
				$this->get_pbwow_config();
				$new_config = $this->pbwow_config;
			}
		}

		/**
		 *    Config vars
		 */
		switch ($mode)
		{
			case 'config':
				$display_vars = array(
					'title' => 'PBWOW_CONFIG_TITLE',
					'vars'  => array(
						'legend1'             => 'PBWOW_LOGO',
						'logo_size_width'     => array('lang' => 'PBWOW_LOGO_SIZE', 'validate' => 'int:0', 'type' => false, 'method' => false, 'explain' => false),
						'logo_size_height'    => array('lang' => 'PBWOW_LOGO_SIZE', 'validate' => 'int:0', 'type' => false, 'method' => false, 'explain' => false),
						'logo_enable'         => array('lang' => 'PBWOW_LOGO_ENABLE', 'validate' => 'bool', 'type' => 'radio:enabled_disabled', 'explain' => true),
						'logo_src'            => array('lang' => 'PBWOW_LOGO_SRC', 'validate' => 'string', 'type' => 'text:20:255', 'explain' => true),
						'logo_size'           => array('lang' => 'PBWOW_LOGO_SIZE', 'validate' => 'int:0', 'type' => 'dimension:0', 'explain' => true, 'append' => ' ' . $user->lang['PIXEL']),
						'logo_margins'        => array('lang' => 'PBWOW_LOGO_MARGINS', 'validate' => 'string', 'type' => 'text:20:20', 'explain' => true),

						'legend2'             => 'PBWOW_TOPBAR',
						'topbar_enable'       => array('lang' => 'PBWOW_TOPBAR_ENABLE', 'validate' => 'bool', 'type' => 'radio:enabled_disabled', 'explain' => true),
						'topbar_code'         => array('lang' => 'PBWOW_TOPBAR_CODE', 'type' => 'textarea:6:6', 'explain' => true),
						'topbar_fixed'        => array('lang' => 'PBWOW_TOPBAR_FIXED', 'validate' => 'bool', 'type' => 'radio:yes_no', 'explain' => true),

						'legend3'             => 'PBWOW_HEADERLINKS',
						'headerlinks_enable'  => array('lang' => 'PBWOW_HEADERLINKS_ENABLE', 'validate' => 'bool', 'type' => 'radio:enabled_disabled', 'explain' => true),
						'headerlinks_code'    => array('lang' => 'PBWOW_HEADERLINKS_CODE', 'type' => 'textarea:6:6', 'explain' => true),

						'legend4'             => 'PBWOW_VIDEOBG',
						'videobg_enable'      => array('lang' => 'PBWOW_VIDEOBG_ENABLE', 'validate' => 'bool', 'type' => 'radio:enabled_disabled', 'explain' => true),
						'videobg_allpages'    => array('lang' => 'PBWOW_VIDEOBG_ALLPAGES', 'validate' => 'bool', 'type' => 'radio:yes_no', 'explain' => true),

						'legend5'             => 'PBWOW_FIXEDBG',
						'fixedbg'             => array('lang' => 'PBWOW_FIXEDBG', 'validate' => 'bool', 'type' => 'radio:yes_no', 'explain' => true),
					)
				);
				break;
			default:
				$display_vars = array(
					'title' => 'ACP_PBWOW3_CATEGORY',
					'vars'  => array()
				);
				break;
		}

		$submit = $request->is_set_post('submit');

		$cfg_array = (isset($_REQUEST['config'])) ? utf8_normalize_nfc($request->variable('config', array('' => ''), true)) : $new_config;
		$error = array();

		// We validate the complete config if we want
		validate_config_vars($display_vars['vars'], $cfg_array, $error);

		// Do not write values if there is an error
		if (count($error))
		{
			$submit = false;
		}

		// We go through the display_vars to make sure no one is trying to set variables he/she is not allowed to... and then write to config
		foreach ($display_vars['vars'] as $config_name => $null)
		{
			if (!isset($cfg_array[$config_name]) || strpos($config_name, 'legend') !== false)
			{
				continue;
			}

			$new_config[$config_name] = $config_value = $cfg_array[$config_name];

			if ($submit)
			{
				$this->set_pbwow_config($config_name, $config_value);
			}
		}

		if ($submit)
		{
			$phpbb_log->add('admin', $user->data['user_id'], $user->ip, 'LOG_PBWOW_CONFIG');
			$cache->purge();
			trigger_error($user->lang['CONFIG_UPDATED'] . adm_back_link($this->u_action));
		}

		$this->page_title = $display_vars['title'];
		$title_explain = $user->lang[$display_vars['title'] . '_EXPLAIN'];

		$template->assign_vars(array(
				'L_TITLE'              => $user->lang[$display_vars['title']],
				'L_TITLE_EXPLAIN'      => $title_explain,

				'S_ERROR'              => (count($error)) ? true : false,
				'ERROR_MSG'            => implode('<br />', $error),

				'PBWOW_DBTABLE'        => $this->pbwow_config_table,
				'S_DBOKAY'             => ($dbokay) ? true : false,
				'L_PBWOW_DB_GOOD'      => sprintf($user->lang['PBWOW_DB_GOOD'], $this->pbwow_config_table),
				'L_PBWOW_DB_BAD'       => sprintf($user->lang['PBWOW_DB_BAD'], $this->pbwow_config_table),

				'U_ACTION'             => $this->u_action,
			)
		);

		// Output relevant page
		foreach ($display_vars['vars'] as $config_key => $vars)
		{
			if (!is_array($vars) && strpos($config_key, 'legend') === false)
			{
				continue;
			}

			if (strpos($config_key, 'legend') !== false)
			{
				$template->assign_block_vars('options', array(
						'S_LEGEND' => true,
						'LEGEND'   => (isset($user->lang[$vars])) ? $user->lang[$vars] : $vars)
				);

				continue;
			}

			$type = explode(':', $vars['type']);

			$l_explain = '';
			if ($vars['explain'] && isset($vars['lang_explain']))
			{
				$l_explain = (isset($user->lang[$vars['lang_explain']])) ? $user->lang[$vars['lang_explain']] : $vars['lang_explain'];
			}
			else if ($vars['explain'])
			{
				$l_explain = (isset($user->lang[$vars['lang'] . '_EXPLAIN'])) ? $user->lang[$vars['lang'] . '_EXPLAIN'] : '';
			}

			$content = build_cfg_template($type, $config_key, $new_config, $config_key, $vars);

			if (empty($content))
			{
				continue;
			}

			$template->assign_block_vars('options', array(
					'KEY'           => $config_key,
					'TITLE'         => (isset($user->lang[$vars['lang']])) ? $user->lang[$vars['lang']] : $vars['lang'],
					'S_EXPLAIN'     => $vars['explain'],
					'TITLE_EXPLAIN' => $l_explain,
					'CONTENT'       => $content,
				)
			);

			unset($display_vars['vars'][$config_key]);
		}
	}

	##################################################
	####                                          ####
	####             Config Functions             ####
	####                                          ####
	##################################################

	/**
	 * Get PBWoW config.
	 */
	public function get_pbwow_config()
	{
		global $cache, $db;

		if (($this->pbwow_config = $cache->get('pbwowext_config')) !== true)
		{
			$this->pbwow_config = array();

			$sql = 'SELECT * FROM ' . $this->pbwow_config_table;
			$result = $db->sql_query($sql);

			while ($row = $db->sql_fetchrow($result))
			{
				$this->pbwow_config[$row['config_name']] = $row['config_value'];
			}
			$db->sql_freeresult($result);

			$cache->put('pbwowext_config', $this->pbwow_config);
		}
	}

	/**
	 * Set config value (and cache it). Creates missing config entry.
	 */
	public function set_pbwow_config($config_name, $config_value)
	{
		global $db;

		$sql = 'UPDATE ' . $this->pbwow_config_table . "
			SET config_value = '" . $db->sql_escape($config_value) . "'
			WHERE config_name = '" . $db->sql_escape($config_name) . "'";
		$db->sql_query($sql);

		if (!$db->sql_affectedrows() && !isset($this->pbwow_config[$config_name]))
		{
			$sql = 'INSERT INTO ' . $this->pbwow_config_table . ' ' .
				$db->sql_build_array('INSERT', array(
						'config_name'    => $config_name,
						'config_value'   => $config_value,
						'config_default' => '')
				);
			$db->sql_query($sql);
		}
		$this->pbwow_config[$config_name] = $config_value;
	}

}
