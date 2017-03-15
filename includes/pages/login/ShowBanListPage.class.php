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

class ShowBanListPage extends AbstractPage 
{
	public static $requireModule = MODULE_BANLIST;

	function __construct() 
	{
		parent::__construct();
	}

	function show()
	{		
		$universeSelect	= array();
		
		$page  		= HTTP::_GP('side', 1);
		$banCount	= $GLOBALS['DATABASE']->getFirstCell("SELECT COUNT(*) FROM ".BANNED." WHERE universe = ".$GLOBALS['UNI']." ORDER BY time DESC;");
		
		$maxPage	= ceil($banCount / BANNED_USERS_PER_PAGE);
		$page		= max(1, min($page, $maxPage));
		
		$banResult	= $GLOBALS['DATABASE']->query("SELECT * FROM ".BANNED." WHERE universe = ".$GLOBALS['UNI']." ORDER BY time DESC LIMIT ".(($page - 1) * BANNED_USERS_PER_PAGE).", ".BANNED_USERS_PER_PAGE.";");
		$banList	= array();
		
		while($banRow = $GLOBALS['DATABASE']->fetchArray($banResult))
		{
			$banList[]	= array(
				'player'	=> $banRow['who'],
				'theme'		=> $banRow['theme'],
				'from'		=> _date(t('php_tdformat'), $banRow['time'], Config::get('timezone')),
				'to'		=> _date(t('php_tdformat'), $banRow['longer'], Config::get('timezone')),
				'admin'		=> $banRow['author'],
				'mail'		=> $banRow['email'],
				'info'		=> t('bn_writemail', $banRow['author']),
			);
		}
		
		$uniAllConfig	= Config::getAll('universe');
		foreach($uniAllConfig as $uniID => $uniConfig)
		{
			$universeSelect[$uniID]	= $uniConfig['uni_name'];
		}
		
		$this->assign(array(
			'universeSelect'	=> $universeSelect,
			'banList'			=> $banList,
			'banCount'			=> $banCount,
			'page'				=> $page,
			'maxPage'			=> $maxPage,
		));
		
		$this->render('page.banList.default.tpl');
	}
}