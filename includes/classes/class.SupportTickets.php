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
 
class SupportTickets
{	
	function __construct()
	{	
		
	}
	
	function createTicket($ownerID, $categoryID, $subject) {
		global $UNI;
		
		$GLOBALS['DATABASE']->query("INSERT INTO ".TICKETS." SET ownerID = ".$ownerID.", universe = ".$UNI.", categoryID = ".$categoryID.", subject = '".$GLOBALS['DATABASE']->sql_escape($subject)."', time = ".TIMESTAMP.";");
		
		return $GLOBALS['DATABASE']->GetInsertID();
	}
	
	function createAnswer($ticketID, $ownerID, $ownerName, $subject, $message, $status) {
				
		$GLOBALS['DATABASE']->query("INSERT INTO ".TICKETS_ANSWER." SET ticketID = ".$ticketID.",
		ownerID = ".$ownerID.", 
		ownerName = '".$GLOBALS['DATABASE']->sql_escape($ownerName)."', 
		subject = '".$GLOBALS['DATABASE']->sql_escape($subject)."', 
		message = '".$GLOBALS['DATABASE']->sql_escape($message)."', 
		time = ".TIMESTAMP.";");
		$GLOBALS['DATABASE']->query("UPDATE ".TICKETS." SET status = ".$status." WHERE ticketID = ".$ticketID.";");
		
		return $GLOBALS['DATABASE']->GetInsertID();
	}
	
	function getCategoryList() {
				
		$categoryResult		= $GLOBALS['DATABASE']->query("SELECT * FROM ".TICKETS_CATEGORY.";");
		$categoryList		= array();
		
		while($categoryRow = $GLOBALS['DATABASE']->fetch_array($categoryResult)) {
			$categoryList[$categoryRow['categoryID']]	= $categoryRow['name'];
		}
		
		$GLOBALS['DATABASE']->free_result($categoryResult);
		
		return $categoryList;
	}
}
