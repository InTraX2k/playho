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


class ShowScreensPage extends AbstractPage
{
	public static $requireModule = 0;

	function __construct() 
	{
		parent::__construct();
	}
	
	function show() 
	{
		$screenshots	= array();
		$directoryIterator = new DirectoryIterator('styles/resource/images/login/screens/');
        foreach ($directoryIterator as $fileinfo) { 
            if (!$fileinfo->isFile())
			{
				continue;
            }			
			
			$thumbnail = 'styles/resource/images/login/screens/'.$fileinfo->getFilename();
			if(file_exists('styles/resource/images/login/screens/thumbnails/'.$fileinfo->getFilename()))
			{
				$thumbnail = 'styles/resource/images/login/screens/thumbnails/'.$fileinfo->getFilename();
			}
			
			$screenshots[]	= array(
				'path' 		=> 'styles/resource/images/login/screens/'.$fileinfo->getFilename(),
				'thumbnail' => $thumbnail,
			);
		}
		
		$this->assign(array(
			'screenshots' => $screenshots
		));;
		$this->render('page.screens.default.tpl');
	}
}
