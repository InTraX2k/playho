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

class ArrayUtil
{
	function combineArrayWithSingleElement($keys, $var) {
		if(empty($keys))
		{
			return array();
		}
		return array_combine($keys, array_fill(0, count($keys), $var));
	}
	
	function combineArrayWithKeyElements($keys, $var) {
		$temp	= array();
		foreach($keys as $key)
		{
			if(isset($var[$key]))
			{
				$temp[$key]	= $var[$key];
			}
			else
			{
				$temp[$key]	= $key;
			}
		}
		
		return $temp;
	}
	
	// http://www.php.net/manual/en/function.array-key-exists.php#81659
	function arrayKeyExistsRecrusive($needle, $haystack)
	{
		$result = array_key_exists($needle, $haystack);
		
		if ($result)
		{
			return $result;
		}
		
		foreach ($haystack as $v)
		{
			if (is_array($v))
			{
				$result = self::arrayKeyExistsRecrusive($needle, $v);
			}
			
			if ($result)
			{
				return $result;
			}
		}
		
		return $result;
	}
}