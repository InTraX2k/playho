<?php
/*
 * @package AJAX_Chat
 * @author Sebastian Tschan
 * @copyright (c) Sebastian Tschan
 * @license GNU Affero General Public License
 * @link https://blueimp.net/ajax/
 */

// Include Class libraries:
require(AJAX_CHAT_PATH.'lib/class/AJAXChat.php');
require(AJAX_CHAT_PATH.'lib/class/AJAXChatDataBase.php');
// mysql_* extension removed in PHP 7.0 — only load MySQLi classes
require(AJAX_CHAT_PATH.'lib/class/AJAXChatMySQLiDataBase.php');
require(AJAX_CHAT_PATH.'lib/class/AJAXChatMySQLiQuery.php');
require(AJAX_CHAT_PATH.'lib/class/AJAXChatEncoding.php');
require(AJAX_CHAT_PATH.'lib/class/AJAXChatString.php');
require(AJAX_CHAT_PATH.'lib/class/AJAXChatFileSystem.php');
require(AJAX_CHAT_PATH.'lib/class/AJAXChatHTTPHeader.php');
require(AJAX_CHAT_PATH.'lib/class/AJAXChatLanguage.php');
require(AJAX_CHAT_PATH.'lib/class/AJAXChatTemplate.php');
require(AJAX_CHAT_PATH.'lib/class/CustomAJAXChat.php');
require(AJAX_CHAT_PATH.'lib/class/CustomAJAXChatShoutBox.php');
require(AJAX_CHAT_PATH.'lib/class/CustomAJAXChatInterface.php');
?>