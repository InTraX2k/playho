<?php

/**
 *  2Moons
 *  Copyright (C) 2012 Jan
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
 * @package 2Moons
 * @author Jan <info@2moons.cc>
 * @copyright 2006 Perberos <ugamela@perberos.com.ar> (UGamela)
 * @copyright 2008 Chlorel (XNova)
 * @copyright 2012 Jan <info@2moons.cc> (2Moons)
 * @license http://www.gnu.org/licenses/gpl.html GNU GPLv3 License
 * @version 2.0.$Revision: 2242 $ (2012-11-31)
 * @info $Id: ShowLoginPage.class.php 2532 2013-01-04 16:57:58Z slaver7 $
 * @link http://2moons.cc/
 */


class ShowLoginPage extends AbstractPage
{
	public static $requireModule = 0;

	function __construct() 
	{
		parent::__construct();
	}
	
	function getUserIP() {
    if( array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER) && !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
        if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',')>0) {
            $addr = explode(",",$_SERVER['HTTP_X_FORWARDED_FOR']);
            return trim($addr[0]);
        } else {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
    }
    else {
        return $_SERVER['REMOTE_ADDR'];
    }
}
	
	function show() 
	{
		if (empty($_POST)) {
			HTTP::redirectTo('index.php');
		}

		// Rate limiting: max 5 attempts per 15 minutes per IP
		$ip = $_SERVER['REMOTE_ADDR'] ?? '';
		$attemptKey = 'login_attempts_' . md5($ip);
		$lockKey    = 'login_locked_' . md5($ip);
		if (!isset($_SESSION[$lockKey])) $_SESSION[$lockKey] = 0;
		if (!isset($_SESSION[$attemptKey])) $_SESSION[$attemptKey] = ['count' => 0, 'since' => time()];
		if (time() - $_SESSION[$attemptKey]['since'] > 900) {
		    $_SESSION[$attemptKey] = ['count' => 0, 'since' => time()];
		}
		if ($_SESSION[$attemptKey]['count'] >= 5) {
		    HTTP::redirectTo('index.php?code=6');
		}
		
		$username = HTTP::_GP('email', '', UTF8_SUPPORT);
		$password = HTTP::_GP('password', '', true);
		
		$loginData = $GLOBALS['DATABASE']->getFirstRow("SELECT id, password, username FROM ".USERS." WHERE universe = ".$GLOBALS['UNI']." AND email = '".$GLOBALS['DATABASE']->escape($username)."';");
		if (isset($loginData))
		{
			$loginOk = false;
			if (password_verify($password, $loginData['password'])) {
			    $loginOk = true;
			} elseif (strlen($loginData['password']) === 32 && hash_equals(md5($password), $loginData['password'])) {
			    // Legacy MD5 — upgrade to bcrypt
			    $newHash = password_hash($password, PASSWORD_DEFAULT);
			    $GLOBALS['DATABASE']->query("UPDATE ".USERS." SET password = '".$GLOBALS['DATABASE']->sql_escape($newHash)."' WHERE id = ".$loginData['id'].";");
			    $loginOk = true;
			}
			if (!$loginOk) {
			    $_SESSION[$attemptKey]['count']++;
			    HTTP::redirectTo('index.php?code=1');
			}
			
			
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET peacefull_last_update = '".TIMESTAMP."' WHERE id = ".$loginData['id'].";");
			$GLOBALS['DATABASE']->query("DELETE from uni1_fleets_alarm WHERE fleet_target_owner = ".$loginData['id'].";");
			
			
		$buddyNotif = $GLOBALS['DATABASE']->query("SELECT sender, owner FROM uni1_buddy WHERE sender = ".$loginData['id']." or owner = ".$loginData['id'].";");
		while($UserData = $GLOBALS['DATABASE']->fetch_array($buddyNotif)){
		if($UserData['sender'] == $loginData['id'] ){
		$xxData = $UserData['owner'];
		$GLOBALS['DATABASE']->query("INSERT INTO uni1_buddy_notif VALUES ('".$xxData."', '0', ".$loginData['id'].",'1');");	
		}
		}
		
		$buddyNotif = $GLOBALS['DATABASE']->query("SELECT sender, owner FROM uni1_buddy WHERE sender = ".$loginData['id']." or owner = ".$loginData['id'].";");
		while($UserData = $GLOBALS['DATABASE']->fetch_array($buddyNotif)){
		if($UserData['owner'] == $loginData['id']){
		$xxData = $UserData['sender'];
		$GLOBALS['DATABASE']->query("INSERT INTO uni1_buddy_notif VALUES ('".$xxData."', '0', ".$loginData['id'].",'1');");	
		}
		}
		
		
		$ipCheck = $GLOBALS['DATABASE']->query("SELECT COUNT(checkID) as id FROM uni1_ipcheck WHERE id = ".$loginData['id']." AND ip = '".$this->getUserIP()."';");
		$ipCheck = $GLOBALS['DATABASE']->fetch_array($ipCheck); 
		if($ipCheck['id'] == 0){
		$GLOBALS['DATABASE']->query("INSERT INTO uni1_ipcheck VALUES ('".$GLOBALS['DATABASE']->GetInsertID()."','".$loginData['id']."','".$loginData['username']."','".$this->getUserIP()."', ".TIMESTAMP.", '1');");
		}
			
		$ipCheck = $GLOBALS['DATABASE']->query("SELECT COUNT(checkID) as id FROM uni1_ipcheck WHERE id != ".$loginData['id']." AND ip = '".$this->getUserIP()."';");
		$ipCheck = $GLOBALS['DATABASE']->fetch_array($ipCheck); 	
		if($ipCheck['id'] > 0 && $loginData['id'] != 1){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET multi_spotted = '1' WHERE id = ".$loginData['id'].";");
		}
			
			
			$local_search = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_timebonus_log` where `userID` = ".$loginData['id'].";");
			if(Config::get('timeRewardFrom') < TIMESTAMP && Config::get('timeRewardTo') > TIMESTAMP && $GLOBALS['DATABASE']->numRows($local_search)==0){
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET antimatter = antimatter + '".Config::get('timeReward')."' WHERE id = ".$loginData['id'].";");
			$GLOBALS['DATABASE']->query("INSERT INTO uni1_timebonus_log VALUES ('".$GLOBALS['DATABASE']->GetInsertID()."','".$loginData['id']."', ".TIMESTAMP.");");
			}
			
			
			
			session_regenerate_id(true);
			Session::create($loginData['id']);
			HTTP::redirectTo('game.php?page=overview');	
		}
		else
		{
			Session::redirectCode(1);	
		}
	}
}
