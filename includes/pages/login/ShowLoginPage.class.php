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


class ShowLoginPage extends AbstractPage
{
	public static $requireModule = 0;

	function __construct() 
	{
		parent::__construct();
	}
	
	function show() 
	{
		if (empty($_POST)) {
			HTTP::redirectTo('index.php');	
		}
		
		$username = HTTP::_GP('username', '', UTF8_SUPPORT);
		$password = HTTP::_GP('password', '', true);
		
		$loginData = $GLOBALS['DATABASE']->getFirstRow("SELECT id, password FROM ".USERS." WHERE universe = ".$GLOBALS['UNI']." AND username = '".$GLOBALS['DATABASE']->escape($username)."';");
		if (isset($loginData))
		{
			$hashedPassword = PlayerUtil::cryptPassword($password);
			if($loginData['password'] != $hashedPassword)
			{
				// Fallback pre 1.7
				if($loginData['password'] == md5($password)) {
					$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET password = '".$hashedPassword."' WHERE id = ".$loginData['id'].";");
				} else {
					HTTP::redirectTo('index.php?code=1');	
				}
			}
			
			Session::create($loginData['id']);
			HTTP::redirectTo('game.php');	
		}
		else
		{
			Session::redirectCode(1);	
		}
	}
}
