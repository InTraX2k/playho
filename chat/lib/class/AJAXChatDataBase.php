<?php
/*
 * @package AJAX_Chat
 * @author Sebastian Tschan
 * @copyright (c) Sebastian Tschan
 * @license GNU Affero General Public License
 * @link https://blueimp.net/ajax/
 */

// Class to initialize the DataBase connection:
class AJAXChatDataBase {

	var $_db;

	function __construct(&$dbConnectionConfig) {
		// mysql_* extension removed in PHP 7.0 — always use MySQLi
		$this->_db = new AJAXChatDataBaseMySQLi($dbConnectionConfig);
	}
	
	// Method to connect to the DataBase server:
	function connect(&$dbConnectionConfig) {
		return $this->_db->connect($dbConnectionConfig);
	}
	
	// Method to select the DataBase:
	function select($dbName) {
		return $this->_db->select($dbName);
	}
	
	// Method to determine if an error has occured:
	function error() {
		return $this->_db->error();
	}
	
	// Method to return the error report:
	function getError() {
		return $this->_db->getError();
	}
	
	// Method to return the connection identifier:
	function &getConnectionID() {
		return $this->_db->getConnectionID();
	}
	
	// Method to prevent SQL injections:
	function makeSafe($value) {
		return $this->_db->makeSafe($value);
	}

	// Method to perform SQL queries:
	function sqlQuery($sql) {
		return $this->_db->sqlQuery($sql);
	}
	
	// Method to retrieve the current DataBase name:
	function getName() {
		return $this->_db->getName(); 
		//If your database has hyphens ( - ) in it, try using this instead:
		//return '`'.$this->_db->getName().'`'; 
	}

	// Method to retrieve the last inserted ID:
	function getLastInsertedID() {
		return $this->_db->getLastInsertedID();
	}

}
?>