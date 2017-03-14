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

$PlanetData		= array(
	1	=> array('temp' => mt_rand(220, 260),	'fields' => mt_rand(95, 108),	'image' => array('trocken' => mt_rand(1, 10), 'wuesten' => mt_rand(1, 4))),
	2	=> array('temp' => mt_rand(170, 210),	'fields' => mt_rand(97, 110),	'image' => array('trocken' => mt_rand(1, 10), 'wuesten' => mt_rand(1, 4))),
	3	=> array('temp' => mt_rand(120, 160),	'fields' => mt_rand(98, 137),	'image' => array('trocken' => mt_rand(1, 10), 'wuesten' => mt_rand(1, 4))),
	4	=> array('temp' => mt_rand(70, 110),	'fields' => mt_rand(123, 203),	'image' => array('dschjungel' => mt_rand(1, 10))),
	5	=> array('temp' => mt_rand(60, 100),	'fields' => mt_rand(148, 210),	'image' => array('dschjungel' => mt_rand(1, 10))),
	6	=> array('temp' => mt_rand(50, 90),		'fields' => mt_rand(148, 226),	'image' => array('dschjungel' => mt_rand(1, 10))),
	7	=> array('temp' => mt_rand(40, 80),		'fields' => mt_rand(141, 273),	'image' => array('normaltemp' => mt_rand(1, 7))),
	8	=> array('temp' => mt_rand(30, 70),		'fields' => mt_rand(169, 246),	'image' => array('normaltemp' => mt_rand(1, 7))),
	9	=> array('temp' => mt_rand(20, 60),		'fields' => mt_rand(161, 238),	'image' => array('normaltemp' => mt_rand(1, 7), 'wasser' => mt_rand(1, 9))),
	10	=> array('temp' => mt_rand(10, 50),		'fields' => mt_rand(154, 224),	'image' => array('normaltemp' => mt_rand(1, 7), 'wasser' => mt_rand(1, 9))),
	11	=> array('temp' => mt_rand(0, 40),		'fields' => mt_rand(148, 204),	'image' => array('normaltemp' => mt_rand(1, 7), 'wasser' => mt_rand(1, 9))),
	12	=> array('temp' => mt_rand(-10, 30),	'fields' => mt_rand(136, 171),	'image' => array('normaltemp' => mt_rand(1, 7), 'wasser' => mt_rand(1, 9))),
	13	=> array('temp' => mt_rand(-50, -10),	'fields' => mt_rand(109, 121),	'image' => array('eis' => mt_rand(1, 10))),
	14	=> array('temp' => mt_rand(-90, -50),	'fields' => mt_rand(81, 93),	'image' => array('eis' => mt_rand(1, 10))),
	15	=> array('temp' => mt_rand(-130, -90),	'fields' => mt_rand(65, 74),	'image' => array('eis' => mt_rand(1, 10)))
);

?>