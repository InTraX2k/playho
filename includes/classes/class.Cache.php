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

include('includes/classes/cache/ressource/CacheFile.class.php');

class Cache {
	private $cacheRessource;
	private $cacheBuilder = array();
	private $cacheObj = array();
	
	function __construct() {
		$this->cacheRessource = new CacheFile();
	}
	
	function add($Key, $ClassName) {
		$this->cacheBuilder[$Key]	= $ClassName;
	}
	
	function get($Key, $rebuild = true) {
		if(!isset($this->cacheObj[$Key]) && !$this->load($Key))
		{
			if($rebuild)
			{
				$this->buildCache($Key);
			}
			else
			{
				return array();
			}
		}
		return $this->cacheObj[$Key];
	}
	
	function flush($Key) {
		if(!isset($this->cacheObj[$Key]) && !$this->load($Key))
			$this->buildCache($Key);
		
		$this->cacheRessource->flush($Key);
		return $this->buildCache($Key);
	}
	
	function load($Key) {
		$cacheData	= $this->cacheRessource->open($Key);
		
		if($cacheData === false)
			return false;
			
		$cacheData	= unserialize($cacheData);
		if($cacheData === false)
			return false;
		
		$this->cacheObj[$Key] = $cacheData;
		return true;
	}
	
	function buildCache($Key) {
		$className		= $this->cacheBuilder[$Key];
		include_once('includes/classes/cache/builder/'.$className.'.class.php');
		$cacheBuilder	= new $className();
		$cacheData		= $cacheBuilder->buildCache();
		$cacheData		= (array) $cacheData;
		$this->cacheObj[$Key] = $cacheData;
		$cacheData		= serialize($cacheData);
		$this->cacheRessource->store($Key, $cacheData);
		return true;
	}
}