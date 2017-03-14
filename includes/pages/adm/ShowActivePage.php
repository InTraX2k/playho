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

if (!allowedTo(str_replace(array(dirname(__FILE__), '\\', '/', '.php'), '', __FILE__))) throw new Exception("Permission error!");

function ShowActivePage()
{
	global $LNG, $USER;
	$id = HTTP::_GP('id', 0);
	if($_GET['action'] == 'delete' && !empty($id))
		$GLOBALS['DATABASE']->query("DELETE FROM ".USERS_VALID." WHERE `validationID` = '".$id."' AND `universe` = '".$_SESSION['adminuni']."';");

	$query = $GLOBALS['DATABASE']->query("SELECT * FROM ".USERS_VALID." WHERE `universe` = '".$_SESSION['adminuni']."' ORDER BY validationID ASC");

	$Users	= array();
	while ($User = $GLOBALS['DATABASE']->fetch_array($query)) {
		$Users[]	= array(
			'id'			=> $User['validationID'],
			'name'			=> $User['userName'],
			'date'			=> _date($LNG['php_tdformat'], $User['date'], $USER['timezone']),
			'email'			=> $User['email'],
			'ip'			=> $User['ip'],
			'password'		=> $User['password'],
			'validationKey'	=> $User['validationKey'],
		);
	}

	$template	= new template();

	$template->assign_vars(array(	
		'Users'				=> $Users,
		'uni'				=> $_SESSION['adminuni'],
	));
	
	$template->show('ActivePage.tpl');
}