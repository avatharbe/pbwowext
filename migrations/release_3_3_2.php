<?php
/**
 *
 * @package PBWoW Extension
 * @copyright (c) 2015 PayBas
 * @copyright (c) 2026 Sajaki
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace paybas\pbwowext\migrations;

class release_3_3_2 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['pbwowext_version']) && version_compare($this->config['pbwowext_version'], '3.3.2', '>=');
	}

	static public function depends_on()
	{
		return array('\paybas\pbwowext\migrations\release_3_3_1');
	}

	public function update_data()
	{
		return array(
			array('custom', array(array($this, 'remove_ads_index_config'))),
			array('config.update', array('pbwowext_version', '3.3.2')),
		);
	}

	/**
	 * Drop the Index Advertisement Block settings.
	 *
	 * The feature is provided by avathar/recenttopics, which stores its own
	 * rt_ads_enable / rt_ads_code settings. These rows live in the extension's
	 * own table rather than phpBB's config table, so they cannot be removed
	 * with the config.remove migration tool.
	 */
	public function remove_ads_index_config()
	{
		$table = $this->table_prefix . 'pbwowext_config';

		if (!$this->db_tools->sql_table_exists($table))
		{
			return;
		}

		$sql = 'DELETE FROM ' . $table . '
			WHERE ' . $this->db->sql_in_set('config_name', array('ads_index_enable', 'ads_index_code'));
		$this->db->sql_query($sql);
	}
}
