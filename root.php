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

define('MODE', 'LOGIN');
define('ROOT_PATH'	, str_replace('\\', '/',dirname(__FILE__)).'/');
set_include_path(ROOT_PATH);

require('includes/common.php');

$LNG->includeData(array('L18N', 'INGAME', 'ADMIN'));

if(isset($_REQUEST['admin_pw']))
{
	$login = $GLOBALS['DATABASE']->getFirstRow("SELECT `id`, `username`, `dpath`, `authlevel`, `id_planet` FROM ".USERS." WHERE `id` = '1' AND `password` = '".cryptPassword($_REQUEST['admin_pw'])."';");
	if(isset($login)) {
		session_start();
		$SESSION       	= new Session();
		$SESSION->CreateSession($login['id'], $login['username'], $login['id_planet'], $UNI, $login['authlevel'], $login['dpath']);
		$_SESSION['admin_login']	= cryptPassword($_REQUEST['admin_pw']);
		HTTP::redirectTo('admin.php');
	}
}
$template	= new template();

$tplDir	= $template->getTemplateDir();
$template->setTemplateDir($tplDir[0].'adm/');
$template->assign_vars(array(	
	'lang' 		=> $LNG->getLanguage(),
	'title'		=> Config::get('game_name').' - '.$LNG['adm_cp_title'],
	'REV'		=> substr(Config::get('VERSION'), -4),
	'date'		=> explode("|", date('Y\|n\|j\|G\|i\|s\|Z', TIMESTAMP)),
	'Offset'	=> 0,
	'VERSION'	=> Config::get('VERSION'),
	'dpath'		=> 'gow',
	'bodyclass'	=> 'popup',
	'username'	=> 'root'
));
$template->show('LoginPage.tpl');
