<?php

/**
 *  playHookah
 *  Copyright (C) 2017 Daniel Welsch
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package playHookah
 * @author Daniel Welsch <info@playHookah.de>
 * @copyright 2017 Daniel Welsch <info@playHookah.de>
 * @license http://www.gnu.org/licenses/gpl.html GNU GPLv3 License
 * @version 0.1 (2017-03-14)
 * @link <playHookah.de>
 */

class ShowBattleHallPage extends AbstractPage
{
	public static $requireModule = MODULE_BATTLEHALL;
	
	function __construct() {
		parent::__construct();
	}
	
	function show()
	{
		global $USER, $PLANET, $LNG, $UNI;
		$mode = HTTP::_GP('mode','');
		$order = HTTP::_GP('order', 'units');
		$sort = HTTP::_GP('sort', 'desc');
		$sort = strtoupper($sort);
		
		$GLOBALS['DATABASE']->query("SET @rank:=0;");
		$top = $GLOBALS['DATABASE']->query("SELECT *, (
			SELECT DISTINCT
			IF(".TOPKB_USERS.".username = '', GROUP_CONCAT(".USERS.".username SEPARATOR ' & '), GROUP_CONCAT(".TOPKB_USERS.".username SEPARATOR ' & '))
			FROM ".TOPKB_USERS."
			LEFT JOIN ".USERS." ON uid = ".USERS.".id
			WHERE ".TOPKB_USERS.".`rid` = ".TOPKB.".`rid` AND `role` = 1
		) as `attacker`,
		(
			SELECT DISTINCT
			IF(".TOPKB_USERS.".username = '', GROUP_CONCAT(".USERS.".username SEPARATOR ' & '), GROUP_CONCAT(".TOPKB_USERS.".username SEPARATOR ' & '))
			FROM ".TOPKB_USERS." INNER JOIN ".USERS." ON uid = id
			WHERE ".TOPKB_USERS.".`rid` = ".TOPKB.".`rid` AND `role` = 2
		) as `defender`  
		,@rank:=@rank+1 as rank
		FROM ".TOPKB." WHERE `universe` = '".$UNI."' ORDER BY units DESC LIMIT 100;");
		
		$TopKBList	= array();
		$i = 1;
		while($data = $GLOBALS['DATABASE']->fetch_array($top))
		{
			switch($order)
			{
				case 'date':
					$key = $data['time'];
				break;
				case 'owner':
					$key = $data['attacker'].$data['defender'];
				break;
				case 'units':
				default:
					$key = $data['units'];
				break;
			}
			
			$TopKBList[$key][$data['rank']]	= array(
				'result'	=> $data['result'],
				'date'		=> _date($LNG['php_tdformat'], $data['time'], $USER['timezone']),
				'time'		=> TIMESTAMP - $data['time'],
				'units'		=> $data['units'],
				'rid'		=> $data['rid'],
				'attacker'	=> $data['attacker'],
				'defender'	=> $data['defender'],
			);
		}
		
		$GLOBALS['DATABASE']->free_result($top);
		
		ksort($TopKBList);

		if($sort === "DESC")
		{
			$TopKBList	= array_reverse($TopKBList);
		}
		else
		{	
			$sort = "ASC";
		}

		$this->tplObj->assign_vars(array(
			'TopKBList'		=> $TopKBList,
			'sort'			=> $sort,
			'order'			=> $order,
		));
		
		$this->display('page.battlehall.default.tpl');
	}
}