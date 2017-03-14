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

class InactiveMailCronjob
{
	function run()
	{
		global $LNG;
		$CONF	= Config::getAll(NULL, ROOT_UNI);
		
		if($CONF['mail_active'] == 1) {
			$langObjects	= array();
		
			require 'includes/classes/Mail.class.php';
			$Users	= $GLOBALS['DATABASE']->query("SELECT `id`, `username`, `lang`, `email`, `onlinetime`, `timezone`, `universe` FROM ".USERS." WHERE `inactive_mail` = '0' AND `onlinetime` < '".(TIMESTAMP - $CONF['del_user_sendmail'] * 24 * 60 * 60)."';");
			while($User	= $GLOBALS['DATABASE']->fetch_array($Users))
			{
				$CONF	= Config::getAll(NULL, $User['universe']);
				if(!isset($langObjects[$User['lang']]))
				{
					$langObjects[$User['lang']]	= new Language($User['lang']);
					$langObjects[$User['lang']]->includeData(array('L18N', 'INGAME', 'PUBLIC', 'CUSTOM'));
				}
				
				$LNG			= $langObjects[$User['lang']];
				
				$MailSubject	= sprintf($LNG['spec_mail_inactive_title'], $CONF['game_name'].' - '.$CONF['uni_name']);
				$MailRAW		= $LNG->getTemplate('email_inactive');
				
				$MailContent	= str_replace(array(
					'{USERNAME}',
					'{GAMENAME}',
					'{LASTDATE}',
					'{HTTPPATH}',
				), array(
					$User['username'],
					$CONF['game_name'].' - '.$CONF['uni_name'],
					_date($LNG['php_tdformat'], $User['onlinetime'], $User['timezone']),
					HTTP_PATH,
				), $MailRAW);
						
				Mail::send($User['email'], $User['username'], $MailSubject, $MailContent);
				$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `inactive_mail` = '1' WHERE `id` = '".$User['id']."';");
			}
		}
	}
}