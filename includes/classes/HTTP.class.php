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

class HTTP {
	
	static public function redirectTo($URL, $external = false)
	{
		if($external)
		{
			self::sendHeader('Location', $URL);
		}
		else
		{
			self::sendHeader('Location', HTTP_PATH.$URL);
		}
		exit;
	}
	
	static public function sendHeader($name, $value = NULL)
	{
		header($name.(!is_null($value) ? ': '.$value : ''));
	}
	
	static public function sendCookie($name, $value = "", $toTime = NULL)
	{
		setcookie($name, $value, $toTime);
	}
	
	static public function _GP($name, $default, $multibyte = false, $highnum = false)
	{
		if(!isset($_REQUEST[$name]))
		{
			return $default;
		}
		
		if(is_int($default))
		{
			return (int) $_REQUEST[$name];			
		}
		
		if(is_float($default))
		{
			return (float) $_REQUEST[$name];			
		}
		
		if(is_string($default))
		{
			$var = trim(htmlspecialchars(str_replace(array("\r\n", "\r", "\0"), array("\n", "\n", ''), $_REQUEST[$name]), ENT_QUOTES, 'UTF-8'));
			
			if (empty($var)) {
				return $default;				
			}
			
			if ($multibyte) {
				if (!preg_match('/^./u', $var)) {
					$var = '';
				}
			} else {
				$var = preg_replace('/[\x80-\xFF]/', '?', $var); // no multibyte, allow only ASCII (0-127)
			}
			
			return $var;
		}
		
		if(is_array($default))
		{
			return (array) $_REQUEST[$name];
		}
		
		return $default;
	}
}