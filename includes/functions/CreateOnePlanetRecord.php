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

function CreateOnePlanetRecord($Galaxy, $System, $Position, $Universe, $PlanetOwnerID, $PlanetName = '', $HomeWorld = false, $AuthLevel = 0)
{
	global $LNG;

	$CONF	= Config::getAll(NULL, $Universe);
	if (Config::get('max_galaxy') < $Galaxy || 1 > $Galaxy) {
		throw new Exception("Access denied for CreateOnePlanetRecord.php.<br>Try to create a planet at position:".$Galaxy.":".$System.":".$Position);
	}	
	
	if (Config::get('max_system') < $System || 1 > $System) {
		throw new Exception("Access denied for CreateOnePlanetRecord.php.<br>Try to create a planet at position:".$Galaxy.":".$System.":".$Position);
	}	
	
	if (Config::get('max_planets') < $Position || 1 > $Position) {
		throw new Exception("Access denied for CreateOnePlanetRecord.php.<br>Try to create a planet at position:".$Galaxy.":".$System.":".$Position);
	}
	
	if (CheckPlanetIfExist($Galaxy, $System, $Position, $Universe)) {
		return false;
	}

	$FieldFactor		= Config::get('planet_factor');
	require('includes/PlanetData.php');
	$Pos                = ceil($Position / (Config::get('max_planets') / count($PlanetData))); 
	$TMax				= $PlanetData[$Pos]['temp'];
	$TMin				= $TMax - 40;
	$Fields				= $PlanetData[$Pos]['fields'] * Config::get('planet_factor');
	$Types				= array_keys($PlanetData[$Pos]['image']);
	$Type				= $Types[array_rand($Types)];
	$Class				= $Type.'planet'.($PlanetData[$Pos]['image'][$Type] < 10 ? '0' : '').$PlanetData[$Pos]['image'][$Type];
	$Name				= !empty($PlanetName) ? $GLOBALS['DATABASE']->sql_escape($PlanetName) : $LNG['type_planet'][1];
	
	$GLOBALS['DATABASE']->query("INSERT INTO ".PLANETS." SET
				name = '".$Name."',
				universe = ".$Universe.",
				id_owner = ".$PlanetOwnerID.",
				galaxy = ".$Galaxy.",
				system = ".$System.",
				planet = ".$Position.",
				last_update = ".TIMESTAMP.",
				planet_type = '1',
				image = '".$Class."',
				diameter = ".floor(1000 * sqrt($Fields)).",
				field_max = ".(($HomeWorld) ? Config::get('initial_fields') : floor($Fields)).",
				temp_min = ".$TMin.",
				temp_max = ".$TMax.",
				metal = ".Config::get('metal_start').",
				metal_perhour = ".Config::get('metal_basic_income').",
				crystal = ".Config::get('crystal_start').",
				crystal_perhour = ".Config::get('crystal_basic_income').",
				deuterium = ".Config::get('deuterium_start').",
				deuterium_perhour = ".Config::get('deuterium_basic_income').";");

	return $GLOBALS['DATABASE']->GetInsertID();
}