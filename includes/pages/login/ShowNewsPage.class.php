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

class ShowNewsPage extends AbstractPage
{
	public static $requireModule = 0;

	function __construct() 
	{
		parent::__construct();
	}
	
	function show() 
	{		
		$newsResult	= $GLOBALS['DATABASE']->query("SELECT date, title, text, user FROM ".NEWS." ORDER BY id DESC;");
		$newsList	= array();
		
		while ($newsRow = $GLOBALS['DATABASE']->fetchArray($newsResult))
		{
			$newsList[]	= array(
				'title' => $newsRow['title'],
				'from' 	=> t('news_from', _date(t('php_tdformat'), $newsRow['date']), $newsRow['user']),
				'text' 	=> makebr($newsRow['text']),
			);
		}
		
		$this->assign(array(
			'newsList'	=> $newsList,
		));
		
		$this->render('page.news.default.tpl');
	}
}